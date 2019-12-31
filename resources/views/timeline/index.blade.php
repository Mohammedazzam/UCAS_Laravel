<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Twitter</title>
    {{--<h3>Welcome {!! $name !!}</h3>--}}

    {{--<h3>Welcome <i>{!! $name !!}</i></h3>--}}

    <h3>Welcome <i>{{htmlentities($name)}}</i></h3> <!--بتحول لكود html-->

    @if($title)
        {{$title}}
    @else
        No title
    @endif

    <h2>Entries</h2>
<ul>
    @foreach($entries as $item)
        {{--<li>{{$item}}</li>--}}

        {{--<li>{{$loop->index}} {{$item}}</li>--}}

        {{--<li>{{$loop->iteration}} {{$item}}</li> <!--العد سيكون من 1-->--}}



        <li @if ($loop->first) style="color: red" @endif>{{$item}}</li>



    @endforeach
</ul>
</head>
<body>

</body>
</html>