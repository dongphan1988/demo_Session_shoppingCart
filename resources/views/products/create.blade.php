@extends('master')
@section('title', 'Add Product')
@section('name', 'New Product')
@section('content')
    <form action="{{route('products.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">description</label>
            <input type="text" class="form-control" name="description" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">price</label>
            <input type="text" class="form-control" name="price" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">price_old</label>
            <input type="text" class="form-control" name="price_old" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">image</label>
            <input type="file" class="form-control" name="image" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div>
            <button type="submit" class="btn btn-outline-primary">CREATE</button>
            <a href="{{route('products.list')}}">
                <button type="button" class="btn btn-outline-secondary">BACK LIST</button>
            </a>
        </div>

    </form>
    @endsection