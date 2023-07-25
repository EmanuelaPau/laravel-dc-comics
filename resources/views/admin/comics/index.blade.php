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
                            <td><a class="btn btn-primary" href="{{ route('admin.comics.show', $comic->id)}}" role="button">View</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection