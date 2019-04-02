@extends('layout.master')

@section('title','CreateProduct')

@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="well">

            <!*** Form****>
            <form method="post" enctype="multipart/form-data">
                @foreach($errors ->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach

                <legend> Insert A New Product</legend>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="description"> Description </label>
                    <textarea class="form-control" rows="3" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <input type="file" name ="file" id="exampleInputFile" style="color:#fff;" >
                    {{--<p class="help-block">Example block-level help text here.</p>--}}
                </div>
                <div class="checkbox">
                    {{--<label>--}}
                    {{--<input type="checkbox">--}}
                    {{--</label>--}}
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

            <!***end Form***>


        </div>


    </div>
    @endsection