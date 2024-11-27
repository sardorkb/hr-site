@extends('frontend.layouts.master')
@section('title', 'Biz jamoa | Baraka Development')
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
                <li><a href="{{route('bizning-jamoa')}}">Bizning jamoa</a></li>
            </ul>
            <h1 class="mil-mb-60">Bizning <span class="mil-thin">Ahil</span><br> Jamoamiz <span class="mil-thin">bilan tanishing</span>
            </h1>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- team -->
<section id="team">
    <div class="container mil-p-00-90">
        <div class="row">
            <div class="row">
                @foreach($teams as $team)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="mil-team-card mil-up mil-mb-30">
                        <!-- Display member's photo dynamically -->
                        <img src="{{ asset('storage/'.$team->photo) }}" alt="{{ $team->name }}">
                        <div class="mil-description">
                            <div class="mil-secrc-text">
                                <h5 class="mil-muted mil-mb-5">
                                    <a href="#">{{ $team->name }}</a>
                                </h5>
                                <p class="mil-link mil-light-soft mil-mb-10">{{ $team->position }}</p>
                                <ul class="mil-social-icons mil-center">
                                    <!-- Social icons for this team member (optional) -->
                                    @if($team->behance_url)
                                    <li><a href="{{ $team->behance_url }}" target="_blank" class="social-icon"> <i
                                                class="fab fa-behance"></i></a></li>
                                    @endif
                                    @if($team->dribbble_url)
                                    <li><a href="{{ $team->dribbble_url }}" target="_blank" class="social-icon"> <i
                                                class="fab fa-dribbble"></i></a></li>
                                    @endif
                                    @if($team->twitter_url)
                                    <li><a href="{{ $team->twitter_url }}" target="_blank" class="social-icon"> <i
                                                class="fab fa-twitter"></i></a></li>
                                    @endif
                                    @if($team->github_url)
                                    <li><a href="{{ $team->github_url }}" target="_blank" class="social-icon"> <i
                                                class="fab fa-github"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
<!-- team end -->

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