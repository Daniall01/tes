@extends('layout.form_tambah')
@section('title')
    Tambah Member
@endsection
@section('conten')
<form action="{{url('simpan_member')}}" method="post">
    @csrf
    <div class="mb-3">
    <label class="form-label">Nama Member</label>
    <input type="text" class="form-control" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection