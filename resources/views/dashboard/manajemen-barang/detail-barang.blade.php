@extends('dashboard.layouts.main')

@section('container')
    
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $barang->namabarang }}</h2>
            
                   <a href="/dashboard/barang" class="btn btn-success"><span data-feather="arrow-left"></span>
                    Back to all Barang</a>
                   <a href="/dashboard/barang/{{ $barang->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                    <form action="/dashboard/barang/{{ $barang->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')"> <span data-feather="x-circle"></span> 
                            Delete</button>
                      </form>

                        @if ($barang->image)
                            <div style="max-height:350px; overflow:hidden;">
                                <img src="{{ asset('uploads/' . $barang->image) }}" 
                                alt="{{ $barang->barangname }}" class="img-fluid mt-3">  
                            </div> 
                        @else
                        <img src="http://source.unsplash.com/1200x400?{{ $barang->barangname }}" 
                        alt="{{ $barang->barangname }}" class="img-fluid mt-3">
                        @endif
                    
                    <article class="my-3 fs-5" >
                        {!! $barang->deskripsi !!}
                    </article>

                    <article class="my-3 fs-5" >
                        {!! $barang->harga !!}
                    </article>
            </div>
        </div>  
    </div>         

@endsection

