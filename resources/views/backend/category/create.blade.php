@extends('backend.layouts.master')
@section('title', 'Kategoriya qo\'shish | Baraka Development')
@section('main-content')
<div class="card">
    <h5 class="card-header">Kategoriya qo'shish</h5>
    <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="col-form-label">Nomi <span class="text-danger">*</span></label>
                <input id="name" type="text" name="name" placeholder="To'liq ism sharifni kiriting"
                    value="{{old('name')}}" class="form-control">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <hr>
            <div class="form-group mb-3">
                <button type="reset" class="btn btn-warning">Qaytadan kiritish</button>
                <button class="btn btn-success" type="submit">Qo'shish</button>
            </div>
        </form>
    </div>
</div>
@endsection