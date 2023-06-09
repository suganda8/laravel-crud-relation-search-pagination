@extends('layouts.main')

@section('title')
Buat Kategori
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">Deskripsi di sini <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>
    <!-- body -->
    <form action="{{route('movie.create')}}" method="POST">
        @csrf
        <!-- form text field -->
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex: Titanic</div>
        </div>
        <!-- end form text field -->
        <div class="mb-3">
            <label for="e" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price"
                aria-describedby="emailHelp">
            <div class="form-text">Ex: 50000</div>
        </div>

        <!-- form text field -->
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Kategori</label>
            <select class="form-control" name="kategori">
                <option selected>Pilih</option>
                @foreach($kategories as $key => $kategori)
                <option value="{{$kategori->id}}">{{$kategori->title}}</option>
                @endforeach
            </select>
            <div class="form-text">Ex: Horror</div>
        </div>
        <!-- end form text field -->
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- end body -->
</div>
@endsection