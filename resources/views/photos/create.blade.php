@extends('layout.app')

@section('content')

    {{-- @include('templates.navbar') --}}
    
    <div class="container">
        <h1 class="text-center">Add a photo</h1>
        <form action="{{route('photos.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name of photo</label>
                <input type="text" name="name" id='name' class="form-control" >
    
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" name="img" id='img' class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
               
            </div>
            <button type="submit" class="d-block mx-auto btn btn-primary">submit</button>
        </form>
       
    </div>
    
@endsection