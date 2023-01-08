@extends('layout.form_view')
@section('title')
    Data User
@endsection
@section('link')
<a class="btn btn-primary" role="button" href=" {{ url('tambah_user')}}">Tambah User</a>
<br>
@endsection
@section('thead')
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">E-Mail</th>
        {{-- <th scope="col">Password</th> --}}
        {{-- <th scope="col">Status Member</th> --}}
        <th scope="col">Aksi</th>
    </tr>
@endsection
@section('tbody')
    @php $no = 1; @endphp
    @foreach ($users as $user)
    <tr>
    <th scope="row">{{$no++}}</th>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    {{-- <td>{{$user->password}}</td> --}}
    {{-- <td>{{$user->member->name}}</td> --}}
    <td><a class="btn btn-warning" role="button" href="{{url('edit_user')."/".$user->id}}">Edit</a>
    <a class="btn btn-danger" role="button" href="{{url('hapus_user')."/".$user->id}}">Hapus</a></td>
    </tr>
    @endforeach   
@endsection

