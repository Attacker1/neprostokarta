{{--
Template Name: Главная страница
--}}
@extends('layouts.app')

@section('content')
  @include('components.hello.wrap')
  @include('components.description.wrap')
  @include('components.payment.wrap')
  @include('components.experience.wrap')
  @include('components.results.wrap')
  @include('components.partner.wrap')
@endsection
