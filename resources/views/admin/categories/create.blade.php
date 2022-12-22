@extends('admin.master')
@section('title', 'index page')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-flex justify-content-between mb-4 align-items-center">
            <h1 class="h3 text-gray-800">{{ __('site.Add New Category') }}</h1>
            <a href="{{ route('admin.categories.index') }}"
                class="btn btn-outline-primary px-5">{{ __('site.All Categories') }}</a>
        </div>
        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" class="w-50">
            @csrf
            @include('admin.categories.form')
            <button class="btn btn-outline-success btn-lg px-5">{{ __('site.Add') }}</button>
        </form>
    </div>
@stop
