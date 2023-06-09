
@extends('layouts.main')

@section('title')
Kategori
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mt-4 text-gray-800">Kategori</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
        </div>
        <div class="card-body">
            <a href="{{route('kategori.add')}}" class="btn btn-primary mb-3">Tambah</a>

            <form action="{{route('kategori.index')}}">
                <div class="input-group mb-3 col-md-4 p-0">
                    <input type="text" class="form-control" placeholder="Cari" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Pict</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategories as $key => $kategori)
                        <tr>
                            <td>{{$key + $kategories->firstItem()}}</td>
                            <td>{{$kategori->title}}</td>
                            <td>{{$kategori->description}}</td>
                            <td>{{$kategori->pict}}</td>
                            <td>{{$kategori->views}}</td>
                            <td class="d-flex">
                                <a href="{{route('kategori.edit', ['id' => $kategori->id])}}" class="btn btn-warning m-1">Edit</a>
                                <form action="{{route('kategori.delete', ['id' => $kategori->id])}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger m-1">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    Halaman Saat Ini : {{$kategories->currentPage()}}
                </div>
                <div>
                    Total Halaman : {{$kategories->total()}}
                </div>
                <div>
                    Data Per Halaman : {{$kategories->perPage()}}
                </div>
                

                <div class="mt-3">
                    {{$kategories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
