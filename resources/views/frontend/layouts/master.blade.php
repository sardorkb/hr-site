<!DOCTYPE html>
<html lang="uz">

<head>
    @include('frontend.layouts.head')

</head>

<body>
    <div class="mil-wrapper" id="top">
        <!-- cursor -->
        <div class="mil-ball">
            <span class="mil-icon-1">
                <svg viewBox="0 0 128 128">
                    <path
                        d="M106.1,41.9c-1.2-1.2-3.1-1.2-4.2,0c-1.2,1.2-1.2,3.1,0,4.2L116.8,61H11.2l14.9-14.9c1.2-1.2,1.2-3.1,0-4.2	c-1.2-1.2-3.1-1.2-4.2,0l-20,20c-1.2,1.2-1.2,3.1,0,4.2l20,20c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9c1.2-1.2,1.2-3.1,0-4.2	L11.2,67h105.5l-14.9,14.9c-1.2,1.2-1.2,3.1,0,4.2c0.6,0.6,1.4,0.9,2.1,0.9s1.5-0.3,2.1-0.9l20-20c1.2-1.2,1.2-3.1,0-4.2L106.1,41.9	z" />
                </svg>
            </span>
            <div class="mil-more-text">Batafsil</div>
            <div class="mil-choose-text">Tanlash</div>
        </div>
        <!-- cursor end -->

        <!-- preloader -->
        <div class="mil-preloader">
            <div class="mil-preloader-animation">
                <div class="mil-pos-abs mil-animation-1">
                    <p class="mil-h3 mil-muted mil-thin">Bizning</p>
                    <p class="mil-h3 mil-muted">jamoamizga</p>
                    <p class="mil-h3 mil-muted mil-thin">qo'shiling</p>
                </div>
                <div class="mil-pos-abs mil-animation-2">
                    <div class="mil-reveal-frame">
                        <p class="mil-reveal-box"></p>
                        <p class="mil-h3 mil-muted mil-thin"><strong>BARAKA</strong> Development</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- scrollbar progress -->
        <div class="mil-progress-track">
            <div class="mil-progress"></div>
        </div>
        <!-- scrollbar progress end -->

        @include('frontend.layouts.header')

        <!-- curtain -->
        <div class="mil-curtain"></div>
        <!-- curtain end -->

        <!-- frame -->
        <div class="mil-frame">
            <div class="mil-frame-top">
                <a href="/" class="mil-logo">
                    <img src="{{ asset('img/logos/black-1.png') }}" alt="Desktop Logo" class="desktop-logo" width="200"
                        height="auto">
                    <img src="{{ asset('img/logos/navbarlogodark.png') }}" alt="Mobile Logo" class="mobile-logo"
                        width="200" height="auto">
                </a>
                <style>
                .desktop-logo {
                    display: block;
                    /* Show desktop logo */
                }

                .mobile-logo {
                    display: none;
                    /* Hide mobile logo by default */
                }

                @media (max-width: 768px) {

                    /* Adjust the max-width as needed */
                    .desktop-logo {
                        display: none;
                        /* Hide desktop logo on mobile */
                    }

                    .mobile-logo {
                        display: block;
                        /* Show mobile logo on mobile */
                    }
                }
                </style>
                <div class="mil-menu-btn">
                    <span></span>
                </div>
            </div>


            <div class="mil-frame-bottom">
                <div class="mil-current-page"></div>
                <div class="mil-back-to-top">
                    <a href="#top" class="mil-link mil-dark mil-arrow-place">
                        <span>Yuqoriga qaytish</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- frame end -->
        <div class="mil-content">
            <div id="swupMain" class="mil-main-transition">
                @yield('main-content')

                @include('frontend.layouts.footer')
            </div>
        </div>
    </div>


</body>
</html>