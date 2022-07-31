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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('information/store') }}" method="post" class="w-25 m-auto">
            @csrf
            <h1>create Info</h1>

            <input type="text" class="form-control my-4" name="title">
            <input type="text" class="form-control my-4" name="description">
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
@endsection
