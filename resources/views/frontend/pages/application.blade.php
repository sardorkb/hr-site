@extends('frontend.layouts.master')
@section('title', 'Anketa to\'ldirish | Baraka Development')
@section('main-content')
<!-- banner -->
<div class="mil-inner-banner mil-p-0-0">
    <div class="mil-banner-content mil-center mil-up">
        <div class="container">
            <ul class="mil-breadcrumbs mil-center mil-mb-60">
                <li><a href="/">Bosh sahifa</a></li>
                <li><a href="{{ route('application.create') }}">Anketa to'ldirish</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- application form -->
<section id="application-form">
    <div class="container mil-p-0-90">
        <h3 class="mil-center mil-up mil-mb-120">Anketa <span class="mil-thin">To'ldirish</span></h3>

        <!-- Success message -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Validation errors -->
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Application form -->
        <form class="row align-items-center" action="{{ route('application.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <!-- Full Name -->
            <div class="col-lg-6 mil-up">
                <input type="text" name="fullname" placeholder="To'liq ism sharifingiz" value="{{ old('fullname') }}"
                    required>
            </div>

            <!-- Birthday -->
            <div class="col-lg-6 mil-up">
                <input type="text" name="age" placeholder="Yoshingiz" value="{{ old('age') }}" required>
            </div>

            <!-- Address -->
            <div class="col-lg-6 mil-up">
                <input type="text" name="address" placeholder="Yashash manzilingiz" value="{{ old('address') }}"
                    required>
            </div>

            <!-- Phone Number -->
            <div class="col-lg-6 mil-up">
                <input type="text" id="phone_number" name="phone_number" placeholder="+998"
                    value="{{ old('phone_number') ?? '+998' }}" required>
            </div>

            <!-- Job Location -->
            <div class="col-lg-6 mil-up">
                <select name="job_location" required>
                    <option value="" disabled selected hidden>Ishlamoqchi bo'lgan shahringiz</option>
                    <option value="Qo'qon shahar">Qo'qon shahar</option>
                    <option value="Farg'ona shahar">Farg'ona shahar</option>
                    <option value="Toshkent shahar">Toshkent shahar</option>
                </select>
            </div>


            <!-- Job Location Type -->
            <div class="col-lg-6 mil-up">
                <select name="job_location_type" id="job_location_type" required>
                    <option value="" disabled selected hidden>Ish joyi turi</option>
                    <option value="Ofis">Ofis</option>
                    <option value="Filial">Filial</option>
                </select>
            </div>

            <!-- Position -->
            <div class="col-lg-6 mil-up">
                <select name="position" id="position" required>
                    <option value="" disabled selected hidden>Lavozimingizni tanlang</option>
                </select>
            </div>


            <!-- Car Ownership -->
            <div class="col-lg-6 mil-up">
                <select name="has_car" required>
                    <option value="" disabled selected hidden>Mashinangiz bormi?</option>
                    <option value="1">Xa</option>
                    <option value="0">Yo'q</option>
                </select>
            </div>




            <!-- Education -->
            <div class="col-lg-6 mil-up">
                <select name="education" required>
                    <option value="" disabled selected hidden>Ta'lim darajasi</option>
                    <option value="O'rta">O'rta</option>
                    <option value="O'rta maxsus">O'rta maxsus</option>
                    <option value="Oliy">Oliy</option>
                    <option value="Tugallanmagan oliy">Tugallanmagan oliy</option>
                </select>
            </div>


            <!-- Expected Salary -->
            <div class="col-lg-6 mil-up">
                <select name="expected_salary" required>
                    <option value="" disabled selected hidden>Kutayotgan maoshingiz</option>
                    <option value="2 500 000 - 3 500 000">2 500 000 - 3 500 000</option>
                    <option value="3 500 000 - 5 000 000">3 500 000 - 5 000 000</option>
                    <option value="5 000 000 dan ortiq">5 000 000 dan ortiq</option>
                </select>
            </div>



            <!-- Upload Resume -->
            <div class="col-lg-12 mil-up">
                <label class="custom-file-upload">
                    <input type="file" name="upload_resume" required>
                    <span>Tarjimai holingizni yuklash uchun shu yerga bosing</span>
                </label>
                <span class="file-name" style="display: none;">No file chosen</span> <!-- Hidden by default -->
            </div>



            <!-- Submit Button -->
            <div class="col-lg-12">
                <p class="mil-up mil-mb-30"><span class="mil-accent">*</span> Sizning shaxsiy ma'lumotlaringiz uchinchi
                    shaxslarga oshkor qilinmaydi.</p>
            </div>

            <div class="col-lg-12">
                <div class="mil-adaptive-right mil-up mil-mb-30">
                    <button type="submit" class="mil-button mil-arrow-place">
                        <span>Yuborish</span>
                    </button>
                </div>
            </div>
        </form>

    </div>
</section>
<!-- application form end -->
@endsection
