@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-3 me-5">
            <img class="w-100 h-75 rounded-circle"
            src="{{ Auth::user()->profile->picture }}"
            alt="">
        </div>

        <div class="col-md-8" >
            <h1 class="h3">
                {{ Auth::user()->username }}
            </h1>

            <dl class="d-flex">
                <dt>1000</dt>
                <dd class="ps-1 pe-3">posts</dd>

                <dt>9.3M</dt>
                <dd class="ps-1 pe-3">followers</dd>

                <dt>29</dt>
                <dd class="ps-1">following</dd>
            </dl>

            <div>
                <h2 class="h6">
                    {{ Auth::user()->name }}
                </h2>

                <p>
                    {{ Auth::user()->profile->description }}
                </p>
            </div>

        </div>
    </div>
</div>
@endsection
