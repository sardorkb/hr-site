@extends('backend.layouts.master')
@section('title', 'Jamoadoshni tahrirlash | Baraka Development')
@section('main-content')
<div class="card">
    <h5 class="card-header">Jamoadoshni tahrirlash</h5>
    <div class="card-body">
        <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- This is necessary for PUT/PATCH requests -->
            
            <div class="form-group">
                <label for="name" class="col-form-label">F.I.Sh <span class="text-danger">*</span></label>
                <input id="name" type="text" name="name" placeholder="To'liq ism sharifni kiriting"
                    value="{{ old('name', $team->name) }}" class="form-control">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="position" class="col-form-label">Lavozimi <span class="text-danger">*</span></label>
                <input id="position" type="text" name="position" placeholder="Ishlayotgan lavozimini kiriting"
                    value="{{ old('position', $team->position) }}" class="form-control">
                @error('position')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="bio" class="col-form-label">Haqida <span class="text-danger">*</span></label>
                <textarea class="form-control" id="bio" name="bio">{{ old('bio', $team->bio) }}</textarea>
                @error('bio')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="photo" class="col-form-label">Rasm <span class="text-danger">*</span></label>
                <input type="file" name="photo" id="photo" class="form-control">
                @if ($team->photo)
                    <img src="{{ asset('storage/' . $team->photo) }}" alt="{{ $team->name }}" width="100" class="mt-2">
                @endif
            </div>
            
            <hr>
            <div class="form-group mb-3">
                <button type="reset" class="btn btn-warning">Qaytadan kiritish</button>
                <button class="btn btn-success" type="submit">Saqlash</button>
            </div>
        </form>
    </div>
</div>
@endsection
