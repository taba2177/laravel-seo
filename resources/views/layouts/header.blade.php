    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <i class="fas fa-envelope topbar-one__info__icon"></i>
                            <a href="{{ url("mailto:needhelp@company.com") }}">needhelp@company.com</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <i class="fas fa-phone topbar-one__info__icon"></i>
                            <a href="{{ url("tel:+92(8800)-6930") }}">+ 92 ( 8800 ) - 6930</a>
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="topbar-one__right">
                        <p class="topbar-one__text">Mon mohamed khaled to Sat: 9:00am – 6:00pm Sun: Closed</p><!-- /.topbar-one__text -->
                        <div class="topbar-one__social">
                            <a href="https://twitter.com/">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://facebook.com/">
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://pinterest.com/">
                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                                <span class="sr-only">Pinterest</span>
                            </a>
                            <a href="https://instagram.com/">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                        </div><!-- /.topbar-one__social -->
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div><!-- /.topbar-one -->


        <header class="main-header sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="{{ url("index-2") }}">
                            <img src="{{ asset("/assets/images/logo-dark.png") }}" alt="Solox HTML" width="156">
                        </a>
                    </div><!-- /.main-header__logo -->

                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">

                            <li>
                                <a href="{{ url("about") }}">About</a>
                            </li>
                          
                            <li class="dropdown">
                                <a href="{{ url("#") }}">Services</a>
                                <ul>
                                    <li><a href="{{ url("services") }}">Services</a></li>
                                    <li><a href="{{ url("services-grid") }}">Services Grid</a></li>
                                    <li><a href="{{ url("services-carousel") }}">Services Carousel</a></li>
                                    <li><a href="{{ url("service-d-salt") }}">Salt Therapy</a></li>
                                    <li><a href="{{ url("service-d-aroma") }}">Aroma Therapy</a></li>
                                    <li><a href="{{ url("service-d-hydro-therapy") }}">Hydro Therapy</a></li>
                                    <li><a href="{{ url("service-d-reflexology") }}">Reflexology</a></li>
                                    <li> <a href="{{ url("service-d-sauna") }}">Sauna Relax</a></li>
                                    <li><a href="{{ url("service-d-thermo-stone") }}">Thermo Stone</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="{{ url("#") }}">Shop</a>
                                <ul class="sub-menu">
                                    <li class="dropdown">
                                        <a href="{{ url("#") }}">Products</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url("products") }}">No sidebar</a></li>
                                            <li><a href="{{ url("products-left") }}">Left sidebar</a></li>
                                            <li><a href="{{ url("products-right") }}">Right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url("products-carousel") }}">Products carousel</a></li>
                                    <li><a href="{{ url("product-details") }}">Product details</a></li>
                                    <li><a href="{{ url("cart") }}">Cart</a></li>
                                    <li><a href="{{ url("checkout") }}">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="{{ url("#") }}">News</a>
                                <ul class="sub-menu">
                                    <li class="dropdown">
                                        <a href="{{ url("#") }}">News grid</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url("blog-grid") }}">No sidebar</a></li>
                                            <li><a href="{{ url("blog-grid-left") }}">Left sidebar</a></li>
                                            <li><a href="{{ url("blog-grid-right") }}">Right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ url("#") }}">News list</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url("blog-list") }}">No sidebar</a></li>
                                            <li><a href="{{ url("blog-list-left") }}">Left sidebar</a></li>
                                            <li><a href="{{ url("blog-list-right") }}">Right sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url("blog-carousel") }}">News carousel</a></li>
                                    <li class="dropdown">
                                        <a href="{{ url("#") }}">News details</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url("blog-details") }}">No sidebar</a></li>
                                            <li><a href="{{ url("blog-details-left") }}">Left sidebar</a></li>
                                            <li><a href="{{ url("blog-details-right") }}">Right sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url("contact") }}">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- /.main-header__nav -->
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <a href="{{ url("#") }}" class="search-toggler main-header__search">
                            <i class="icon-magnifying-glass" aria-hidden="true"></i>
                            <span class="sr-only">Search</span>
                        </a><!-- /.search-toggler -->
                        <a href="{{ url("cart") }}" class="main-header__cart">
                            <i class="icon-shopping-cart" aria-hidden="true"></i>
                            <span class="sr-only">Search</span>
                        </a><!-- /.search-toggler -->
                        <a href="{{ url("contact") }}" class="solox-btn main-header__btn">
                            <span>Book now</span>
                        </a><!-- /.thm-btn main-header__btn -->
                    </div><!-- /.main-header__right -->
                </div><!-- /.main-header__inner -->
            </div><!-- /.container-fluid -->
</header>
        
        