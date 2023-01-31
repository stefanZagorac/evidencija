@extends('layout')

    
@section('content')
@include('partials._cover')
    
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless (count($listings) == 0)
    
@auth
@foreach($listings as $listing)
<div class="bg-lightgrey border border-black rounded p-6">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{asset('images/laravel-logo.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->make}} {{$listing->model}}</div>
        </div>
    </div>
</div>
@endforeach    
@endauth

@else
<p>Not Found</p>
@endunless
</div>
@endsection


