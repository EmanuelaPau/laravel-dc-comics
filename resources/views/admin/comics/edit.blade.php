@extends('layouts.app')

@section('title','Admin Comics Show')

@section('main-section')


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Comic Title: {{$comic->title}}
                </h1>
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
                        </tr>
                    </thead>

                      <tbody>
                        <tr>
                            <th scope="row">{{$comic->title}}</th>
                            <td>{{$comic->description}}</td>
                            <td>{{$comic->price}}</td>
                            <td>{{$comic->series}}</td>
                            <td>{{$comic->type}}</td>
                            <td>{{$comic->sale_date}}</td>
                        </tr>
                      </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection