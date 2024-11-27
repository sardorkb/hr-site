@extends('layouts.master')
@section('title', 'Bosh sahifa | Baraka Development')
@section('main-content')

<!-- banner -->
<section class="mil-banner mil-dark-bg">
    <div class="mi-invert-fix">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-1 mil-scale" data-value-1="7" data-value-2="1.6"></div>
            <div class="mil-animation mil-position-2 mil-scale" data-value-1="4" data-value-2="1"></div>
            <div class="mil-animation mil-position-3 mil-scale" data-value-1="1.2" data-value-2=".1"></div>
        </div>

        <div class="mil-gradient"></div>

        <div class="container">
            <div class="mil-banner-content mil-up">

                <h1 class="mil-muted mil-mb-60">Karyerangizni <span class="mil-thin">biz bilan</span><br>
                    rivojlantiring
                    <span class="mil-thin"></span>
                </h1>
                <div class="row">
                    <div class="col-md-7 col-lg-5">

                        <p class="mil-light-soft mil-mb-60">Baraka Developmentning karyera portaliga xush
                            kelibsiz!
                            Bizning jamoamizga qo'shiling va o'sish, ijodkorlik va mukammallikni qadrlaydigan
                            innovatsion va dinamik muhitda faoliyat yuriting.</p>

                    </div>
                </div>

                <a href="{{ route('application.create') }}" class="mil-button mil-arrow-place mil-btn-space">
                    <span>Anketa to'ldirish</span>
                </a>

                <div class="mil-circle-text">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve"
                        class="mil-ct-svg mil-rotate" data-value="360">
                        <defs>
                            <path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                        </defs>
                        <circle cx="150" cy="100" r="75" fill="none" />
                        <g>
                            <use xlink:href="#circlePath" fill="none" />
                            <text style="letter-spacing: 6.5px">
                                <!-- circle text -->
                                <textPath xlink:href="#circlePath">Batafsil -Batafsil -Batafsil -</textPath>
                            </text>
                        </g>
                    </svg>
                    <a href="#about" class="mil-button mil-arrow-place mil-icon-button mil-arrow-down"></a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- banner end -->

<!-- about -->
<section id="about">
    <div class="container mil-p-120-30">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-xl-5">

                <div class="mil-mb-90">
                    <h2 class="mil-up mil-mb-60">Barakada <br>ish <span class="mil-thin">jarayoni</span></h2>
                    <p class="mil-up mil-mb-30" style="text-align: justify;">
                        <strong>Biz, Baraka jamoasi,</strong> nafaqat mijozlarimizga sifatli va qulay xizmat koʼrsatishga, balki oʼz
                        xodimlarimizning kasbiy rivojlanishiga ham katta ahamiyat qaratamiz. Bizning kompaniyamizda, siz
                        ishonchli va innovatsion muhitda oʼzingizni namoyon qilib, katta muvaffaqiyatlarga erishish
                        imkoniyatiga ega boʼlasiz. <br>
                        <strong>Hamjihat va ijodkor jamoa</strong> – Bizda har bir xodimning fikri va taklifi qadrlanadi. Samarali
                        hamkorlik va oʼzaro qoʼllab-quvvatlash orqali barcha muvaffaqiyatlarimizga erishamiz.
                        <br>
                        <strong> Bizning maqsadimiz</strong> – har
                        bir xodimimizga kasbiy oʼsish va rivojlanish uchun barcha imkoniyatlarni taqdim etish. Buning
                        uchun bizda maxsus oʼquv boʼlimi faoliyat yuritadi, u xodimlarning doimiy ravishda oʼz
                        malakasini oshirishini taʼminlaydi va ularni yuqori professional darajaga olib chiqadi.
                        <br>
                        <strong>Аdolatli maosh va motivatsiya tizimi</strong> – Biz sizga barqaror maosh, bonuslar va
                        mukofotlar tizimini
                        taklif etamiz. Sizning mehnatingiz har doim qadrlanadi va munosib ragʼbatlantiriladi.
                        <br>
                        <strong> Zamonaviy ish sharoiti va qulayliklar</strong> – Barakada siz zamonaviy texnologiyalar
                        bilan ishlaysiz va
                        oʼz qobiliyatingizni toʼliq namoyon qilish uchun barcha zarur sharoitlar yaratiladi.
                    </p>
                </div>

            </div>
            <div class="col-lg-5">

                <div class="mil-about-photo mil-mb-90">
                    <div class="mil-lines-place"></div>
                    <div class="mil-up mil-img-frame" style="padding-bottom: 160%;">
                        <img src="{{asset('img/photo/1.jpg')}}" alt="img" class="mil-scale" data-value-1="1"
                            data-value-2="1.2">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- about end -->

