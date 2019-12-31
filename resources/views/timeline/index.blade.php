@extends('layouts.default')

@section('title','TimeLine')

@section('styles')
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

@endsection


@section('content')

<h3>Welcome {{$name}}</h3>

@if($title)
    {{$title}}
@else
    No title
@endif

<h2>Entries</h2>
<ul>
    @foreach($entries as $item)

        <li @if ($loop->first) style="color: red" @endif>{{$item}}</li>


    @endforeach
</ul>

@endsection