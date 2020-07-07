<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}" >
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
@include('partials.admin-header')
<p>There is a hidden message for you. Click to see it.</p>
<button onclick="myFunction()">Click me!</button>
<p id="demo"></p>
<script type="text/javascript" src="{{ URL::to('js/group/shame.js') }}"></script>
</body>
</html>
