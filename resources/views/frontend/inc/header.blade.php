<!--HEADER-->
<header>
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
            <div class="attr-nav">
                <ul>
                    <li class="cart-toggler">
                        <a href="{{route('sepet')}}">
                            <i class="fa fa-shopping-cart">
                            </i>
                            <span class="badge">3
                  </span>
                        </a>
                    </li>
                    <li class="search">
                        <a href="#.">
                            <i class="fa fa-search">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars">
                    </i>
                </button>
                <a class="navbar-brand" href="index.html">
                    {{config('app.name')}}
                </a>
            </div>
            <!-- End Header Navigation -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                    <li class="dropdown active">
                        <a href="{{route('anasayfa')}}" class="dropdown-toggle" data-toggle="dropdown">ANASAYFA
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{route('urunlist')}}" class="dropdown-toggle" data-toggle="dropdown">ÜRÜNLER
                        </a>

                    </li>
                    <li>
                        <a href="#.">KOLEKSİYONLAR
                        </a>
                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="{{route('kategoriler')}}" class="dropdown-toggle" data-toggle="dropdown">KATEGORİLER
                        </a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h5 class="title heading_border">Erkek Gözlük
                                        </h5>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li>
                                                    <a href="blog1.html">Blog Two Cols
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog2.html">Blog Three Cols
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog_post.html">Blog Posts
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h5 class="title heading_border">Kadın Gözlük
                                        </h5>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li>
                                                    <a href="checkout.html">Product Chekouts
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="product_detail.html">Products Details
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Shopping Cart
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h5 class="title heading_border">Tasarım Gözlük
                                        </h5>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li>
                                                    <a href="#.">Skills
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#.">Team & Testimonials
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="404.html">Errors
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <div class="content">
                                            <img src="images/mega-menu.png"  alt="menu" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('hakkimizda')}}">HAKKIMIZDA
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('iletisim') }}">İLETİŞİM
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div class=" search-toggle">
                <div class="top-search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon">
                  <i class="fa fa-search">
                  </i>
                </span>
                    </div>
                </div>
            </div>
            <ul class="cart-list">
                <li>
                    <a href="#." class="photo">
                        <img src="images/hover-cart.jpg" class="cart-thumb" alt="" />
                    </a>
                    <h6>
                        <a href="#.">Sacrificial Chair Design
                        </a>
                    </h6>
                    <p>Qty: 2
                        <span class="price">$170.00
                </span>
                    </p>
                </li>
                <li class="total clearfix">
                    <div class="pull-right">
                        <strong>Shipping
                        </strong>: $5.00
                    </div>
                    <div class="pull-left">
                        <strong>Total
                        </strong>: $173.00
                    </div>
                </li>
                <li class="cart-btn">
                    <a href="#." class="active">VIEW CART
                    </a>
                    <a href="#.">CHECKOUT
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
