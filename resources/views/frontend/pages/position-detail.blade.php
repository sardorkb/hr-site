@extends('frontend.layouts.master')
<title>{{ $position->title }}</title>
@section('main-content')
<!-- banner -->
<div class="mil-inner-banner">
    <div class="mil-banner-content mil-center mil-up">
        <div class="container">
            <ul class="mil-breadcrumbs mil-center mil-mb-60">
                <li><a href="/">Bosh sahifa</a></li>
                <li><a href="">{{ $position->title }}</a></li>
            </ul>
            <h2>{{ $position->title }}</h2>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- publication -->
<section id="blog">
    <div class="container mil-p-120-90">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <p class="mil-text-xl mil-dark mil-up mil-mb-60">{{ $position->description }}</p>
                <h5 class="mil-up mil-mb-30">Talablar</h5>
                <p class="mil-up mil-mb-60">{{ $position->requirements }}</p>
            </div>
        </div>
    </div>
</section>
<!-- publication end -->

<!-- call to action -->
<section class="mil-soft-bg">
    <div class="container mil-p-120-120">
        <div class="row">
            <div class="col-lg-10">

                <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Bizning jamoamizga qo‘shilib, o‘z
                    tajribangizni oshiring va muvaffaqiyat sari yangi qadam qo‘ying. O‘z imkoniyatlaringizni namoyish
                    eting va kelajagingizni biz bilan birga qurishni boshlang!</span>

            </div>
        </div>
        <div class="mil-center">
            <h2 class="mil-up mil-mb-60">Bizning jamoamizga <span class="mil-thin">qo'shiling!</span> <br>Hoziroq
                ariza<span class="mil-thin"> yuboring</span></h2>
            <div class="mil-up"><a href="{{ route('application.create') }}"
                    class="mil-button mil-arrow-place"><span>Anketa to'ldirish</span></a>
            </div>
        </div>
    </div>
</section>
<!-- call to action end -->
@endsection