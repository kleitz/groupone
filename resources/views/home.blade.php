@extends('template')
@section('title')
	Group One
@stop
@section('content')
	@include('nav')
    @include('intro')
	@include('security')
    @include('php')
	@include('about')
@stop
