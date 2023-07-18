@extends('frontend.pages.index')

@section('content')
    <section class="page_menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="hidden">hidden</h3>
                    <ul class="breadcrumb">
                        <li><a href="{{route('anasayfa')}}">Anasayfa</a>

                        </li>
                        <li class="active">Ürünler</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="grid padding">
        <h3 class="hidden">hidden</h3>
        <div class="container">
            <div class="col-md-3 col-sm-3">
                <aside class="sidebar">
                    <div class="widget content_space">
                        <h4 class="heading uppercase bottom30">categories</h4>
                        <div class="accordion-container">
                            <div class="set">
                                <a href="#." class="active uppercase">Erkek<i class="fa fa-plus"></i></a>
                                <div class="content" style="display:block;">
                                    <ul>
                                        <li><a href="#.">Bag & Luggage</a>
                                        </li>
                                        <li><a href="#.">Eyewear</a>
                                        </li>
                                        <li><a href="#.">Jewelry</a>
                                        </li>
                                        <li><a href="#.">Shoes</a>
                                        </li>
                                        <li><a href="#.">Skerts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="set">
                                <a href="#." class="uppercase">Kadın <i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul>
                                        <li><a href="#.">Bag & Luggage</a>
                                        </li>
                                        <li><a href="#.">Eyewear</a>
                                        </li>
                                        <li><a href="#.">Jewelry</a>
                                        </li>
                                        <li><a href="#.">Shoes</a>
                                        </li>
                                        <li><a href="#.">Skerts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="set">
                                <a href="#.">Çocuk<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <ul>
                                        <li><a href="#.">Bag & Luggage</a>
                                        </li>
                                        <li><a href="#.">Eyewear</a>
                                        </li>
                                        <li><a href="#.">Jewelry</a>
                                        </li>
                                        <li><a href="#.">Shoes</a>
                                        </li>
                                        <li><a href="#.">Skerts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="set">
                                <a href="#.">Tüm Ürünler<i class="fa fa-plus"></i> </a>
                                <div class="content">
                                    <ul>
                                        <li><a href="#.">Bag & Luggage</a>
                                        </li>
                                        <li><a href="#.">Eyewear</a>
                                        </li>
                                        <li><a href="#.">Jewelry</a>
                                        </li>
                                        <li><a href="#.">Shoes</a>
                                        </li>
                                        <li><a href="#.">Skerts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget content_space">
                        <h4 class="heading uppercase bottom30">Shop by</h4>
                        <h5 class="uppercase marginbottom15">Manufacturer</h5>
                        <ul class="category">
                            <li><a href="#.">Adidas <span>(10)</span></a>
                            </li>
                            <li><a href="#.">Nike <span>(09)</span></a>
                            </li>
                            <li><a href="#.">Converse <span>(11)</span></a>
                            </li>
                            <li><a href="#.">Chanel <span>(10)</span></a>
                            </li>
                            <li><a href="#.">Gucci <span>(02)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget content_space">
                        <h5 class="uppercase marginbottom15">PriCe</h5>
                        <div class="range">
                            <div id="slider-3"></div>
                            <p>
                                <input type="text" id="price" style="border:0; color:#333333; font-weight:bold; font-size:12px;">
                            </p>
                            <button type="submit">Search</button>
                        </div>
                    </div>
                    <div class="widget content_space">
                        <h5 class="uppercase marginbottom15">color options</h5>
                        <ul class="category">
                            <li><a href="#.">Black<span>(10)</span></a>
                            </li>
                            <li><a href="#.">White<span>(09)</span></a>
                            </li>
                            <li><a href="#.">Blue<span>(11)</span></a>
                            </li>
                            <li><a href="#.">Red<span>(10)</span></a>
                            </li>
                            <li><a href="#.">Screen<span>(02)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget content_space">
                        <h5 class="uppercase marginbottom15">Subcategory</h5>
                        <ul class="category">
                            <li><a href="#.">Adidas <span>(10)</span></a>
                            </li>
                            <li><a href="#.">Nike <span>(09)</span></a>
                            </li>
                            <li><a href="#.">Converse <span>(11)</span></a>
                            </li>
                            <li><a href="#.">Chanel <span>(10)</span></a>
                            </li>
                            <li><a href="#.">Gucci <span>(02)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget content_space">
                        <h5 class="uppercase marginbottom15">Size options</h5>
                        <ul class="category">
                            <li><a href="#.">L <span>(10)</span></a>
                            </li>
                            <li><a href="#.">S <span>(09)</span></a>
                            </li>
                            <li><a href="#.">M <span>(11)</span></a>
                            </li>
                            <li><a href="#.">XL <span>(10)</span></a>
                            </li>
                        </ul>
                    </div>

                </aside>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="shop-grid-controls">
                    <a class="side-button bottom30" href="#."> Show Sidebar</a>
                    <div class="view-button grid active bottom30">
                        <i class="fa fa-th-large"></i>
                    </div>
                    <div class="view-button list bottom30">
                        <i class="fa fa-align-justify"></i>
                    </div>
                    <div class="entry bottom30">
                        <form class="grid-form">
                            <div class="form-group">
                                <div class="select form-control">
                                    <select name="country" id="sorting">
                                        <option selected="">Defaul sorting</option>
                                        <option>Defaul sorting</option>
                                        <option>Defaul sorting</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row shop-grid grid-view">
                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <div class="tag">
                                    <div class="tag-btn">
                                        <span class="uppercase text-center">New</span>
                                    </div>
                                </div>
                                <a class="fancybox" href="images/product5.jpg">
                                    <img src="images/product5.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                                <a class="fancybox" href="images/product5.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <div class="tag">
                                    <div class="tag-btn">
                                        <span class="uppercase text-center">New</span>
                                    </div>
                                </div>
                                <a class="fancybox" href="images/product6.jpg"><img src="images/product6.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#."><i class="fa fa-heart-o"></i></a>
                                        <a class="icons" href="#."><i class="fa fa-exchange"></i></a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                                <a class="fancybox" href="images/product6.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <a class="fancybox" href="images/product7.jpg"><img src="images/product7.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></span>
                                <a class="fancybox" href="images/product7.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <a class="fancybox" href="images/product8.jpg"><img src="images/product8.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                                <a class="fancybox" href="images/product8.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <div class="tag">
                                    <div class="tag-btn">
                                        <span class="uppercase text-center">New</span>
                                    </div>
                                </div>
                                <a class="fancybox" href="images/product1.jpg"><img src="images/product1.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                                <a class="fancybox" href="images/product1.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <a class="fancybox" href="images/product3.jpg"><img src="images/product3.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                                <a class="fancybox" href="images/product3.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <a class="fancybox" href="images/product2.jpg"><img src="images/product2.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                                <a class="fancybox" href="images/product2.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <a class="fancybox" href="images/product4.jpg"><img src="images/product4.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                                <a class="fancybox" href="images/product4.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="product_wrap heading_space">
                            <div class="image">
                                <div class="tag">
                                    <div class="tag-btn">
                                        <span class="uppercase text-center">New</span>
                                    </div>
                                </div>
                                <a class="fancybox" href="images/product9.jpg"><img src="images/product9.jpg" alt="Product" class="img-responsive">
                                </a>
                            </div>
                            <div class="product_desc">
                                <p class="title">Sacrificial Chair Design </p>
                                <div class="list_content">
                                    <h4 class="bottom30">Sacrificial Chair Design </h4>
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                                    <ul class="review_list bottomtop30">
                                        <li><img alt="star" src="images/star.png">
                                        </li>
                                        <li><a href="#.">10 review(s) </a>
                                        </li>
                                        <li><a href="#.">Add your review</a>
                                        </li>
                                    </ul>
                                    <h4 class="price bottom30"><i class="fa fa-gbp"></i>170.00 &nbsp;<span class="discount"><i class="fa fa-gbp"></i>170.00</span></h4>
                                    <div class="cart-buttons">
                                        <a class="uppercase border-radius btn-dark" href="cart.html"><i class="fa fa-shopping-basket"></i> &nbsp; Add to cart</a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                        <a class="icons" href="#.">
                                            <i class="fa fa-exchange"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="price"><i class="fa fa-gbp"></i>170.00</span>
                                <a class="fancybox" href="images/product9.jpg" data-fancybox-group="gallery"><i class="fa fa-shopping-bag open"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <ul class="pager">
                            <li><a href="#."><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="active"><a href="#.">01</a>
                            </li>
                            <li><a href="#.">02</a>
                            </li>
                            <li><a href="#.">03</a>
                            </li>
                            <li><a href="#."><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right">
                        <h5 class="result uppercase">Showing 1-12 of 20 relults</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
