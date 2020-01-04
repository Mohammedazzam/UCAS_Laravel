@extends('layouts.default')


@section('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection


@section('content')

    <h2>Posts</h2>

    @if(session('message'))
        <div class="alert alert-success">
            <p>{{session('message')}}</p>
        </div>
     @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Content</th>
                <th>Crated At</th>
                <th>Updated At</th>
            </tr>
        </thead>


    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->content}}</td>
            {{--<td>{{$post->created_at}}</td>--}}
            {{--<td>{{$post->created_at->format('d/m/y')}}</td>--}}
            <td>{{$post->created_at->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>


            <td><a href="{{route('posts.edit',[$post->id])}}">Edit</a></td>
            {{--<td><a href="{{route('posts.edit',[ 'id'=>$post->id])}}">Edit</a></td>--}}
            <td>
                <form action="{{route('posts.destroy',[$post->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link">Delete</button>
                </form>
            </td>


        </tr>
    @endforeach
    </tbody>
    </table>
@endsection


@section('script')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection