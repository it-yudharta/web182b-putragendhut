@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Jadwal Latihan
                </div>
                 <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th> Id</th>
                        <th> Hari</th>
                        <th> Latihan</th>
                        <th> Repetisi</th>
                        </tr>
                    </thead>
                    @foreach($jadwals as $member)
                    <tbody>
                        <tr>
                        <td>{{$member->id}}</td>
                        <td>{{$member->hari}}</td>
                        <td>{{$member->latihan}}</td>
                        <td>{{$member->repetisi}}</td>
                        <!-- <td>
                        <a class="btn btn-sm btn-success" href="/member/{{$member->id}}/edit" role="button">Edit</a>
                        <a class="btn btn-sm btn-danger" href="/member/{{$member->id}}/delete" role="button">Hapus</a>
                        </td> -->
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                    {{$jadwals->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
