@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @include('layouts/components/messages')
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" id="" class="form-control" placeholder="Title">
                        <input type="text" name="body" id="" class="form-control" placeholder="Body">
                        <input type="file" name="featured_image" id="" class="form-control">
                        <input type="submit" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
