@extends('layout.form_tambah')
@section('title')
    Edit Member
@endsection
@section('conten')
<form action="{{url('update_member')."/".$members->id}}" method="post">
  @csrf
    <div class="mb-3">
      <label class="form-label">Nama Member</label>
      <input type="text" class="form-control" name="name" value="{{$members->name}}" >
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection