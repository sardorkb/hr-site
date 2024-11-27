@extends('frontend.layouts.master')
@section('title', 'Biz haqimizda | Baraka Development')

@section('main-content')
<!-- banner -->
<div class="mil-inner-banner">
    <div class="mil-banner-content mil-up">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
        </div>
        <div class="container">
            <ul class="mil-breadcrumbs mil-mb-60">
                <li><a href="/">Bosh sahifa</a></li>
                <li><a href="{{ route('pages.about') }}">Biz haqimizda</a></li>
            </ul>
            <h1 class="mil-mb-60">Tabassum <span class="mil-thin">bilan ulashamiz</span></h1>
            <a href="#project" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                <span>Biz haqimizda batafsil</span>
            </a>
        </div>
    </div>
</div><br>
<!-- banner end -->
<!-- Counter Section -->
<section class="counter-section mil-p-90-90">
    <div class="container">
        <div class="row justify-content-between text-center">
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <span class="counter blue-text" data-target="10"></span>
                    <h4 class="sub-text">Yillik Tajriba</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <span class="counter blue-text" data-target="5"></span>
                    <h4 class="sub-text">Filiallar soni</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <span class="counter blue-text" data-target="100"></span>
                    <h4 class="sub-text">Hamkorlar</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <span class="counter blue-text" data-target="5000"></span>
                    <h4 class="sub-text">Mahsulotlar</h4>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- project -->
<section class="mil-p-120-120">
    <div class="mil-image-frame mil-fw mil-up">
        <img src="{{ asset('img/photos/1.png') }}" alt="image">
        <a data-fancybox="gallery" data-no-swup href="{{ asset('img/photos/1.png') }}" class="mil-zoom-btn">
            <img src="{{ asset('img/icons/zoom.svg') }}" alt="zoom">
        </a>
    </div>
    <div class="container" id="project">
        <div class="mil-p-0-120">
            <div class="row justify-content-between mil-p-120-0">
                <div class="col-lg-5">
                    <h4 class="mil-up">Oliy maqsadimiz:</h4>
                    <h5>Insonlarni mahsulotga boʻlgan ehtiyojlarini imkoniyatga aylantirib, ularni baxtliroq
                        yashashlariga hissa qoʻshamiz!</h5>
                    <br>
                    <h4 class="mil-up mil-mb-50">Biz bilan har bir xaridingiz barakali!</h4>
                </div>
                <div class="col-lg-6">
                    <p class="mil-up mil-mb-30" style="text-align: justify;">
                        Baraka – maishiy texnika, elektronika va mebel mahsulotlarini muddatli toʻlov asosida sotuvchi
                        doʻkonlar tarmogʻi. Kompaniya 2014-yilda Qoʻqon shahri, Charxiy 1-“A” joylashuvida tashkil
                        etilgan. Korxonamiz 10 yildan oshiq muddat mobaynida koʻplab yurtdoshlarimizga halol muddatli
                        toʻlovga mahsulotlar yetkazib berib kelmoqda. Bugungi kunda kompaniyaning 5 ta filiali mavjud
                        boʻlib, ular orqali muntazam oflayn va onlayn savdo yoʻlga qoʻyilgan.
                    </p>
                </div>
            </div>
        </div>



        <!-- Swiper Gallery -->
        <div class="swiper-container mil-2-slider mil-up mil-mb-120">
            <div class="swiper-wrapper">
                @foreach (['36.png', '38.png', '33.png', '17.png', '16.png', '14.png', '9.png', '1-1.png'] as $photo)
                <div class="swiper-slide">
                    <div class="mil-image-frame mil-horizontal mil-drag">
                        <img src="{{ asset('img/photos/' . $photo) }}" alt="image">
                        <a data-fancybox="gallery" data-no-swup href="{{ asset('img/photos/' . $photo) }}"
                            class="mil-zoom-btn">
                            <img src="{{ asset('img/icons/zoom.svg') }}" alt="zoom">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- project end -->

<!-- call to action -->
<section class="mil-soft-bg">
    <div class="container mil-p-120-120">
        <div class="row">
            <div class="col-lg-10">
                <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">
                    Bizning jamoamizga qo‘shilib, o‘z tajribangizni oshiring va muvaffaqiyat sari yangi qadam qo‘ying.
                    O‘z imkoniyatlaringizni namoyish eting va kelajagingizni biz bilan birga qurishni boshlang!
                </span>
            </div>
        </div>
        <div class="mil-center">
            <h2 class="mil-up mil-mb-60">Bizning jamoamizga <span class="mil-thin">qo'shiling!</span> <br>Hoziroq
                anketa<span class="mil-thin"> to'ldiring</span></h2>
            <div class="mil-up">
                <a href="{{ route('application.create') }}" class="mil-button mil-arrow-place">
                    <span>Anketa to'ldirish</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- call to action end -->
@endsection

@push('scripts')
<!-- JavaScript for Counter Animation -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const counters = document.querySelectorAll('.counter');
    
    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const speed = Math.floor(10000 / target);
        
        const updateCount = () => {
            if (count < target) {
                count++;
                counter.innerText = count;
                setTimeout(updateCount, speed);
            } else {
                counter.innerText = target;
            }
        };
        
        updateCount();
    });
});
</script>
@endpush
@push('styles')
<style>
    .mil-p-120-120 {
        padding: 120px 0;
    }
    .mil-soft-bg {
        background: linear-gradient(135deg, #f5faff 0%, #f0f8ff 100%);
    }
    .counter-item {
        position: relative;
        padding: 20px;
    }
    .counter-item:not(:last-child)::after {
        content: "";
        position: absolute;
        right: -15px;
        top: 0;
        height: 100%;
        width: 1px;
        background-color: #ddd;
    }
    .counter {
        font-size: 48px;
        font-weight: bold;
        color: #1e90ff;
    }
    .sub-text {
        margin-top: 10px;
        font-size: 16px;
        font-weight: bold;
        color: #333;
    }
    .small-text {
        font-size: 12px;
        color: #555;
    }
    .blue-text {
        color: #007bff;
    }
</style>
@endpush