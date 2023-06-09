@extends('layouts.main')

@section('title')
Edit Kategori
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mt-4 text-gray-800">Edit Kategori</h1>
    <!-- body -->
    <form action="{{route('kategori.update')}}" method="POST">
        @csrf
        <!-- hidden id -->
        <input type="hidden" class="form-control" id="id" name="id" value="{{$kategori->id}}"
                aria-describedby="emailHelp">
        <!-- end hidden id -->
        <!-- form text field -->
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$kategori->title}}"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex: Ferro Dwi</div>
        </div>
        <!-- end form text field -->
        <!-- form text field -->
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$kategori->description}}"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex: Deskripsi singkat</div>
        </div>
        <!-- end form text field -->
        <!-- form text field -->
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Pict</label>
            <input type="text" class="form-control" id="pict" name="pict" value="{{$kategori->pict}}"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex: Picture/Foto</div>
        </div>
        <!-- end form text field -->
        <!-- form text field -->
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Views</label>
            <input type="text" class="form-control" id="views" name="views" value="{{$kategori->views}}"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex: 100</div>
        </div>
        <!-- end form text field -->
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- end body -->
</div>
@endsection