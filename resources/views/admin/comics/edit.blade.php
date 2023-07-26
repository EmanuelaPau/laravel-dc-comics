@extends('layouts.app')

@section('title','Admin Comics Create')

@section('main-section')
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    Create new Comic
                </h1>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-9 m-auto">
                <form action="{{route('admin.comics.update')}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="title" class="form-label">Write here the Comic Title</label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{$comic->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Write here the Comic description</label>
                        <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="description " value="{{$comic->description}}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Write here the Comic price</label>
                        <input type="text" class="form-control" id="price" aria-describedby="emailHelp" name="price"  value="{{$comic->price}}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Write here the Comic series</label>
                        <input type="text" class="form-control" id="series" aria-describedby="emailHelp" name="series" value="{{$comic->series}}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Write here the Comic type</label>
                        <input type="text" class="form-control" id="type" aria-describedby="emailHelp" name="type" value="{{$comic->type}}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Write here the sale date</label>
                        <input type="text" class="form-control" id="sale_date" aria-describedby="emailHelp" name="sale_date" value="{{$comic->sale_date}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>

                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection