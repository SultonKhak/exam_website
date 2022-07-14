@extends('Master')
@section('title','Home')
@section('content')

<div style="margin: 15px;">
            <div class="frame justify-content-center d-flex row">
                @foreach($articles as $article)
 
                    <div class="col-4" style="margin-bottom: 50px">
        
                        <div class="progress" style="height: 35px">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <h5>
                                    {{$article->title}}
                                </h5>
                                
                            </div>
                        </div>  
                        <img class="card-img rounded float-left" style="width: 400px;height:350px;margin-left: 3%" src="{{ Storage::url($article->image )}}" alt="image not found">                      
                        <p class="card-text">
                            {{substr($article->description, 0, 75)}}
                                <a href="/homepage/{{$article->id}}/detail">...Read more</a>
                            </p>
                    </div>
                 @endforeach
            </div>
</div>

@endsection
