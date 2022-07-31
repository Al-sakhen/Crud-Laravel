@extends('layouts.master')

@push('styles')
    <style>
        .container {
            padding: 40px;
            margin-top: 80px
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <a href="{{ url('information/create') }}" class="btn btn-sm btn-outline-info">Add Informaion</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Createed At</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($informations as $info)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $info->title }}</td>
                        <td>{{ $info->description }}</td>
                        <td>{{ $info->created_at }}</td>
                        <td>
                            <div class="d-flex">
                                <form action="{{ url('/information/edit' , ['id' =>$info->id]) }}" method="get">
                                    @csrf
                                    <button class="btn btn-info btn-sm">Edit</button>
                                </form>

                                <form class="ms-3" action="{{ url('/information/delete' , ['id' =>$info->id]) }}" method="POST" >
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr colspan="5">
                        There isn;t any informations yet
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
