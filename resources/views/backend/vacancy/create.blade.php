@extends('backend.layouts.master')
@section('title', 'Yangi ish o\'rni qo\'shish | Baraka Development')
@section('main-content')
<div class="card">
    <h5 class="card-header">Yangi ish o'rni qo'shish</h5>
    <div class="card-body">
        <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title" class="col-form-label">Lavozim <span class="text-danger">*</span></label>
                <input id="title" type="text" name="title" placeholder="Lavozim nomini kiriting" value="{{ old('title') }}"
                    class="form-control">
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="description" class="col-form-label">Ish haqida <span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="requirements" class="col-form-label">Talablar <span class="text-danger">*</span></label>
                <textarea class="form-control" id="requirements" name="requirements">{{ old('requirements') }}</textarea>
                @error('requirements')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="conditions" class="col-form-label">Kompaniya tomonidan xodimga berilaigan qulayliklar <span class="text-danger">*</span></label>
                <textarea class="form-control" id="conditions" name="conditions">{{ old('conditions') }}</textarea>
                @error('conditions')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="skills" class="col-form-label">Mahoratlar/Ko'nikmalar/Skills <span class="text-danger">*</span></label>
                <textarea class="form-control" id="skills" name="skills">{{ old('skills') }}</textarea>
                @error('skills')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="location" class="col-form-label">Ish joy manzili <span class="text-danger">*</span></label>
                    <select id="location" name="location" class="form-control">
                        <option value="" disabled selected>---Manzilni tanlang---</option>
                        <option value="Qo'qon shahar" {{ old('location') == 'Qo\'qon shahar' ? 'selected' : '' }}>Qo'qon shahar</option>
                        <option value="Farg'ona shahar" {{ old('location') == 'Farg\'ona shahar' ? 'selected' : '' }}>Farg'ona shahar</option>
                        <option value="Toshkent shahar" {{ old('location') == 'Toshkent shahar' ? 'selected' : '' }}>Toshkent shahar</option>
                    </select>
                    @error('location')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="category" class="col-form-label">Ish joyi turini tanlang <span class="text-danger">*</span></label>
                    <select id="category" name="category_id" class="form-control">
                        <option value="" disabled selected>---Kategoriya tanlang---</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <br>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="phone_number" class="col-form-label">Telefon raqami <span class="text-danger">*</span></label>
                    <input id="phone_number" type="text" name="phone_number" placeholder="Telefon raqamini kiriting"
                        value="{{ old('phone_number') }}" class="form-control">
                    @error('phone_number')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="close_date" class="col-form-label">Qabul yakunlanish sanasi <span class="text-danger">*</span></label>
                    <input id="close_date" type="date" name="close_date" value="{{ old('close_date') }}"
                        class="form-control">
                    @error('close_date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                    <label for="photo" class="col-form-label">Rasm</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                </div>
            </div>
            <hr>
            <div class="form-group mb-3">
                <button type="reset" class="btn btn-warning">Qaytadan kiritish</button>
                <button class="btn btn-success" type="submit">Qo'shish</button>
            </div>
        </form>
    </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
<!-- Include Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#requirements').summernote({
            height: 100, // Set the height of the editor
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>

<br>
@endsection
