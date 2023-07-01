@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Barang</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/barang" class="mb-5" enctype="multipart/form-data">
        @csrf  
        
        <div class="mb-3">
          <label for="namabarang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control @error('namabarang') is-invalid @enderror" id="namabarang" name="namabarang" 
          required autofocus value="{{ old('namabarang')}}">
        
          @error('namabarang')
          <div class= 'invalid-feedback'>
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" 
          required autofocus value="{{ old('deskripsi')}}">
        
          @error('deskripsi')
          <div class= 'invalid-feedback'>
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" 
          required autofocus value="{{ old('harga')}}">
        
          @error('harga')
          <div class= 'invalid-feedback'>
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <img class="img-preview img-fluid mb-2 col-sm-5" alt="">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
         
          @error('image')
          <div class= 'invalid-feedback'>
            {{ $message }}
          </div>
          @enderror
        </div>

        
        <button type="submit" class="btn btn-primary">Add Barang</button>
      </form>
</div>


<script>
  
  // menonaktifkan attach file
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFRevent){
      imgPreview.src = oFRevent.target.result;
      }

    }
    
</script>

@endsection
