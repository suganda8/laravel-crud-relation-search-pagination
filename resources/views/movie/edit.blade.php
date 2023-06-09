@extends('layouts.main')

@section('title')
Edit Movie
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mt-4 text-gray-800">Edit Movie</h1>
    <!-- body -->
    <form action="{{route('movie.update')}}" method="POST">
        @csrf
        <!-- form text field -->
        <div class="mb-3">
            <input type="hidden" class="form-control" id="id" name="id" value="{{$movie->id}}">
            <label for="exampleInputText" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$movie->title}}">
            <div class="form-text">Ex: Titanic</div>
        </div>
        <!-- end form text field -->
        <div class="mb-3">
            <label for="e" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$movie->price}}">
            <div class="form-text">Ex: 50000</div>
        </div>

        <!-- form text field -->
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Kategori</label>
            <select class="form-control" name="kategori">
                <option>Pilih</option>
                @foreach($kategories as $key => $kategori)
                <option {{($movie->kategori_id == $kategori->id) ? "selected" : "" }} value="{{$kategori->id}}">{{$kategori->title}}</option>
                @endforeach
            </select>
            <div id="emailHelp" class="form-text">Ex: Horror</div>
        </div>
        <!-- end form text field -->
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- end body -->
</div>
@endsection