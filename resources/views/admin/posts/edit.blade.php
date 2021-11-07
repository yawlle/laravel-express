@extends('template')

@section('content')
    <h1 id="title2">Edit Post: {{$post->title}}</h1>
    
    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif 


    {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}

   @include('admin.posts._form')

   <div class="form-group">
    <h4 id="form">{!! Form::label('tags', 'Tags:', ['class'=>'control-label']) !!}
        <br></h4>
        {!! Form::textarea('tags', $post->tagList, ['class'=>'form-control']) !!}
        
    </div>

    <div class="form-group">
        <br>
        <button class='btn'>{!! Form::submit('SAVE POST', null, ['class'=>'btn btn-primary']) !!}</button>
    </div>



    {!! Form::close() !!}


   
@endsection