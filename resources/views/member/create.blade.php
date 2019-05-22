@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="/member/store" method="GET">

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama">
                    </div>

                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Masukan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="member">Member</label>
                        <input type="text" class="form-control" id="member" name="member" placeholder="Bulanan,Mingguan,Harian">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
