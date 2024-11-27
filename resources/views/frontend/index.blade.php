@extends('frontend.layouts.master')
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

                        <p class="mil-light-soft mil-mb-60" style="font-size: 20px;">Tanish-bilishsiz ishga qabul
                            qilamiz. Sizni Baraka Kompaniyasida yangi imkoniyatlar kutmoqda.</p>

                    </div>
                </div>

                <a href="{{ route('application.create') }}" class="mil-button mil-arrow-place mil-btn-space"
                    style="font-size: 15px;">
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
                    <h3 class="mil-up mil-mb-60">
                        Barakada ishlash <br>
                        <span class="mil-thin">
                            <span>uchun </span>
                            <div
                                style="position: relative; display: inline-flex; align-items: center; justify-content: center; width: 55px; height: 55px; margin-left: 10px; margin-right: 10px;">
                                <span
                                    style="position: absolute; width: 55px; height: 55px; border-radius: 50%; background-color: black;"></span>
                                <span
                                    style="color: rgb(255, 152, 0); font-weight: bold; position: relative; z-index: 1; padding: 0 10px;">7</span>
                            </div>
                            <span>sabab: </span>
                        </span>
                    </h3>

                    <p class="mil-up mil-mb-30" style="text-align: justify;">
                        <strong>1. Tanish-bilishlarsiz ish</strong> – Bizning kompaniyamiz a'zosi bo'lish uchun sizdan
                        hech qanday tanish-bilish talab qilinmaydi. <br>
                        <strong>2. Karyera o'stirish imkoniyati</strong> – Tanish-bilishga emas, balki sizning o'z
                        harakatingizga qarab xodimdan rahbar lavomigacha chiqish.<br>
                        <strong>3. Ko'ngilochar tadbir va xordiqlar</strong> – Yilda 3 marttagacha barcha kompaniya
                        xodimlari uchun har xil turdagi ko'ngilochar tadbirlar va sayohatlar.
                        <br>
                        <!-- <strong>Biz, Baraka jamoasi,</strong> nafaqat mijozlarimizga sifatli va qulay xizmat
                        koʼrsatishga, balki oʼz
                        xodimlarimizning kasbiy rivojlanishiga ham katta ahamiyat qaratamiz. Bizning kompaniyamizda, siz
                        ishonchli va innovatsion muhitda oʼzingizni namoyon qilib, katta muvaffaqiyatlarga erishish
                        imkoniyatiga ega boʼlasiz. <br> -->
                        <strong>4. Ahil va ijodkor jamoa</strong> – Bizda har bir xodimning fikri va taklifi
                        qadrlanadi. Samarali
                        hamkorlik va oʼzaro jamoaviy qoʼllab-quvvatlash orqali barcha muvaffaqiyatlarimizga erishamiz.
                        <br>
                        <strong>5. Bepul kasbiy ta'lim</strong> – o'z yo'nalishingiz bo'yicha kompaniyada ichki va
                        tashqi
                        tizimli ta'lim olish imkoniyati.
                        <br>
                        <!-- <strong> Bizning maqsadimiz</strong> – har
                        bir xodimimizga kasbiy oʼsish va rivojlanish uchun barcha imkoniyatlarni taqdim etish. Buning
                        uchun bizda maxsus oʼquv boʼlimi faoliyat yuritadi, u xodimlarning doimiy ravishda oʼz
                        malakasini oshirishini taʼminlaydi va ularni yuqori professional darajaga olib chiqadi.
                        <br> -->
                        <strong>6. Аdolatli maosh va motivatsiya tizimi</strong> – Biz sizga barqaror maosh, bonuslar va
                        mukofotlar tizimini
                        taklif etamiz. Sizning mehnatingiz har doim qadrlanadi va munosib ragʼbatlantiriladi.
                        <br>
                        <strong>7. Zamonaviy ish sharoiti va qulayliklar</strong> – Barakada siz zamonaviy
                        texnologiyalar
                        bilan ishlaysiz va
                        oʼz qobiliyatingizni toʼliq namoyon qilish uchun barcha zarur sharoitlar yaratiladi.
                    </p>
                </div>
            </div>
            <div class="col-lg-5">
                <style>
                .swiper-container {
                    width: 100%;
                    /* Full width of the column */
                    height: 100%;
                    /* Adjust height as needed, can set a specific height */
                    overflow: hidden;
                    /* Hide any overflowing content */
                }

                .swiper-wrapper {
                    display: flex;
                    /* Make sure slides are displayed in a flex container */
                }

                .swiper-slide {
                    display: flex;
                    /* Center the image */
                    justify-content: center;
                    align-items: center;
                    height: 100%;
                    /* Ensures slides take full height */
                }

                .mil-img-frame {
                    width: 100%;
                    /* Ensure the frame fits the container */
                    max-width: 100%;
                    /* Prevent exceeding container */
                    position: relative;
                    /* Positioning for absolute elements */
                    overflow: hidden;
                    /* Hide any overflowing image parts */
                }

                .mil-img-frame img {
                    width: 100%;
                    /* Make image fill its parent */
                    height: auto;
                    /* Maintain aspect ratio */
                    display: block;
                    /* Remove unwanted spaces below image */
                }
                </style>
                <div class="mil-about-photo mil-mb-90">
                    <div class="mil-lines-place"></div>
                    <!-- Swiper -->
                    <div class="swiper-container mil-up">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="mil-img-frame" style="padding-bottom: 160%;">
                                    <img src="{{ asset('img/photos/8.png') }}" alt="img" class="mil-scale"
                                        data-value-1="1" data-value-2="1.2">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-img-frame" style="padding-bottom: 160%;">
                                    <img src="{{ asset('img/photos/5.png') }}" alt="img" class="mil-scale"
                                        data-value-1="1" data-value-2="1.2">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-img-frame" style="padding-bottom: 160%;">
                                    <img src="{{ asset('img/photos/4.png') }}" alt="img" class="mil-scale"
                                        data-value-1="1" data-value-2="1.2">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-img-frame" style="padding-bottom: 160%;">
                                    <img src="{{ asset('img/photos/68.png') }}" alt="img" class="mil-scale"
                                        data-value-1="1" data-value-2="1.2">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-img-frame" style="padding-bottom: 160%;">
                                    <img src="{{ asset('img/photos/69.png') }}" alt="img" class="mil-scale"
                                        data-value-1="1" data-value-2="1.2">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-img-frame" style="padding-bottom: 160%;">
                                    <img src="{{ asset('img/photos/5.png') }}" alt="img" class="mil-scale"
                                        data-value-1="1" data-value-2="1.2">
                                </div>
                            </div>
                            <!-- Add more images as needed -->
                        </div>
                        <!-- Add Pagination if desired -->
                        <div class="swiper-pagination"></div>
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

                        <span class="mil-suptitle mil-light-soft mil-suptitle-right mil-up"> <strong>Oliy
                                maqsad:</strong> Insonlarning
                            mahsulotga
                            bo'lgan ehtiyojlarini
                            imkoniyatga aylantirib,<br> ularni baxtliroq yashashlariga hissa qo'shamiz.</span>

                    </div>
                </div>

                <div class="mil-complex-text justify-content-center mil-up mil-mb-15">

                    <span class="mil-text-image"><img src="{{asset('img/photos/1234.png')}}" alt="team"></span>
                    <h2 class="mil-h1 mil-muted mil-center">Biz <span class="mil-thin">haqimizda</span></h2>

                </div>
                <div class="mil-complex-text justify-content-center mil-up mil-mb-15">
                    <p class="justify-content-center" style="color: white;">Baraka – maishiy texnika,
                        elektronika va mebel mahsulotlarini
                        muddatli
                        toʻlov asosida
                        sotuvchi doʻkonlar tarmogʻi.
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
                        <h5 class="mil-muted mil-mb-30">Raqobatbardosh<br> maosh</h5>
                        <p class="mil-light-soft mil-mb-30">Bizning kompaniyada xodimlar xizmat faoliyati yuqori
                            narxlarda baholanadi.</p>
                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                    </a>

                </div>
                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                    <a href="{{ route('pages.about') }}" class="mil-service-card-sm mil-up">
                        <h5 class="mil-muted mil-mb-30">Ahil <br>jamoa</h5>
                        <p class="mil-light-soft mil-mb-30">Kompaniyaning turli xil yo'nalishdagi xodimlari bir
                            maqsad yo'lida birlashadilar.</p>
                        <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                    </a>

                </div>
                <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                    <a href="{{ route('pages.about') }}" class="mil-service-card-sm mil-up">
                        <h5 class="mil-muted mil-mb-30">Kasbiy <br>ta'lim</h5>
                        <p class="mil-light-soft mil-mb-30">Xodimlarni o'z lavozimlarida mutaxassis darajasiga
                            yetishlari uchun "O'quv bo'limi" tashkilashtirilgan.</p>
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
                    <h2 class="mil-up mil-mb-60">Bizning Jamoa</h2>
                    <p class="mil-up mil-mb-30">Baraka kompaniyasining muvaffaqiyati – bu bizning professional va fidoyi
                        jamoamizning samimiy mehnati natijasidir. Har bir xodimimiz mijozlarimizga yuqori sifatli xizmat
                        ko’rsatish va ishonchli hamkorlikni ta’minlashga intiladi. Jamoamizning malakasi va tajribasi
                        tufayli biz doimiy ravishda o’sib boramiz va yangiliklar yaratamiz.</p>

                    <p class="mil-up mil-mb-60">Tanishing – bizning jamoa a’zolari! Har birimiz kompaniyaning
                        yuksalishiga o’z hissamizni qo’shishga tayyormiz!</p>

                    <div class="mil-up"><a href="{{route('bizning-jamoa')}}"
                            class="mil-button mil-arrow-place mil-mb-60"><span>Batafsil</span></a></div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="mil-team-list">
                    <div class="mil-lines-place"></div>
                    <div class="row mil-mb-60">

                        <!-- First Column: First 2 Team Members -->
                        <div class="col-sm-6">
                            @foreach($firstTwoTeams as $team)
                            <div class="mil-team-card mil-up mil-mb-30">
                                <!-- Display member's photo dynamically -->
                                <img src="{{ asset('storage/'.$team->photo) }}" alt="{{ $team->name }}"
                                    class="img-fluid">
                                <div class="mil-description">
                                    <div class="mil-secrc-text">
                                        <h5 class="mil-muted mil-mb-5">
                                            <a href="#">{{ $team->name }}</a>
                                        </h5>
                                        <!-- Display member's position dynamically -->
                                        <p class="mil-link mil-light-soft mil-mb-10">{{ $team->position }}</p>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Second Column: Next 2 Team Members -->
                        <div class="col-sm-6">
                            <p class="mil-mobile-hidden mil-text-sm mil-mb-30" style="height: 30px;">
                                <span class="mil-accent">*</span> Kompaniyamiz ustunlari
                            </p>
                            @foreach($nextTwoTeams as $team)
                            <div class="mil-team-card mil-up mil-mb-30">
                                <!-- Display member's photo dynamically -->
                                <img src="{{ asset('storage/'.$team->photo) }}" alt="{{ $team->name }}"
                                    class="img-fluid">
                                <div class="mil-description">
                                    <div class="mil-secrc-text">
                                        <h5 class="mil-muted mil-mb-5">
                                            <a href="#">{{ $team->name }}</a>
                                        </h5>
                                        <!-- Display member's position dynamically -->
                                        <p class="mil-link mil-light-soft mil-mb-10">{{ $team->position }}</p>
                                        <ul class="mil-social-icons mil-center">
                                            <!-- Social icons for this team member (optional) -->
                                            <li><a href="#." target="_blank" class="social-icon"><i
                                                        class="fab fa-behance"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"><i
                                                        class="fab fa-dribbble"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="#." target="_blank" class="social-icon"><i
                                                        class="fab fa-github"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- team end -->

@endsection