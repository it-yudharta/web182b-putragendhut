@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Data Member
                <a
                    class="btn btn-success float-right"
                    role="button" href="/member/create">
                    tambah
                </a>
                </div>
                 <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th> Id</th>
                        <th> Nama</th>
                        <th> Alamat</th>
                        <th> Member</th>
                        </tr>
                    </thead>
                    @foreach($members as $member)
                    <tbody>
                        <tr>
                        <td>{{$member->id}}</td>
                        <td>{{$member->name}}</td>
                        <td>{{$member->address}}</td>
                        <td>{{$member->member}}</td>
                        <td>
                        <a class="btn btn-sm btn-success" href="/member/{{$member->id}}/edit" role="button">Edit</a>
                        <a class="btn btn-sm btn-danger" href="/member/{{$member->id}}/delete" role="button">Hapus</a>
                        </td>
                        </tr>
                    </tbody>
                    @endforeach
                    </table>
                    {{$members->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
