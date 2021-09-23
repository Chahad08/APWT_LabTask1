@extends('layouts.structure')

@section('content')
<h1> This is Product Page </h1>
 <h2> List Of Products </h2>
 @foreach ($product as $item)
{{
    $item
}}
<?php
 echo "<br>";
 ?>
@endforeach


@endsection