@extends('layout.form_tambah')
@section('title')
    Edit Barang
@endsection
@section('conten')
<form action="{{url('update_barang')."/".$barangs->id}}" method="post">
  @csrf
    <div class="mb-3">
      <label class="form-label">Nama Barang</label>
      <input type="text" class="form-control" name="name" value="{{$barangs->name}}" >
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection