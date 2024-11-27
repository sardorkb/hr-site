@extends('frontend.layouts.master')
@section('title', 'Bizning filiallar | Baraka Development')
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
                <li><a href="{{route('bizning-filiallar')}}">Bizning filiallar</a></li>
            </ul>
            <h1 class="mil-mb-60">Bizning <span class="mil-thin">filiallar</span> <br>Sizni <span
                    class="mil-thin">kutmoqda</span></h1>
            <a href="#filial" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                <span>Batafsil</span>
            </a>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- popular -->
<section class="mil-soft-bg" id="filial">
    <div class="container mil-p-120-60">
        <div class="row">
            @foreach($branches as $branch)
            <div class="col-lg-4">
                <a href="#" class="mil-blog-card mil-mb-60">
                    <div class="mil-cover-frame mil-up">
                        <img src="{{ Storage::url($branch->photo) }}" alt="cover">
                    </div>
                    <div class="mil-post-descr">
                        <div class="mil-labels mil-up mil-mb-5">
                            <div class="mil-label mil-upper mil-accent">{{ $branch->title }}</div>
                            <div class="mil-label mil-upper">{{ $branch->location }}</div>
                        </div>
                        <p class="mil-post-text mil-up mil-mb-30">{{ $branch->description }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- popular end -->



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
                anktea<span class="mil-thin"> to'ldiring</span></h2>
            <div class="mil-up"><a href="{{ route('application.create') }}"
                    class="mil-button mil-arrow-place"><span>Anketa to'ldirish</span></a>
            </div>
        </div>
    </div>
</section>
<!-- call to action end -->

@endsection