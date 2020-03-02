@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle p-3" src="/img/green-profile.png" style="max-height: 200px">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="">Add new Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>23k</strong> followers</div>
                <div class="pr-4"><strong>212</strong> follows</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>
                {{$user->profile->description}}
            </div>
            <div><a href="https://lin-q.pl" target="_blank">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1526228446530-49914082ff8a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1526228446530-49914082ff8a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1526228446530-49914082ff8a?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="" class="w-100">
        </div>


    </div>

</div>
@endsection
