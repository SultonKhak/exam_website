@extends('Master')
@section('title','Home')
@section('content')

<div>
    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%; margin-top: 10px" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        <h3>New Blog</h3>
    </div>
    
    <div>
        <form class="px-5" action="/blog/add" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <a class="text-center my-auto p-1">Title:</a>
                <input class="form-control" type="text" autocomplete="off" name="title">
                @error('title') <p style = "color: red;">{{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <a class="text-center my-auto p-1">Category:</a>
                <select class="form-control" id="category" name="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category') <p style = "color: red;">{{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <a class="text-center my-auto p-1">Image:</a>
                <input class="form-control-file" type="file" autocomplete="off" name="image">
                @error('image') <p style = "color: red;">{{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <a class="text-center my-auto p-1">Story:</a>
                <textarea rows="5" class="form-control" type="text" autocomplete="off" name="description"></textarea>
                @error('description') <p style = "color: red;">{{$message}}</p> @enderror
            </div>
            @csrf
            <div class="form-group">
                <button class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
</div>


@endsection