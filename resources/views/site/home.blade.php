@extends('site.layout')
@section('title','This is the home page')
@section('content')

{{--this is a joke for you?--}}

{{--isset($name) ? 'exist': 'dont exist'--}}

{{ $test ??'default'}}
@endsection