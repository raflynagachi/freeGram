@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if ($user->profile->image)
            <div class="col-3 p-5">
                <img src="/storage/{{ $user->profile->image }}" 
                style="height: 150px; width:150px;" 
                class="rounded-circle">
            </div>
        @else
            <div class="col-3 p-5">
                <img 
                src="/img/icon/account_circle_black_24dp.svg" 
                style="height: 150px; width:150px;" 
                class="rounded-circle">
            </div>
        @endif
        
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex pb-3 align-items-center">
                    <div class="h4 mr-3">{{$user->username}}</div>
                    <follow-button user-id="{{$user->id}}"></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            </div>
            
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>73.5k</strong> followers</div>
                <div class="pr-5"><strong>317</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div class="">
                {{$user->profile->description}}
            </div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
