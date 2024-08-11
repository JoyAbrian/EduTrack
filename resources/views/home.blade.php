@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section id="home">
    @include('partials.LandingPage.hero')
</section>

<section id="companies">
    @include('partials.LandingPage.companies')
</section>

<section id="about">
    @include('partials.LandingPage.about')
</section>

<section id="pricing">
    @include('partials.LandingPage.pricing')
</section>

@include('partials.LandingPage.footer')

@endsection