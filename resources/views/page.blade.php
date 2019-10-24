@extends('layouts.app')

@section('navigation')
    @include('partials.nav')
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('aboutMe')
    @include('partials.about')
@endsection

@section('instaGallery')
    @include('partials.gallery')
@endsection

@section('products')
    @include('partials.products')
@endsection

@section('contactMe')
    @include('partials.contact')
@endsection

@section('footer')
    @include('partials.footer')
@endsection