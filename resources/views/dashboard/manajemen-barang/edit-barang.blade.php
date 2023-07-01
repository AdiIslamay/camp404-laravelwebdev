@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Barang</h1>
</div>

<form action="/dashboard/barang/{{ $barang->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label>Nama Barang</label>
      <input type="text" name="namabarang" value="{{ $barang->namabarang }}" class="form-control">
    </div>
    
    @error('namabarang')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Deskripsi</label>
        <input type="text" name="deskripsi" value="{{ $barang->deskripsi }}" class="form-control">
      </div>
      
      @error('deskripsi')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror

      <div class="form-group">
        <label>Harga</label>
        <input type="number" name="harga" value="{{ $barang->harga }}" class="form-control">
      </div>
      
      @error('harga')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror

    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    
    @error('image')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
    
@endsection