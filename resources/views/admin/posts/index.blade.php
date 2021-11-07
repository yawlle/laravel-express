@extends('template')

@section('content')
<h1 class="title">Blog Admin</h1>

<button class="btn"><a href="{{ route('admin.posts.create')}} " class="btn btn--default"> CREATE </a></button>
<br>
<br>


    <table class="table">
        <tr>
            <th class="title2">ID</th>
            <th class="title2">Titulo:</th>
            <th class="title2">Ações:</th>
        </tr>

        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>
                <button class="btn"><a href="{{ route('admin.posts.edit', ['id'=>$post->id]) }}" class="btn btn--default" > Edit </a></button>
                <button class="btn"><a href="{{ route('admin.posts.destroy', ['id'=>$post->id]) }}" class="btn btn--danger" > Destroy </a></button>
            </td>
        </tr>
        @endforeach
    </table>

    {!!$posts->render()!!}

   
@endsection