@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @include('layouts/components/messages')
                    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="text" name="title" id="" class="form-control" placeholder="Title" value="{{ $post->title }}">
                        <input type="text" name="body" id="" class="form-control" placeholder="Body" value="{{ $post->body }}">
                        <input type="file" name="featured_image" id="" class="form-control">
                        <input type="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
