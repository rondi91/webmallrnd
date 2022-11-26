@extends('layouts.shops.main')
@section('content')

<div class="col-lg-9">
    <div class="shop-product-wrapper res-xl res-xl-btn">
        <div class="shop-bar-area">
            <div class="shop-bar pb-60">
                <div class="shop-found-selector">
                    <div class="shop-found">
                        <p><span>23</span> Product Found of <span>50</span></p>
                    </div>
                    <div class="shop-selector">
                        <label>Sort By : </label>
                        <select name="select">
                            <option value="">Default</option>
                            <option value="">A to Z</option>
                            <option value=""> Z to A</option>
                            <option value="">In stock</option>
                        </select>
                    </div>
                </div>
                <div class="shop-filter-tab">
                    <div class="shop-tab nav" role=tablist>
                        <a class="active" href="#grid-sidebar1" data-toggle="tab" role="tab" aria-selected="false">
                            <i class="ti-layout-grid4-alt"></i>
                        </a>
                        <a href="#grid-sidebar2" data-toggle="tab" role="tab" aria-selected="true">
                            <i class="ti-menu"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="shop-product-content tab-content">
                <div id="grid-sidebar1" class="tab-pane fade active show">
                    <div class="row">


                        @foreach ($products as $product)
                            
                        
                        <div class="col-lg-6 col-md-6 col-xl-3">
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="image1.jpg" alt="">
                                    </a>
                                    <span>hot</span>
                                    <div class="product-action">
                                        <a class="animate-left" title="Wishlist" href="#">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                        <a class="animate-top" title="Add To Cart" href="{{ route('cart.add',$product->id) }}">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="#">{{ $product->name }} </a></h4>
                                    <span class="mb-0">Rp.{{$product->price  }}</span>
                                </div>
                            </div>
                       </div>
                       @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        
        {{ $products->links() }}
    </div>
    
</div>
@endsection