<!-- services -->
<section class="mil-dark-bg">
    <div class="mi-invert-fix">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-1 mil-scale" data-value-1="2.4" data-value-2="1.4"
                style="top: 300px; right: -100px"></div>
            <div class="mil-animation mil-position-2 mil-scale" data-value-1="2" data-value-2="1" style="left: 150px">
            </div>
        </div>
        <div class="container mil-p-120-0">

            <div class="mil-mb-120">
                <div class="row">
                    <div class="col-lg-10">

                        <span class="mil-suptitle mil-light-soft mil-suptitle-right mil-up">Insonlarning
                            mahsulotga
                            bo'lgan ehtiyojlarini
                            imkoniyatga aylantirib,<br> ularni baxtliroq yashashlariga hissa qo'shamiz.</span>

                    </div>
                </div>

                <div class="mil-complex-text justify-content-center mil-up mil-mb-15">

                    <span class="mil-text-image"><img src="img/photo/2.jpg" alt="team"></span>
                    <h2 class="mil-h1 mil-muted mil-center">Biz <span class="mil-thin">haqimizda</span></h2>

                </div>
                <div class="mil-complex-text justify-content-center mil-up mil-mb-15">
                    <p class="justify-content-center" style="color: white;">Baraka – maishiy texnika,
                        elektronika va mebel mahsulotlarini
                        muddatli
                        toʻlov asosida
                        beruvchi doʻkonlar tarmogʻi.
                        Kompaniya 2014-yilda Qoʻqon shahrida tashkil etilgan.
                        Korxonamiz
                        10 yildan oshiq muddat mobaynida koʻplab yurtdoshlarimizga halol muddatli toʻlovga
                        mahsulotlar yetkazib berib kelmoqda.</p>
                </div>
                <div class="mil-complex-text justify-content-center mil-up">
                    <h2 class="mil-h1 mil-muted mil-center"><span class="mil-thin">Siz bilan</span> 10 yildan
                        <span class="mil-thin">ortiq!</span>
                    </h2>
                </div>
            </div>

            <div class="row mil-services-grid m-0">
                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                    <a href="{{ route('pages.about') }}" class="mil-service-card-sm mil-up">
                        <h5 class="mil-muted mil-mb-30">Kompaniyada 200 dan <br>ortiq xodimlar</h5>
                        <p class="mil-light-soft mil-mb-30">Bizning kompaniyamizda 21 dan ortiq bo'limlarda
                            turli xil kasb egalari faoliyat yuritishadi.</p>
                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                    </a>

                </div>
                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                    <a href="{{ route('pages.about') }}" class="mil-service-card-sm mil-up">
                        <h5 class="mil-muted mil-mb-30">Ajoyib ish <br>haqi</h5>
                        <p class="mil-light-soft mil-mb-30">Bizning kompaniyada xodimlar xizmat faoliyati yuqori
                            narxlarda baholanadi.</p>
                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                    </a>

                </div>
                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                    <a href="{{ route('pages.about') }}" class="mil-service-card-sm mil-up">
                        <h5 class="mil-muted mil-mb-30">Hamfikrlar <br>jamoasi</h5>
                        <p class="mil-light-soft mil-mb-30">Kompaniyaning turli xil yo'nalishdagi xodimlari bir
                            maqsad yo'lida birlashadilar.</p>
                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                    </a>

                </div>
                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                    <a href="{{ route('pages.about') }}" class="mil-service-card-sm mil-up">
                        <h5 class="mil-muted mil-mb-30">Kasabiy <br>ta'lim</h5>
                        <p class="mil-light-soft mil-mb-30">Xodimlarni o'z lavozimlarida mutaxassis darajasiga
                            yetishlari uchun "O'quv bo'limi" tashkilantirilgan.</p>
                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- services end -->

