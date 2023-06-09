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
    <form action="{{route('kategori.create')}}" method="POST">
        @csrf
        <!-- form text field -->
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex: Title</div>
        </div>
        <!-- end form text field -->
        <!-- form text field -->
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex: Deskripsi singkat</div>
        </div>
        <!-- end form text field -->
        <!-- form text field -->
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Pict</label>
            <input type="text" class="form-control" id="pict" name="pict"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex: Picture/Foto</div>
        </div>
        <!-- end form text field -->
        <!-- form text field -->
        <div class="mb-3">
            <label for="exampleInputText" class="form-label">Views</label>
            <input type="text" class="form-control" id="views" name="views"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex: 100</div>
        </div>
        <!-- end form text field -->
        <!-- form text field -->
        <!-- end form text field -->
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- end body -->
</div>
@endsection