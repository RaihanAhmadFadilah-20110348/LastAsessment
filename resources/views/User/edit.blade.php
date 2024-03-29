@extends('layouts.main2')
@section('container')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('user.update', $row) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name', $row->name) }}" /> 
            </div>
            <div class="form-group">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="username" value="{{ old('username', $row->username) }}" /> 
            </div>
            <div class="form-group">
                <label>Role <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="role" value="{{ old('role', $row->role) }}" /> 
            </div>
            <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{ old('email', $row->email) }}" />
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
                <p class="form-text">Kosongkan jika tidak ingin mengubah password.</p>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('user.index') }}">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection