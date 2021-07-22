@extends('index');
@section('content')
    @include('includes/slide');
<div class="container_fullwidth">
    <div class="container">
        <div class="row">
           @include('includes/navbar');
            <div class="col-md-9">
                <div class="banner">
                    <div class="bannerslide" id="bannerslide">
                        <ul class="slides">
                            <li>
                                <a href="#">
                                    <img src="images/banner-01.jpg" alt=""/>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/banner-02.jpg" alt=""/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="products-list">
                    <div class="toolbar">
                        <div class="sorter">
                            <div class="view-mode">
                                <a href="#" class="list active">
                                    List
                                </a>
                                <a href="productgird.html" class="grid">
                                    Grid
                                </a>
                            </div>
                            <div class="sort-by">
                                Sort by :
                                <select name="" >
                                    <option value="Default" selected >
                                        Default
                                    </option>
                                    <option value="Name">
                                        Name
                                    </option>
                                    <option value="Price">
                                        Price
                                    </option>
                                </select>
                            </div>
                            <div class="limiter">
                                Show :
                                <select name="">
                                    <option value="3" selected>
                                        3
                                    </option>
                                    <option value="6">
                                        6
                                    </option>
                                    <option value="9">
                                        9
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="pager">
                            <a href="#" class="prev-page">
                                <i class="fa fa-angle-left">
                                </i>
                            </a>
                            <a href="#" class="active">
                                1
                            </a>
                            <a href="#">
                                2
                            </a>
                            <a href="#">
                                3
                            </a>
                            <a href="#" class="next-page">
                                <i class="fa fa-angle-right">
                                </i>
                            </a>
                        </div>
                    </div>
                    <ul class="products-listItem">
                        <li class="products">
                            <div class="offer">
                                New
                            </div>
                            <div class="thumbnail">
                                <img src="images/products/small/products-05.png" alt="Product Name">
                            </div>
                            <div class="product-list-description">
                                <div class="productname">
                                    Lincoln Corner Unit Products
                                </div>
                                <p>
                                    <img src="images/star.png" alt="">
                                    <a href="#" class="review_num">
                                        02 Review(s)
                                    </a>
                                </p>
                                <p>
                                    Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae. Proin lectus ipsum, gravida etds mattis vulputate, tristique ut lectus. Sed et lorem nunc...
                                </p>
                                <div class="list_bottom">
                                    <div class="price">
                          <span class="new_price">
                            450.00
                            <sup>
                              $
                            </sup>
                          </span>
                                        <span class="old_price">
                            450.00
                            <sup>
                              $
                            </sup>
                          </span>
                                    </div>
                                    <div class="button_group">
                                        <button class="button">
                                            Add To Cart
                                        </button>
                                        <button class="button compare">
                                            <i class="fa fa-exchange">
                                            </i>
                                        </button>
                                        <button class="button favorite">
                                            <i class="fa fa-heart-o">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="products">
                            <div class="offer">
                                New
                            </div>
                            <div class="thumbnail">
                                <img src="images/products/small/products-05.png" alt="Product Name">
                            </div>
                            <div class="product-list-description">
                                <div class="productname">
                                    Lincoln Corner Unit Products
                                </div>
                                <p>
                                    <img src="images/star.png" alt="">
                                    <a href="#" class="review_num">
                                        02 Review(s)
                                    </a>
                                </p>
                                <p>
                                    Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae. Proin lectus ipsum, gravida etds mattis vulputate, tristique ut lectus. Sed et lorem nunc...
                                </p>
                                <div class="list_bottom">
                                    <div class="price">
                          <span class="new_price">
                            450.00
                            <sup>
                              $
                            </sup>
                          </span>
                                        <span class="old_price">
                            450.00
                            <sup>
                              $
                            </sup>
                          </span>
                                    </div>
                                    <div class="button_group">
                                        <button class="button">
                                            Add To Cart
                                        </button>
                                        <button class="button compare">
                                            <i class="fa fa-exchange">
                                            </i>
                                        </button>
                                        <button class="button favorite">
                                            <i class="fa fa-heart-o">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="products">
                            <div class="offer">
                                New
                            </div>
                            <div class="thumbnail">
                                <img src="images/products/small/products-05.png" alt="Product Name">
                            </div>
                            <div class="product-list-description">
                                <div class="productname">
                                    Lincoln Corner Unit Products
                                </div>
                                <p>
                                    <img src="images/star.png" alt="">
                                    <a href="#" class="review_num">
                                        02 Review(s)
                                    </a>
                                </p>
                                <p>
                                    Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae. Proin lectus ipsum, gravida etds mattis vulputate, tristique ut lectus. Sed et lorem nunc...
                                </p>
                                <div class="list_bottom">
                                    <div class="price">
                          <span class="new_price">
                            450.00
                            <sup>
                              $
                            </sup>
                          </span>
                                        <span class="old_price">
                            450.00
                            <sup>
                              $
                            </sup>
                          </span>
                                    </div>
                                    <div class="button_group">
                                        <button class="button">
                                            Add To Cart
                                        </button>
                                        <button class="button compare">
                                            <i class="fa fa-exchange">
                                            </i>
                                        </button>
                                        <button class="button favorite">
                                            <i class="fa fa-heart-o">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="products">
                            <div class="offer">
                                New
                            </div>
                            <div class="thumbnail">
                                <img src="images/products/small/products-05.png" alt="Product Name">
                            </div>
                            <div class="product-list-description">
                                <div class="productname">
                                    Lincoln Corner Unit Products
                                </div>
                                <p>
                                    <img src="images/star.png" alt="">
                                    <a href="#" class="review_num">
                                        02 Review(s)
                                    </a>
                                </p>
                                <p>
                                    Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae. Proin lectus ipsum, gravida etds mattis vulputate, tristique ut lectus. Sed et lorem nunc...
                                </p>
                                <div class="list_bottom">
                                    <div class="price">
                          <span class="new_price">
                            450.00
                            <sup>
                              $
                            </sup>
                          </span>
                                        <span class="old_price">
                            450.00
                            <sup>
                              $
                            </sup>
                          </span>
                                    </div>
                                    <div class="button_group">
                                        <button class="button">
                                            Add To Cart
                                        </button>
                                        <button class="button compare">
                                            <i class="fa fa-exchange">
                                            </i>
                                        </button>
                                        <button class="button favorite">
                                            <i class="fa fa-heart-o">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="products">
                            <div class="offer">
                                New
                            </div>
                            <div class="thumbnail">
                                <img src="images/products/small/products-05.png" alt="Product Name">
                            </div>
                            <div class="product-list-description">
                                <div class="productname">
                                    Lincoln Corner Unit Products
                                </div>
                                <p>
                                    <img src="images/star.png" alt="">
                                    <a href="#" class="review_num">
                                        02 Review(s)
                                    </a>
                                </p>
                                <p>
                                    Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultri ces posuere cubilia curae. Proin lectus ipsum, gravida etds mattis vulputate, tristique ut lectus. Sed et lorem nunc...
                                </p>
                                <div class="list_bottom">
                                    <div class="price">
                          <span class="new_price">
                            450.00
                            <sup>
                              $
                            </sup>
                          </span>
                                        <span class="old_price">
                            450.00
                            <sup>
                              $
                            </sup>
                          </span>
                                    </div>
                                    <div class="button_group">
                                        <button class="button">
                                            Add To Cart
                                        </button>
                                        <button class="button compare">
                                            <i class="fa fa-exchange">
                                            </i>
                                        </button>
                                        <button class="button favorite">
                                            <i class="fa fa-heart-o">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="toolbar">
                        <div class="sorter bottom">
                            <div class="view-mode">
                                <a href="#" class="list active">
                                    List
                                </a>
                                <a href="productgird.html" class="grid">
                                    Grid
                                </a>
                            </div>
                            <div class="sort-by">
                                Sort by :
                                <select name="" >
                                    <option value="Default" selected>
                                        Default
                                    </option>
                                    <option value="Name">
                                        Name
                                    </option>
                                    <option value="Price">
                                        Price
                                    </option>
                                </select>
                            </div>
                            <div class="limiter">
                                Show :
                                <select name="" >
                                    <option value="3" selected>
                                        3
                                    </option>
                                    <option value="6">
                                        6
                                    </option>
                                    <option value="9">
                                        9
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="pager">
                            <a href="#" class="prev-page">
                                <i class="fa fa-angle-left">
                                </i>
                            </a>
                            <a href="#" class="active">
                                1
                            </a>
                            <a href="#">
                                2
                            </a>
                            <a href="#">
                                3
                            </a>
                            <a href="#" class="next-page">
                                <i class="fa fa-angle-right">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
