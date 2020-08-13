@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="row">
                <h1>Add New Post</h1>
            </div>
            <div class="col-md-12">
    
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Post Caption') }}</label>
    
                    <div class="col-md-6">
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption">
    
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Post Image') }}</label>
    
                    <div class="col-md-6">
                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">
    
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
               
                <div class="row justify-content-center" style="height: 45px;">
                    <button class="btn btn-primary col-lg-8 font-weight-bold">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

