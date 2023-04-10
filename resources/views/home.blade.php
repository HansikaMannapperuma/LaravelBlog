@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form method="post" action="{{route('post.store')}}">
                            @csrf
                            <div class="form-group">
                                <label>Post Title</label><br>
                                <input type="text" name="title" class="form-control"  placeholder="Enter post title" required>
                            </div>

                            <div class="form-group">
                                <label>Post Description</label><br>
                                <textarea class="form-control" name="description" placeholder="Enter post description" rows="10" required></textarea>
                            </div>
                            <div>
                                <br>
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