<!-- team -->
<section>
    <div class="container mil-p-120-30">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 col-xl-4">

                <div class="mil-mb-90">
                    <h2 class="mil-up mil-mb-60">Meet <br>Our Team</h2>
                    <p class="mil-up mil-mb-30">We are talented individuals who are passionate about bringing
                        ideas
                        to life. With a diverse range of backgrounds and skill sets, we collaborate to produce
                        effective solutions for our clients.</p>

                    <p class="mil-up mil-mb-60">Together, our creative team is committed to delivering impactful
                        work that exceeds expectations.</p>

                    <div class="mil-up"><a href="team.html" class="mil-button mil-arrow-place mil-mb-60"><span>Read
                                more</span></a></div>

                    <h4 class="mil-up"><span class="mil-thin">We</span> delivering <br><span
                            class="mil-thin">exceptional</span> results.</h4>
                </div>

            </div>
            <div class="col-lg-6">

                <div class="mil-team-list">
                    <div class="mil-lines-place"></div>

                    <div class="row mil-mb-60">
                        <div class="col-sm-6">

                            <div class="mil-team-card mil-up mil-mb-30">
                                <img src="{{asset('img/faces/1.jpg')}}" alt="Team member">
                                <div class="mil-description">
                                    <div class="mil-secrc-text">
                                        <h5 class="mil-muted mil-mb-5"><a href="home-2.html">Anna Oldman</a>
                                        </h5>
                                        <p class="mil-link mil-light-soft mil-mb-10">Art Director</p>
                                        <ul class="mil-social-icons mil-center">
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-behance"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-dribbble"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mil-team-card mil-up mil-mb-30">
                                <img src="img/faces/3.jpg" alt="Team member">
                                <div class="mil-description">
                                    <div class="mil-secrc-text">
                                        <h5 class="mil-muted mil-mb-5"><a href="home-2.html">Oscar Freeman</a>
                                        </h5>
                                        <p class="mil-link mil-light-soft mil-mb-10">Frontend Dev</p>
                                        <ul class="mil-social-icons mil-center">
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-behance"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-dribbble"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">

                            <p class="mil-mobile-hidden mil-text-sm mil-mb-30" style="height: 30px;"><span
                                    class="mil-accent">*</span> The founders of our agency</p>

                            <div class="mil-team-card mil-up mil-mb-30">
                                <img src="img/faces/2.jpg" alt="Team member">
                                <div class="mil-description">
                                    <div class="mil-secrc-text">
                                        <h5 class="mil-muted mil-mb-5"><a href="home-2.html">Emma Newman</a>
                                        </h5>
                                        <p class="mil-link mil-light-soft mil-mb-10">Founder</p>
                                        <ul class="mil-social-icons mil-center">
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-behance"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-dribbble"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mil-team-card mil-up mil-mb-30">
                                <img src="img/faces/4.jpg" alt="Team member">
                                <div class="mil-description">
                                    <div class="mil-secrc-text">
                                        <h5 class="mil-muted mil-mb-5"><a href="home-2.html">Lisa Trueman</a>
                                        </h5>
                                        <p class="mil-link mil-light-soft mil-mb-10">UI/UX Designer</p>
                                        <ul class="mil-social-icons mil-center">
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-behance"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-dribbble"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"> <i
                                                        class="fab fa-github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- team end -->

