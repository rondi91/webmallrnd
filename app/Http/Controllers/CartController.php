<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        // dd($cartItems);
        return view('cart.index', compact('cartItems'));
    }


    public function addToCart(Product $product)
    {
        // dd($product);
        \Cart::session(auth()->id())->add([
            'id' =>$product->id,
            'name' =>$product->name,
            'price' =>$product->price,
            // 'quantity' =>$product->quantity,
            'quantity' => 1,
            'attributes' => array(
                'image' =>$product->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart($rowId)
    {
        // dd(request('quantity'));     

        \Cart::session(auth()->id())->update(
           $rowId,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => request('quantity')
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function destroy(Request $request)
    {
        // dd(Request);
        \Cart::session(auth()->id())->remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function checkout()
    {
        return view('cart.checkout');
    }
}