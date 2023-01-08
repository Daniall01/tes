@extends('layout.form_view')
@section('title')
    Data Barang
@endsection
@section('link')
<a class="btn btn-primary" role="button" href=" {{ url('tambah_barang')}}">Tambah Barang</a>
<br>
<a class="btn btn-primary" role="button" href=" {{ url('cetakpdf')}}">Cetak PDF</a> 
@endsection
@section('thead')
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
    </tr>
@endsection
@section('tbody')
    @php $no = 1; @endphp
    @foreach ($barangs as $barang)
    <tr>
    <th scope="row">{{$no++}}</th>
    <td>{{$barang->name}}</td>
    <td><a class="btn btn-warning" role="button" href="{{url('edit_barang')."/".$barang->id}}">Edit</a>
    <a class="btn btn-danger" role="button" href="{{url('hapus_barang')."/".$barang->id}}">Hapus</a></td>
    </tr>
    @endforeach    
@endsection
