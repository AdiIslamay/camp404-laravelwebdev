@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Manajemen Barang </h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif


<div class="table-responsive col-lg-8">
  <a href="/dashboard/barang/create" class="btn btn-primary mb-3">Add New Barang</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($barang as $brng )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $brng->namabarang }}</td>
            <td>{{ $brng->harga }}</td>
            <td>
              <a href="/dashboard/barang/{{ $brng->id }}" class="badge bg-info">
                <span data-feather="eye"></span></a>
              <a href="/dashboard/barang/{{ $brng->id }}/edit" class="badge bg-warning">
                <span data-feather="edit"></span></a>

                <form action="/dashboard/barang/{{ $brng->id }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"> <span data-feather="x-circle"></span> </button>
                </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
