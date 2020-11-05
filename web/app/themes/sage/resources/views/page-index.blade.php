{{--
Template Name: Главная страница
--}}
@extends('layouts.app')

@section('content')
  @include('components.hello.wrap')
  @include('components.description.wrap')
  @include('components.payment.wrap')
@endsection
