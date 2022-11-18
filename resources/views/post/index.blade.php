@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Post') }}
                    <a href="{{ route('post.create') }}" class="btn btn-primary float-right">New</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td><img src="{{ asset('storage/' . $post->featured_image) }}" alt="" srcset="" width="200px" height="100px"></td>
                                <td>
                                    <a href="{{ route('post.edit', $post) }}" class="btn btn-secondary">Edit</a>

                                    <form action="{{ route('post.destroy', $post->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection