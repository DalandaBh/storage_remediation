@extends('layout.app')

@section('content')


    <div class="col-12 mt-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Mes photos</h3>

                <a href="{{route('photos.create')}}">
                    <button class="btn btn-success d-block mx-auto">Add</button>
                </a>

        
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-wrap">
                  <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($photos as $photo)
                    <tr>
                        <td>{{$photo->name}}</td>
                        <td><img src="{{asset('storage/'.$photo->img)}}" class="img-fluid" style="width: 50px;" /></td>
                        <td>{{$photo->description}}</td>
                        <td class="d-flex">
                            <a href="{{route('photos.edit', $photo->id)}}">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <form action="{{route('photos.destroy',$photo->id)}}" method="post">
                                @csrf
                                @method('delete')
                                    <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


   
    {{-- <div class="container pt-5 mt-5">
        <h1 class="text-center mt-5 pt-5">Mes portfolios</h1>
        <a href="{{route('portfolio.create')}}">
            <button class="btn btn-primary d-block mx-auto mb-5">Add</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nom</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
                <tr>
                    <td>{{$portfolio->name}}</td>
                    <td><img src="{{asset('storage/'.$portfolio->img_path)}}" class="img-fluid" /></td>
                    <td>{{$portfolio->description}}</td>
                    <td>
                        <a href="{{route('portfolio.edit', $portfolio->id)}}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <form action="{{route('portfolio.destroy',$portfolio->id)}}" method="post">
                            @csrf
                            @method('delete')
                                <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>

    </div> --}}
    
@endsection