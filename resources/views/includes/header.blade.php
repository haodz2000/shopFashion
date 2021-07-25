
<div class="header">
    <div class="container">
        <div class="row">

            <div class="col-md-2 col-sm-2">
                <div class="logo"><a href="index.html"><img src="{{asset('/images/logo.png')}}" alt="FlatShop"></a></div>
            </div>

            <div class="col-md-10 col-sm-10">
                @include('includes/header-top')
                <div class="clearfix"></div>
                <div  class="header_bottom">
                    <ul class="option" id="small-Cart">
                        <li id="search" class="search">
                            <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                        </li>
                        <li id="cart-item"  class="option-cart">
                                <?php
                                $newCart = session('Cart');
                                ?>
                                @if(!isset($newCart)||$newCart ==null)
                                    <a href="{{route('cart')}}" class="cart-icon">cart <span class="cart_no">0</span></a>
                                @endif
                                @if($newCart != null)
                                    <?php
                                    $slug = 0;
                                    ?>
                                    <a href="{{route('cart')}}" class="cart-icon">cart <span class="cart_no">{{$newCart->totalQuanty}}</span></a>
                                    <ul  class="option-cart-item width-cart">
                                        @foreach($newCart->products as $item)
                                            <?php $slug++?>
                                            @if($slug<4)
                                                <li>
                                                    <div class="cart-item">
                                                        <div class="image"><img src="/images/products/thum/{{$item['productInfo']->images}}" alt=""></div>
                                                        <div class="item-description">
                                                            <p class="name">{{$item['productInfo']->name}}</p>
                                                            <p>Size: <span class="light-red">One size</span><br>Quantity: <span class="light-red">{{$item['quanty']}}</span></p>
                                                        </div>
                                                        <div class="right">
                                                            <p class="price">{{number_format($item['price'])}}đ</p>
                                                            <button data-id="{{$item['productInfo']->id}}" class="remove"><img src="/images/remove.png" alt="remove"></button>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endif

                                        @endforeach
                                        @if($slug>=4)
                                            <a href="{{route('cart')}}"class="">>>Xem thêm</a>
                                        @endif

                                        <li>
                                            <span class="total">Total <strong>{{number_format($newCart->totalPrice)}} VND</strong></span><button class="checkout" onClick="location.href='{{route('cart')}}'">CheckOut</button>
                                        </li>
                                    </ul>
                                @endif

                            </li>

                    </ul>
                    <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="{{route('/')}}" class="" data-toggle="">Home</a>
                            </li>
                            <li><a href="{{route('products')}}">men</a></li>
                            <li><a href="{{route('products')}}">women</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
{{--                                <div class="dropdown-menu mega-menu">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-6 col-sm-6">--}}
{{--                                            <ul class="mega-menu-links">--}}
{{--                                                <li><a href="#">New Collection</a></li>--}}
{{--                                                <li><a href="#">Shirts & tops</a></li>--}}
{{--                                                <li><a href="#">Laptop & Brie</a></li>--}}
{{--                                                <li><a href="#">Dresses</a></li>--}}
{{--                                                <li><a href="#">Blazers & Jackets</a></li>--}}
{{--                                                <li><a href="#">Shoulder Bags</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6 col-sm-6">--}}
{{--                                            <ul class="mega-menu-links">--}}
{{--                                                <li><a href="#">New Collection</a></li>--}}
{{--                                                <li><a href="#">Shirts & tops</a></li>--}}
{{--                                                <li><a href="#">Laptop & Brie</a></li>--}}
{{--                                                <li><a href="#">Dresses</a></li>--}}
{{--                                                <li><a href="#">Blazers & Jackets</a></li>--}}
{{--                                                <li><a href="#">Shoulder Bags</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </li>
                            <li><a href="#.html">gift</a></li>
                            <li><a href="#.html">kids</a></li>
                            <li><a href="#.html">blog</a></li>
                            <li><a href="#.html">jewelry</a></li>
                            <li><a href="{{route('contact')}}">contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
