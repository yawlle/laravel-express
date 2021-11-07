@extends('template')

@section('content')
    <h1 id="title2">Create New Post</h1>
    
    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif 


    {!! Form::open(['route'=>'admin.posts.store','method'=>'post']) !!}

      
    @include('admin.posts._form')

    <div class="form-group">
        <h4 id="form">{!! Form::label('tags', 'Tags:', ['class'=>'control-label']) !!}
        <br>
        <br>
        {!! Form::textarea('tags', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        <br>
        <button class='btn'>{!! Form::submit('CREATE POST', null, ['class'=>'btn btn-primary']) !!}</button>
    </div>



    {!! Form::close() !!}


   
@endsection