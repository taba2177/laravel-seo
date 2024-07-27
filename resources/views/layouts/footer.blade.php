
<footer class="main-footer background-black">
    <div class="main-footer__bg background-black" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);"></div>
    <!-- /.main-footer__bg -->
    <div class="main-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="footer-widget footer-widget--about">
                        <a href="{{ url("index-2.html") }}" class="footer-widget__logo">
                            <img src="{{ asset("/assets/images/logo-light.png") }}" width="155" alt="Solox HTML Template">
                        </a>
                        <form action="#" data-url="MAILCHIMP_FORM_URL" class="footer-widget__newsletter mc-form">
                            <input type="text" name="EMAIL" placeholder="Email address">
                            <button type="submit" class="fas fa-paper-plane">
                                <span class="sr-only">submit</span><!-- /.sr-only -->
                            </button>
                        </form><!-- /.footer-widget__newsletter mc-form -->
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-2">
                    <div class="footer-widget footer-widget--links">
                        <h2 class="footer-widget__title">Links</h2><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__links">
                            <li><a href="{{ url("about.html") }}">About</a></li>
                            <li><a href="{{ url("memberships.html") }}">Pricing Plans</a></li>
                            <li><a href="{{ url("gift-cards.html") }}">Promotions</a></li>
                            <li><a href="{{ url("contact.html") }}">Contact</a></li>
                        </ul><!-- /.list-unstyled footer-widget__links -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-3">
                    <div class="footer-widget footer-widget--contact">
                        <h2 class="footer-widget__title">Contact</h2><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__info">
                            <li> <a href="{{ url("tel:+92(8800)-6930") }}">+ 92 ( 8800 ) - 6930</a></li>
                            <li> <a href="{{ url("mailto:needhelp@company.com") }}">needhelp@company.com</a></li>
                            <li> <a href="https://www.google.com/maps">66 Broklyn New Golden Street USA</a></li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-xl-3">
                    <div class="footer-widget footer-widget--time">
                        <h2 class="footer-widget__title">Timing</h2><!-- /.footer-widget__title -->
                        <p class="footer-widget__text">Mon to Sat: 9:00am – 6:00pm Sunday: Closed</p>
                        <!-- /.footer-widget__text -->
                        <div class="footer-widget__social">
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
                        </div><!-- /.footer-widget__social -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__top -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    &copy; Copyright <span class="dynamic-year"></span> by Solox HTML Template.
                </p>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
</footer><!-- /.main-footer -->

</div><!-- /.page-wrapper -->



<div class="mobile-nav__wrapper">
<div class="mobile-nav__overlay mobile-nav__toggler"></div>
<!-- /.mobile-nav__overlay -->
<div class="mobile-nav__content">
    <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

    <div class="logo-box">
        <a href="{{ url("index-2.html") }}" aria-label="logo image"><img src="{{ asset("/assets/images/logo-light.png") }}" width="155" alt="" /></a>
    </div>
    <!-- /.logo-box -->
    <div class="mobile-nav__container"></div>
    <!-- /.mobile-nav__container -->

    <ul class="mobile-nav__contact list-unstyled">
        <li>
            <i class="fa fa-envelope"></i>
            <a href="{{ url("mailto:needhelp@solox.com") }}">needhelp@solox.com</a>
        </li>
        <li>
            <i class="fa fa-phone-alt"></i>
            <a href="{{ url("tel:666-888-0000") }}">666 888 0000</a>
        </li>
    </ul><!-- /.mobile-nav__contact -->
    <div class="mobile-nav__social">
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
    </div><!-- /.mobile-nav__social -->
</div>
<!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
<div class="search-popup__overlay search-toggler"></div>
<!-- /.search-popup__overlay -->
<div class="search-popup__content">
    <form role="search" method="get" class="search-popup__form" action="#">
        <input type="text" id="search" placeholder="Search Here..." />
        <button type="submit" aria-label="search submit" class="solox-btn solox-btn--base">
            <span><i class="icon-magnifying-glass"></i></span>
        </button>
    </form>
</div>
<!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="{{ url("#") }}" data-target="html" class="scroll-to-target scroll-to-top">
<span class="scroll-to-top__text">back top</span>
<span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>