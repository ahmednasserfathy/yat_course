@extends('layout.master')
@section('body')
<html>

    <body>

            <br>
            <br>

        <ul>
        @foreach ($enter as $a )
            <li>
                {{$a}}
            </li>
        @endforeach
        </ul>
        <p>welcome to contact</p>


            <br>
            <br>

    </body>



</html>
@endsection