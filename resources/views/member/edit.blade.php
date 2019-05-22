@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Admin</div>

                <div class="card-body">
                <form method="GET" action="/member/{{$members->id}}/update">
                        @csrf 

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $members->name }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Alamat</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $members->address }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="member" class="col-md-4 col-form-label text-md-right">Member</label>

                            <div class="col-md-6">
                                <input id="member" type="text" class="form-control" name="member" value="{{ $members->member }}" required>
                            </div>
                        </div>

                         <div class="from-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    Simpan
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
