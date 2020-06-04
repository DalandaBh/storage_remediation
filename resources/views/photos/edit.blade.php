@extends('layout.app')

@section('content')

    {{-- @include('templates.navbar') --}}
    
    <div class="container mt-5 pt-5">
        <h1 class="text-center mt-5 pt-5">Edit photo</h1>
        <form action="{{route('photos.update',$photo->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name of photo</label>
                <input type="text" name="name" id='name' class="form-control" value="{{$photo->name}}">
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" name="img" id='img' class="form-control" value="{{$photo->img}}">
                <img src="{{asset('storage/'.$photo->img)}}" alt="" style="width: 50px;">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" cols="83" rows="10">{{$photo->description}}</textarea>
            </div>
            <button type="submit" class="d-block mx-auto btn btn-primary">submit</button>
        </form>
       
    </div>
    
@endsection