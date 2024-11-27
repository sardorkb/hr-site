@extends('backend.layouts.master')
@section('title', 'Lavozim tahrirlash | Baraka Development')
@section('main-content')
<div class="card">
    <h5 class="card-header">Lavozim tahrirlash</h5>
    <div class="card-body">
        <form action="{{ route('positions.update', $position->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title" class="col-form-label">Sarlavha <span class="text-danger">*</span></label>
                <input id="title" type="text" name="title" placeholder="Lavozim sarlavhasini kiriting"
                    value="{{ old('title', $position->title) }}" class="form-control">
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description" class="col-form-label">Lavozim haqida <span class="text-danger">*</span></label>
                <textarea id="description" name="description" placeholder="Lavozim tavsifini kiriting"
                    class="form-control">{{ old('description', $position->description) }}</textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="requirements" class="col-form-label">Ma'suliyatlari <span class="text-danger">*</span></label>
                <textarea id="requirements" name="requirements" placeholder="Lavozim talablarini kiriting"
                    class="form-control">{{ old('requirements', $position->requirements) }}</textarea>
                @error('requirements')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id" class="col-form-label">Kategoriya <span class="text-danger">*</span></label>
                <select id="category_id" name="lavozim_category_id" class="form-control">
                    <option value="">Tanlang</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $position->lavozim_category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <hr>
            <div class="form-group mb-3">
                <button type="reset" class="btn btn-warning">Qaytadan kiritish</button>
                <button class="btn btn-success" type="submit">Yangilash</button>
            </div>
        </form>
    </div>
</div>
@endsection
