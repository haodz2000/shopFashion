@extends('index');
@section('title')
    ShopFashion
@endsection
@section('facebookComment')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="J9CJ73M5"></script>
@endsection
@section('content')
    @if(isset($product)&&isset($hotProduct))
<div class="container_fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="products-details">
                    <div class="preview_image">
                        <div class="preview-small">
                            <img id="zoom_03" src="/images/products/medium/products-01.jpg" data-zoom-image="/images/products/Large/products-01.jpg" alt="">
                        </div>
                        <div class="thum-image">
                            <ul id="gallery_01" class="prev-thum">
                                <li>
                                    <a href="#" data-image="/images/products/medium/products-01.jpg" data-zoom-image="/images/products/Large/products-01.jpg">
                                        <img src="/images/products/thum/products-01.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="images/products/medium/products-02.png" data-zoom-image="/images/products/Large/products-02.jpg">
                                        <img src="/images/products/thum/products-02.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="images/products/medium/products-03.jpg" data-zoom-image="/images/products/Large/products-03.jpg">
                                        <img src="/images/products/thum/products-03.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="/images/products/medium/products-04.jpg" data-zoom-image="/images/products/Large/products-04.jpg">
                                        <img src="/images/products/thum/products-04.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#" data-image="images/products/medium/products-05.jpg" data-zoom-image="/images/products/Large/products-05.jpg">
                                        <img src="/images/products/thum/products-05.png" alt="">
                                    </a>
                                </li>
                            </ul>
                            <a class="control-left" id="thum-prev" href="javascript:void(0);">
                                <i class="fa fa-chevron-left">
                                </i>
                            </a>
                            <a class="control-right" id="thum-next" href="javascript:void(0);">
                                <i class="fa fa-chevron-right">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="products-description">
                        <h5 class="name">
                            {{$product->name}}
                        </h5>
                        <p>
                            <img alt="" src="/images/star.png">
                            <a class="review_num" href="#">
                                02 Review(s)
                            </a>
                        </p>
                        <p>
                            Availability:
                            <span class=" light-red">{{$product->quantity}}</span>
                        </p>
                        <p>{{$product->description}}</p>
                        <hr class="border">
                        <div class="price">
                            Price :<span class="new_price">{{number_format($product->price)}} <sup>đ</sup>
{{--                        </span>--}}
{{--                                <span class="old_price">450.00<sup>$</sup>--}}
{{--                        </span>--}}
                        </div>
                        <hr class="border">
                        <div class="wided">
                            <div class="button_group">
                                <button type="button" data-id="{{(int)$product->id}}" class="button add-cart"  >Add To Cart</button>
                                <button class="button compare">
                                    <i class="fa fa-exchange">
                                    </i>
                                </button>
                                <button class="button favorite">
                                    <i class="fa fa-heart-o">
                                    </i>
                                </button>
                                <button class="button favorite">
                                    <i class="fa fa-envelope-o">
                                    </i>
                                </button>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                        <hr class="border">
                        <img src="/images/share.png" alt="" class="pull-right">
                    </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="tab-box">
                    <div id="tabnav">
                        <ul>
                            <li>
                                <a  id="tagDescription">
                                    DESCRIPTION
                                </a>
                            </li>
                            <li>
                                <a  id="tagReview">
                                    REVIEW
                                </a>
                            </li>
                            <li>
                                <a class="" href="#tags">
                                    PRODUCT TAGS
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content-wrap">
                        <div class="styleTag" id="description">
                            {{$product->description}}
                        </div>
                        <div class="styleTag"  style="display: none" id="review">
                            <div class="fb-comments" data-href="https://localhost:8000/products/{{$product->id}}" data-width="" data-numposts="5"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                </div>
                <div id="productsDetails" class="hot-products">
                    <h3 class="title">
                        <strong>
                            Hot
                        </strong>
                        Products
                    </h3>
                    <div class="control">
                        <a id="prev_hot" class="prev" href="#">
                            &lt;
                        </a>
                        <a id="next_hot" class="next" href="#">
                            &gt;
                        </a>
                    </div>
                    <ul id="hot">
                        <?php
                        $pro = $hotProduct;
                        $slugPro = count($pro);
                        $slugLi = ceil($slugPro/3);
                        for ($i =0; $i<$slugLi;$i++){
                        ?>
                        <li>
                            <div class="row">
                                <?php
                                $location = 0 ;
                                while ($location<3)
                                {
                                if(isset($pro[$i*3 + $location]))
                                {
                                ?>
                                <div class="col-md-4 col-sm-4">
                                    <div class="products">
                                        <div class="offer">- %20</div>
                                        <div class="thumbnail"><a href="/product-detail/{{$pro[$i*3 + $location]->id}}">
                                                <img src="/images/products/small/{{$pro[$i*3 + $location]->images}}" alt="Product Name"></a></div>
                                        <div class="productname">{{$pro[$i*3 + $location]->name}}</div>
                                        <h4 class="price">{{$pro[$i*3 + $location]->price}}</h4>
                                        <div class="button_group">
                                            <button type="button" data-id="{{$pro[$i*3 + $location]->id}}" class="button add-cart"  >Add To Cart</button>
                                            <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                                            <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                    $location++;
                                }
                                ?>

                            </div>

                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="clearfix">
                </div>
            </div>
            <div class="col-md-3">
                <div class="special-deal leftbar">
                    <h4 class="title">
                        Special
                        <strong>
                            Deals
                        </strong>
                    </h4>
                    <div class="special-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="/images/products/thum/products-01.png" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <p>
                                Licoln Corner Unit
                            </p>
                            <h5 class="price">
                                $300.00
                            </h5>
                        </div>
                    </div>
                    <div class="special-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="/images/products/thum/products-02.png" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <p>
                                Licoln Corner Unit
                            </p>
                            <h5 class="price">
                                $300.00
                            </h5>
                        </div>
                    </div>
                    <div class="special-item">
                        <div class="product-image">
                            <a href="#">
                                <img src="/images/products/thum/products-03.png" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <p>
                                Licoln Corner Unit
                            </p>
                            <h5 class="price">
                                $300.00
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="product-tag leftbar">
                    <h3 class="title">
                        Products
                        <strong>
                            Tags
                        </strong>
                    </h3>
                    <ul>
                        <li>
                            <a href="#">
                                Lincoln us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                SDress for Girl
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Corner
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Window
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                PG
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Oscar
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Bath room
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                PSD
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                </div>
                <div class="get-newsletter leftbar">
                    <h3 class="title">
                        Get
                        <strong>
                            newsletter
                        </strong>
                    </h3>
                    <p>
                        Casio G Shock Digital Dial Black.
                    </p>
                    <form>
                        <input class="email" type="text" name="" placeholder="Your Email...">
                        <input class="submit" type="submit" value="Submit">
                    </form>
                </div>
                <div class="clearfix">
                </div>
                <div class="fbl-box leftbar">
                    <h3 class="title">
                        Facebook
                    </h3>
                    <span class="likebutton">
                  <a href="#">
                    <img src="/images/fblike.png" alt="">
                  </a>
                </span>
                    <p>
                        12k people like Flat Shop.
                    </p>
                    <ul>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                    </ul>
                    <div class="fbplug">
                        <a href="#">
                    <span>
                      <img src="/images/fbicon.png" alt="">
                    </span>
                            Facebook social plugin
                        </a>
                    </div>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
    @endif
@endsection
        @section('js_by_page')
            <script type="text/javascript" src="{{asset('/js/my-script.js')}}"></script>
            <script type="text/javascript">
                    jQuery(' #tagDescription').click(function ()
                    {
                        jQuery(this).addClass('active');
                        jQuery("#description").css('display','block');
                        jQuery("#review").css('display','none');
                    })
                    jQuery('#tabnav #tagReview').click(function ()
                    {
                        jQuery("#description").css('display','none');
                        jQuery("#review").css('display','block');
                    })
            </script>
@endsection
