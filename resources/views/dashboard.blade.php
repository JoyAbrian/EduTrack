@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="flex w-screen h-screen">
    @include('partials.Dashboard.sidebar')
    <div class="w-4/5">
        @include('partials.Dashboard.header')
        @isset($dashboardContent)
            {!! $dashboardContent !!}
        @endisset
    </div>
</div>

@endsection