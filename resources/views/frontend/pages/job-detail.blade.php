@extends('frontend.layouts.master')
<title>{{ $vacancy->title }}</title>
@section('main-content')
<!-- banner -->
<div class="mil-inner-banner">
    <div class="mil-banner-content mil-center mil-up">
        <div class="container">
            <ul class="mil-breadcrumbs mil-center mil-mb-60">
                <li><a href="/">Bosh sahifa</a></li>
                <li><a href="{{route('job')}}">Bo'sh ish o'rinlari</a></li>
                <li><a href="">{{ $vacancy->title }}</a></li>
            </ul>
            <h2>{{ $vacancy->title }}</h2>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- publication -->
<section id="blog">
    <div class="container mil-p-120-90">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="mil-image-frame mil-horizontal mil-up">
                    <img src="{{ asset('storage/' . $vacancy->photo) }}" alt="{{ $vacancy->title }}" class="mil-scale"
                        data-value-1=".90" data-value-2="1.15">
                </div>
                <div class="mil-info mil-up mil-mb-90">
                    <div>Ish joyi: &nbsp;<span class="mil-dark">{{ $vacancy->category->name }}</span></div>
                    <div>Qabul qilish davri: &nbsp;<span class="mil-dark">{{ $vacancy->days_left }} kun</span></div>
                    <div>Manzil: &nbsp;<span class="mil-dark">{{ $vacancy->location }}</span></div>
                </div>
            </div>
            <div class="col-lg-8">
                <p class="mil-text-xl mil-dark mil-up mil-mb-60">{{ $vacancy->description }}</p>
                <blockquote class="mil-up mil-mb-60">To'ridan to'gri bog'laning - {{ $vacancy->phone_number }}
                </blockquote>
                <h5 class="mil-up mil-mb-30">Talablar</h5>
                <p class="mil-up mil-mb-60">{!! $vacancy->requirements !!}</p><br>
                <h5 class="mil-up mil-mb-30">Shartlar</h5>
                <p class="mil-up mil-mb-60">{{ $vacancy->conditions }}</p>
                <blockquote class="mil-up mil-mb-60">
                    <strong>Sizdan talab qilinadigan ko'nikmalar:</strong> {{ $vacancy->skills }}
                </blockquote>
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
                anketa<span class="mil-thin"> to'ldiring</span></h2>
            <div class="mil-up"><a href="{{ route('application.create') }}"
                    class="mil-button mil-arrow-place"><span>Anketa to'ldirish</span></a>
            </div>
        </div>
    </div>
</section>
<!-- call to action end -->
@endsection