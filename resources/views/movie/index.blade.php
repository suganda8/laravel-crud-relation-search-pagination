
@extends('layouts.main')

@section('title')
Movie
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mt-4 text-gray-800">Movie</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Movie</h6>
        </div>
        <div class="card-body">
            <a href="{{route('movie.add')}}" class="btn btn-primary mb-3">Tambah</a>

            <form action="{{route('index')}}">
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
                            <th>Price</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $key => $movie)
                        <tr>
                            <td>{{$key + $movies->firstItem()}}</td>
                            <td>{{$movie->title}}</td>
                            <td>{{$movie->price}}</td>
                            <td>{{$movie->kategori->title}}</td>
                            <td class="d-flex">
                                <a href="{{route('movie.edit', ['id' => $movie->id])}}" class="btn btn-warning m-1">Edit</a>
                                <form action="{{route('movie.delete', ['id' => $movie->id])}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger m-1">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    Halaman Saat Ini : {{$movies->currentPage()}}
                </div>
                <div>
                    Total Halaman : {{$movies->total()}}
                </div>
                <div>
                    Data Per Halaman : {{$movies->perPage()}}
                </div>
                

                <div class="mt-3">
                    {{$movies->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
