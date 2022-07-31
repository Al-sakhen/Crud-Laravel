@extends('layouts.master')

@push('styles')
    <style>
        #info-section {
            padding: 40px;
            margin-top: 80px
        }

    </style>
@endpush

@section('content')
<div class="container">
    <div id="info-section" class="pt-5">

        <form action="{{ url('information/update') }}" method="post" class="w-25 m-auto">
            @csrf
            <h1>edit Info name : <span class="text-danger">{{ $information->title }}</span></h1>

            <input type="text" class="form-control my-4" name="title" value="{{ $information->title }}">
            <input type="text" class="form-control my-4" name="description" value="{{ $information->description }}">
            <input type="hidden" name="id" value="{{ $information->id }}">
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
