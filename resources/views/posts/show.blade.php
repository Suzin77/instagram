@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center pb-3">
                    <div class="pr-3">
                        <img class="rounded-circle w-100" src="/storage/{{$post->user->profile->image}}" alt="" style="max-width: 50px">
                    </div>

                    <div>
                        <h2>{{$post->user->username}}</h2>
                    </div>
                </div>
                <p>{{$post->caption}}</p>
            </div>
        </div>
    </div>
@endsection
