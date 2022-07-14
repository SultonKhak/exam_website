@extends('Master')
@section('title','Home')
@section('content')

<div class="card mt-4">
        <div class="card-header bg-dark">

            <div class="progress" style="height: 35px">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <h5>
                        {{$article->title}}
                    </h5>
                    
                </div>
            </div>  
            
            </div>
            <div class="row no-gutters bg-light py-3 px-3">
                <div class="col-5">
                    <img class="card-img rounded float-left" style="width: 400px;height:400px;margin-left: 3%" src="{{ Storage::url($article->image )}}" alt="image not found">
                </div>
                <div class="col-7 card-body mx-auto">
                    <p class="text-justify card-text">{{$article->description}}</p>
                    <a class="btn btn-dark mt-auto ml-auto" href="{{ url()->previous() }}">Back</a>
                </div>
 
            </div>
        </div>
</div>

@endsection