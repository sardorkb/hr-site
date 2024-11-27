@extends('backend.layouts.master')
@section('title','Filial qo\'shish | Baraka Development')
@section('main-content')
<div class="card">
    <h5 class="card-header">Filial qo'shish</h5>
    <div class="card-body">
        <form action="{{ route('branches.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class="col-form-label">Nomi <span class="text-danger">*</span></label>
                <input id="name" type="text" name="title" placeholder="Filial nomini kiriting"
                    value="{{ old('title') }}" class="form-control">
                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description" class="col-form-label">Haqida <span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="location" class="col-form-label">Shahar <span class="text-danger">*</span></label>
                        <select id="location" name="location" class="form-control">
                            <option value="">--Tanlang--</option>
                            <option value="Qo'qon shahar">Qo'qon shahar</option>
                            <option value="Farg'ona shahar">Farg'ona shahar</option>
                            <option value="Toshkent shahar">Toshkent shahar</option>
                        </select>
                        @error('location')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="photo" class="col-form-label">Rasm <span class="text-danger">*</span></label>
                        <input type="file" name="photo" id="photo" class="form-control">
                    </div>
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
@endsection