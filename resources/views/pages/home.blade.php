@extends('index');
@section('content')
@include('includes/slide');
<div class="clearfix"></div>
<div class="container_fullwidth">
    <div class="container">
        <div class="hot-products">
            <div id="alert-orderCart"></div>
            <h3 class="title"><strong>Hot</strong> Products</h3>
            <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next"
                    href="#">&gt;</a></div>

            <ul id="hot">
                <?php
                    $slugPro = count($pro);
                    $slugLi = ceil($slugPro/4);
                    for ($i =0; $i<$slugLi;$i++){
                        ?>
                <li>
                    <div class="row">
                        <?php
                                $product = 0 ;
                                while ($product<4)
                            {
                                if(isset($pro[$i*4 + $product]))
                                    {
                                        ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="products">
                                <div class="offer">- %20</div>
                                <div class="thumbnail"><a href="product-detail/{{$pro[$i*4 + $product]->id}}"><img
                                            src="/images/products/small/{{$pro[$i*4 + $product]->images}}"
                                            alt="Product Name"></a></div>
                                <div class="productname">{{$pro[$i*4 + $product]->name}}</div>
                                <h4 class="price">{{$pro[$i*4 + $product]->price}}</h4>
                                <div class="button_group">
                                    <button type="button" data-id="{{$pro[$i*4 + $product]->id}}"
                                        class="button add-cart">Add To Cart</button>
                                    <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                                    <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                                </div>
                            </div>
                        </div>
                        <?php
                                    }
                                $product++;
                            }
                            ?>

                    </div>

                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="featured-products">
            <h3 class="title"><strong>Featured </strong> Products</h3>
            <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next"
                    href="#">&gt;</a></div>
            <ul id="featured">
                <?php
                    for ($i =0; $i<$slugLi;$i++){
                        ?>
                <li>
                    <div class="row">
                        <?php
                            $product = 0;
                            while ($product<4)
                            {
                                if(isset($pro[$i*4+$product]))
                                    {
                                        ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="products">
                                <div class="thumbnail"><a href="product-detail/{{$pro[$i*4 + $product]->id}}"><img
                                            src="/images/products/small/{{$pro[$i*4 + $product]->images}}"
                                            alt="Product Name"></a></div>
                                <div class="productname">{{$pro[$i*4 + $product]->name}}</div>
                                <h4 class="price">{{$pro[$i*4 + $product]->price}}</h4>
                                <div class="button_group">
                                    <button class="button add-cart" data-id="{{$pro[$i*4 + $product]->id}}"
                                        type="button add-cart">Add To Cart</button>
                                    <button class="button compare" type="button">
                                        <i class="fa fa-exchange"></i>
                                    </button>
                                    <button class="button wishlist" type="button">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php
                                    }
                                $product++;
                            }
                            ?>
                    </div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
        @endsection
