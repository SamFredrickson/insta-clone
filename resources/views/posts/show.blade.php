@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div>
                        <img src="/storage/{{ $post->user->profile->profileImage() }}" style="max-width: 40px;" class="rounded-circle mr-3 w-100" alt="">
                    </div>
                    <div class="pt-3">
                        <p class="font-weight-bold">{{ $post->user->username }}</p>
                    </div>
                    <a href="#" class="btn btn-primary font-weight-bold ml-3">Follow</a>
                </div>
            </div>
            <hr>
            <p><span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}" class="text-dark">{{ $post->user->username }}</a>:</span> {{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection

