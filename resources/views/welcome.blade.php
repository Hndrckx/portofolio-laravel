@extends('layouts.app')

@section('header')
@include('partials.nav')
@include('partials.hero')
@endsection

@section('content')
    @include('partials.about')
    @include('partials.skills')
    @include('partials.portofolio')
    @include('partials.services')
    @include('partials.testimonials')
    @include('partials.contact')
@endsection

@section('footer')
@include('partials.footer')
@endsection