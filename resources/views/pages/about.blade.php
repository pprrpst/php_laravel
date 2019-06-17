<!DOCTYPE HTML>
<!--
<html>
<head>
    <title>About</title>
</head>
<body>
-->
@extends('layout')
@section('content')
    <h1>About Me</h1>
    <h1>About Me: <?= $first_name ?> <?= $last_name ?></h1>
<h1>
<?php
echo ">>".$first_name.$last_name;
?>
</h1>
    <h1>About Me: {{ $first_name }} {{ $last_name }}</h1>

@endsection('content')
<!--
</body>
</html>
-->
