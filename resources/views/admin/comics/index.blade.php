@extends('layouts.app')

@section('title','Admin Comics Index')

@section('main-section')

    {{-- Jumbo  --}}
    {{-- <div class="my_jumbo d-flex align-items-center ps-5">
        <div class="j-txt-box">
            <h5 class="text-uppercase">
                Welcome to Comics 
            </h5>
        </div>
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('delete'))
                <div class="alert alert-warning">
                    Comic {{session('delete')}} has been deleted succesfully
                </div>
                @endif

                @if (session('created'))
                <div class="alert alert-success">
                    Comic {{session('created')}} has been created succesfully
                </div>
                @endif

                @if (session('updated'))
                <div class="alert alert-success">
                    Comic {{session('updated')}} has been edited succesfully
                </div>
                @endif

            </div>
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th scope="col">Title</th>
                          <th scope="col">Description</th>
                          <th scope="col">Price</th>
                          <th scope="col">Series</th>
                          <th scope="col">Type</th>
                          <th scope="col">Sale Date</th>
                          <th scope="col">View</th>
                        </tr>
                    </thead>

                      <tbody>
                        @foreach ( $comicList as $comic)
                        <tr>
                            <th scope="row">{{$comic->title}}</th>
                            <td>{{$comic->description}}</td>
                            <td>{{$comic->price}}</td>
                            <td>{{$comic->series}}</td> 
                            <td>{{$comic->type}}</td>
                            <td>{{$comic->sale_date}}</td>
                            <td><a class="btn btn-primary mb-2" href="{{ route('admin.comics.show', $comic->id)}}" role="button">View</a>
                                <a class="btn btn-warning mb-2" href="{{route('admin.comics.edit', $comic->id)}}" role="button">Edit</a>
                               <form action="{{ route('admin.comics.destroy', $comic->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mb-2" role="button">Delete</button></td>
                               </form>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection