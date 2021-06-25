@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/avatar.jpg" style="height: 150px; width:150px;" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>342</strong> posts</div>
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
        <div class="col-4">
            <img src="/img/avatar.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/girl.png" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/boy.png" class="w-100">
        </div>
    </div>
</div>
@endsection