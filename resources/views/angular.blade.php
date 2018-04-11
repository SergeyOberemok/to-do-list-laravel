@extends('layouts.app')

@section('head')
    <title>To Do List Angular</title>
    <base href="/">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('js/angular/styles.bundle.css') }}">
@endsection

@section('content')
    <app-root></app-root>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/angular/inline.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/angular/polyfills.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/angular/main.bundle.js') }}"></script>
@endsection