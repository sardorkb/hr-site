@extends('frontend.layouts.master')
@section('title', 'Bo\'sh ish o\'rinlari | Baraka Development')
@section('main-content')
<!-- banner -->
<div class="mil-inner-banner mil-p-0-120">
    <div class="mil-banner-content mil-up">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
        </div>
        <div class="container">
            <ul class="mil-breadcrumbs mil-mb-60">
                <li><a href="/">Bosh sahifa</a></li>
                <li><a href="{{route('job')}}">Bo'sh ish o'rinlari</a></li>
            </ul>
            <h1 class="mil-mb-60">Bo'sh <span class="mil-thin">ish o'rinlari</span> <br> Bizning jamoamizga <span
                    class="mil-thin">qo'shiling</span></h1>
            <a href="#jobs" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                <span>Bo'sh ish o'rinlari</span>
            </a>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- blog -->
<section class="mil-soft-bg" id="jobs">
    <div class="container mil-p-120-120">
        <div class="row align-items-center mil-mb-30">
            <div class="col-lg-4 mil-mb-30">
                <h3 class="mil-up">Ish joyi:</h3>
            </div>
            <div class="col-lg-8 mil-mb-30">
                <div class="mil-adaptive-right mil-up">
                    <ul class="mil-category-list">
                        @foreach($categories as $category)
                        <li>
                            <a href="{{ route('job', ['category' => $category->id]) }}"
                                class="{{ request()->category == $category->id ? 'mil-active' : '' }}">
                                {{ $category->name }}
                            </a>
                        </li>
                        @endforeach
                        <li>
                            <a href="{{ route('job') }}" class="{{ request()->category ? '' : 'mil-active' }}">
                                Barchasi
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach ($vacancies as $vacancy)
            <div class="col-lg-12">
                <a href="{{ route('job-detail', $vacancy->slug) }}"
                    class="mil-blog-card mil-blog-card-hori mil-more mil-mb-60">
                    <div class="mil-cover-frame mil-up">
                        <img src="{{ asset('storage/' . $vacancy->photo) }}" alt="cover"
                            style="width: 100%; height: auto;">
                    </div>
                    <div class="mil-post-descr">
                        <div class="mil-labels mil-up mil-mb-30">
                            @if($vacancy->category)
                            <div class="mil-label mil-upper mil-accent">{{ $vacancy->category->name }}</div>
                            @else
                            <div class="mil-label mil-upper mil-accent">N/A</div>
                            @endif
                            <div class="mil-label mil-upper">{{ $vacancy->created_at->format('d/m/Y') }}</div>

                        </div>
                        <h4 class="mil-up mil-mb-30">{{ $vacancy->title }}</h4>
                        <p class="mil-post-text mil-up mil-mb-30">
                            {{ \Illuminate\Support\Str::limit($vacancy->description, 150) }}</p>
                        <div class="mil-link mil-dark mil-arrow-place mil-up">
                            <span>Batafsil</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- blog end -->

<!-- call to action -->
<section>
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