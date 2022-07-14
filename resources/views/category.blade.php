@extends('Master')
@section('title','Home')
@section('content')
 
<div>
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="/homepage/categories/{{$category->id}}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
</div>
 
@endsection