@extends('index');
@section('content');

<div class="container_fullwidth">
    <div class="container shopping-cart">
        <div class="row" id="data-cart">
            <?php
            $newCart = session('Cart');
            ?>
            <div class="col-md-12 table-cart">
                <h3 class="title">
                    Shopping Cart
                </h3>
                <div class="clearfix">
                </div>
                <table class="shop-table">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Dtails </th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($newCart)&& $newCart !=null)
                        @foreach($newCart->products as $item)
                        <tr>
                            <td>
                                <img src="images/products/small/{{$item['productInfo']->images}}" alt="">
                            </td>
                            <td>
                                <div class="shop-details">
                                    <div class="productname">
                                        {{$item['productInfo']->name}}
                                    </div>
                                    <p>
                                        <img alt="" src="images/star.png">
                                        <a class="review_num" href="#">02 Review(s)</a>
                                    </p>
                                    <div class="color-choser">
                              <span class="text">Product Color :</span>
                                        <ul>
                                            <li>
                                                <a class="black-bg " href="#">black</a>
                                            </li>
                                            <li>
                                                <a class="red-bg " href="#">light red</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </td>
                            <td>
                                <h5>{{number_format($item['productInfo']->price)}}đ</h5>
                            </td>
                            <td>
                                <input  data-id="{{$item['productInfo']->id}}" class="width-slug quanty" value="{{$item['quanty']}}" type="number">
                            </td>
                            <td>
                                <h5>
                                    <strong class="red">{{number_format($item['price'])}}đ</strong>
                                </h5>
                            </td>
                            <td>
                                <button type="button" data-id="{{$item['productInfo']->id}}" class="remove" >
                                    <img src="images/remove.png" alt="">
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td style="border: none" colspan="6" class="text-danger fa-2x">Giỏ hàng rỗng</td>
                        </tr>
                    @endif
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="6">
                            <a href="{{route('/')}}">
                                <button class="pull-left">
                                    Continue Shopping
                                </button>
                            </a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                <div class="clearfix">
                </div>
                <div class="row">

                    <div class="col-md-4 col-sm-6 float-right">
                        <div class="shippingbox">
                            <div class="grandtotal">
                                <h5>
                                    GRAND TOTAL
                                </h5>
                                <span>
                                    @if(isset($newCart))
                                        {{number_format($newCart->totalPrice)}}đ
                                    @else
                                        0đ
                                    @endif

                                </span>
                            </div>
                            <button class="process-Checkout">
                                Process To Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
            <div id="form-checkout" class="row ">
                <h3 class="title">
                    Checkout
                </h3>
                <div class="clearfix">
                </div>

                <form action="index.php?page=ordered" method="POST" id="checkout">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input required="" type="text" name="name" class="form-control" id="name" placeholder="Name" />
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input required type="number" name="phone" class="form-control" id="phone" placeholder="" />
                        </div>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input required type="email" name="email" class="form-control" id="email" placeholder="Email" />
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input required type="text" name="address" class="form-control" id="address" placeholder="Address" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="note">Note</label>
                            <textarea class="form-control" name="note" rows="15" cols="10" placeholder="Note order"></textarea>
                        </div>
                    </div>

                    <button type="submit" name="submit-order" class="btn btn-danger pull-right">Checkout</button>
                </form>
            </div>
@endsection
