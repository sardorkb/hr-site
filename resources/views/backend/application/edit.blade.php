@extends('backend.layouts.master')
@section('title', 'Application Details | Baraka Development')
@section('main-content')
<div class="card">
    <h5 class="card-header">F.I.Sh. : <span style="color: blue; font-weight: bold;"> {{ $application->fullname }} </span></h5>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Ma'lumot nomi</th>
                    <th scope="col">Ma'lumot</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><strong>Yoshi</strong></td>
                    <td>{{ $application->age }}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><strong>Telefon raqami</strong></td>
                    <td>+998 {{ $application->phone_number }}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><strong>Yashash manzili</strong></td>
                    <td>{{ $application->address }}</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><strong>Ish joy manzili</strong></td>
                    <td>{{ $application->job_location }}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><strong>Ish joy turi</strong></td>
                    <td>{{ $application->job_location_type }}</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><strong>Lavozim</strong></td>
                    <td>{{ $application->position }}</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><strong>Mashinasi bormi?</strong></td>
                    <td>{{ $application->has_car ? 'Xa' : 'Yo\'q' }}</td>

                </tr>
                <tr>
                    <td>8</td>
                    <td><strong>Ta'lim darajasi</strong></td>
                    <td>{{ $application->education }}</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><strong>Kutayotgan maoshi</strong></td>
                    <td>{{ $application->expected_salary }}</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><strong>Tarjimai hol</strong></td>
                    <td>
                        <a href="{{ asset('storage/' . $application->upload_resume) }}" class="btn btn-link" download>
                            Yuklab olish
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>


    </div>
</div><br>
<div class="card">
    <div class="card-body">
        <h4>HR xodimlari uchun ↓</h4>
        <form action="{{ route('application.updateStatus', $application->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-lg-3">
                    <label for="status">Anketa holati</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="" disabled selected>--Holatni tanlang--</option>
                        <option value="Tekshiruv jarayonida"
                            {{ $application->status == 'Tekshiruv jarayonida' ? 'selected' : '' }}>Tekshiruv jarayonida
                        </option>
                        <option value="Qoniqarsiz" {{ $application->status == 'Qoniqarsiz' ? 'selected' : '' }}>
                            Qoniqarsiz</option>
                        <option value="Qoniqarli" {{ $application->status == 'Qoniqarli' ? 'selected' : '' }}>Qoniqarli
                        </option>
                        <option value="Ishga qabul qilindi"
                            {{ $application->status == 'Ishga qabul qilindi' ? 'selected' : '' }}>Ishga qabul qilindi
                        </option>
                        <option value="Ishdan bo'shatildi"
                            {{ $application->status == 'Ishdan bo\'shatildi' ? 'selected' : '' }}>Ishdan bo'shatildi
                        </option>
                    </select>
                </div>

                <div class="form-group col-lg-12">
                    <label for="comments">Izoh</label>
                    <textarea name="comments" id="comments" class="form-control"
                        rows="3">{{ old('comments', $application->comments) }}</textarea>
                </div>
            </div>

            <hr>
            <div class="form-group mb-3">
                <button class="btn btn-success" type="submit">Tekshirish</button>
            </div>
        </form>

    </div>
</div>
<br>

@endsection