<!-- reviews -->
<section class="mil-soft-bg">
    <div class="container mil-p-120-120">

        <div class="row">
            <div class="col-lg-10">

                <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Customer reviews are a
                    valuable source <br>of information for both businesses and consumers.</span>

            </div>
        </div>

        <h2 class="mil-center mil-up mil-mb-60">Customer <span class="mil-thin">Voices:</span> <br>Hear What
            <span class="mil-thin">They Say!</span>
        </h2>

        <div class="mil-revi-pagination mil-up mil-mb-60"></div>

        <div class="row mil-relative justify-content-center">
            <div class="col-lg-8">

                <div class="mil-slider-nav mil-soft mil-reviews-nav mil-up">
                    <div class="mil-slider-arrow mil-prev mil-revi-prev mil-arrow-place"></div>
                    <div class="mil-slider-arrow mil-revi-next mil-arrow-place"></div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="mil-quote-icon mil-up">
                    <path
                        d="M 13.5 10 A 8.5 8.5 0 0 0 13.5 27 A 8.5 8.5 0 0 0 18.291016 25.519531 C 17.422273 29.222843 15.877848 31.803343 14.357422 33.589844 C 12.068414 36.279429 9.9433594 37.107422 9.9433594 37.107422 A 1.50015 1.50015 0 1 0 11.056641 39.892578 C 11.056641 39.892578 13.931586 38.720571 16.642578 35.535156 C 19.35357 32.349741 22 27.072581 22 19 A 1.50015 1.50015 0 0 0 21.984375 18.78125 A 8.5 8.5 0 0 0 13.5 10 z M 34.5 10 A 8.5 8.5 0 0 0 34.5 27 A 8.5 8.5 0 0 0 39.291016 25.519531 C 38.422273 29.222843 36.877848 31.803343 35.357422 33.589844 C 33.068414 36.279429 30.943359 37.107422 30.943359 37.107422 A 1.50015 1.50015 0 1 0 32.056641 39.892578 C 32.056641 39.892578 34.931586 38.720571 37.642578 35.535156 C 40.35357 32.349741 43 27.072581 43 19 A 1.50015 1.50015 0 0 0 42.984375 18.78125 A 8.5 8.5 0 0 0 34.5 10 z"
                        fill="#000000" />
                </svg>

                <div class="swiper-container mil-reviews-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                data-swiper-parallax-opacity="0">
                                <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                <p class="mil-text-xl mil-up">This creative agency stands out with their
                                    exceptional
                                    talent and expertise. Their ability to think outside the box and bring
                                    unique
                                    ideas to life is truly impressive. With meticulous attention to detail, they
                                    consistently deliver visually stunning and impactful work.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                data-swiper-parallax-opacity="0">
                                <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                <p class="mil-text-xl mil-up">I had the pleasure of working with this creative
                                    agency, and I must say, they truly impressed me. They consistently think
                                    outside
                                    the box, resulting in impressive and impactful work. I highly recommend this
                                    agency for their consistent delivery of exceptional creative solutions.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                data-swiper-parallax-opacity="0">
                                <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                <p class="mil-text-xl mil-up">This creative agency stands out with their
                                    exceptional
                                    talent and expertise. Their ability to think outside the box and bring
                                    unique
                                    ideas to life is truly impressive. With meticulous attention to detail, they
                                    consistently deliver visually stunning and impactful work.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                data-swiper-parallax-opacity="0">
                                <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                <p class="mil-text-xl mil-up">I had the pleasure of working with this creative
                                    agency, and I must say, they truly impressed me. They consistently think
                                    outside
                                    the box, resulting in impressive and impactful work. I highly recommend this
                                    agency for their consistent delivery of exceptional creative solutions.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                data-swiper-parallax-opacity="0">
                                <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                <p class="mil-text-xl mil-up">This creative agency stands out with their
                                    exceptional
                                    talent and expertise. Their ability to think outside the box and bring
                                    unique
                                    ideas to life is truly impressive. With meticulous attention to detail, they
                                    consistently deliver visually stunning and impactful work.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                data-swiper-parallax-opacity="0">
                                <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                <p class="mil-text-xl mil-up">I had the pleasure of working with this creative
                                    agency, and I must say, they truly impressed me. They consistently think
                                    outside
                                    the box, resulting in impressive and impactful work. I highly recommend this
                                    agency for their consistent delivery of exceptional creative solutions.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                data-swiper-parallax-opacity="0">
                                <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                <p class="mil-text-xl mil-up">This creative agency stands out with their
                                    exceptional
                                    talent and expertise. Their ability to think outside the box and bring
                                    unique
                                    ideas to life is truly impressive. With meticulous attention to detail, they
                                    consistently deliver visually stunning and impactful work.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- reviews end -->
@endsection