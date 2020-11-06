@extends('layout.master')
@section('body')
    
<html>
    <div style="padding:50px;
    background: rgb(151, 129, 129);
    margin:20px">
<h1   style="text-align: center;"  >
    The PHP Framework for Web Artisans
</h1>
<br>

<br>
<span style="
color:red;
font-size:20px;

">{{$test}}</span>

<br>
<p style="font-size:30px"><br><br>Laravel is a web application framework with expressive,
   <br>  elegant syntax. We’ve already laid the foundation
     — freeing you to <br> create without sweating the small things</p>
</div>
</html>
@endsection
