@extends('Master')
@section('title','Home')
@section('content')

<div class="container-luar" style="margin-left: 39%; margin-top: 50px">
<div>
    <a href="/blog/add" class="btn btn-primary btn-lg enable" role="button" aria-disabled="true">+ Create Blog</a>
</div>

    <table style="margin-top: 20px">
    <tr style="margin-top: 10px">
        <th>Title</th>
        <th>Action</th>
    </tr>
    @foreach($articles as $article)
    <tr style="margin-top: 10px">
        <td>{{$article->title}}</td>
        <td>
            <form action="/blog/{{$article->id}}" method="post">
                @Method('delete')
                @csrf
                    <button>
                        Delete
                    </button> 
            </form>

        </td>
    </tr>
    @endforeach
    </table>


</div>



@endsection