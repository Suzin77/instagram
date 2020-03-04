@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle p-3 w-100" src="{{$user->profile->profileImage()}}">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-2">
                    <div class="h3">{{$user->username}}</div>
                    <follow-button></follow-button>
                </div>
                @can('update',$user->profile)
                    <a href="/p/create">Add new Post</a>
                @endcan
            </div>
            <div class="" style="border-bottom: 1px solid #1b1e21"></div>
            <div class="pt-1">
                @can('update',$user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit profile</a>
                @endcan
            </div>

            <div class="d-flex">
                <div class="pr-4"><strong>{{$user->posts->count()}}</strong> posts</div>
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

        @foreach($user->posts as $post)

        <div class="col-4 pt-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </a>
        </div>
        @endforeach

    </div>

</div>
@endsection
