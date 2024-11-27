@extends('backend.layouts.master')
@section('title', 'Kategoriya tahrirlash | Baraka Development')
@section('main-content')
<div class="card">
    <h5 class="card-header">Kategoriya tahrirlash</h5>
    <div class="card-body">
        <form action="{{ route('lavozim_categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="col-form-label">Nomi <span class="text-danger">*</span></label>
                <input id="name" type="text" name="name" placeholder="Kategoriya nomini kiriting"
                    value="{{ old('name', $category->name) }}" class="form-control">
                @error('name')
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
