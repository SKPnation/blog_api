@extends('layout') {{--Inherit design from view--}} <!-- laravel pattern of commenting -->
@section('content') {{--Inherit design from view--}}

<?php // How to print a variable in laravel
?>
<!-- php pattern of commenting -->
<!-- html pattern of commenting -->
{{$variable}}</br> <!-- </br> means to break line -->
{{$blog->title}}</br>

<!-- How to print an array -->
@foreach($array as $arr)
{{$arr}}
@endforeach

<h3>From hello view</h3>

@stop