@extends('site.layout')
@section('title','This is the home page')
@section('content')

{{--this is a joke for you?--}}


@include('includes.message', ['title' => 'success message'])

@component('components.sidebar')
    @slot('paragraph')
    A random text from the slot
    @endslot
    
@endcomponent

@endsection