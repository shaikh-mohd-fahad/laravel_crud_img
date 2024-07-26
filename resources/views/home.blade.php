@extends("include.layout")
@section("main-content")
    <div class="container">
        <h1 class="text-center">Welcome to crude Project</h1>
        <div class="py-3">Welcome Admin, <a href="/insert" class="btn btn-success float-end"> Insert Student Detail</a></div>
        @if(session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
    </div>
    
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Country</th>
                <th scope="col">Course</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              
                @foreach ($students as $item)
                <tr>
                <td scope="row">{{$item->id}}</td>
                <td scope="row"><img src="{{asset('image/'.$item->image)}}" class="img-fluid" style="height:100px;width:100px"></td>
                <td scope="row">{{$item->name}}</td>
                <td scope="row">{{$item->email}}</td>
                <td scope="row">{{$item->gender}}</td>
                <td scope="row">{{$item->country}}</td>
                <td scope="row">{{$item->course}}</td>
                <td scope="row">
                    <a href="/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                    <a href="/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                </td>
                </tr>
                @endforeach
               
              
            </tbody>
          </table>
    </div>
@endsection