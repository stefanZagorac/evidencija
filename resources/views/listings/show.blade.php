@extends('layout')

@section('content')
    


<a href="/" class="inline-block text-white ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                <div class="bg-lightgrey border border-black p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{asset('images/laravel-logo.png')}}"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
                        <div class="text-xl font-bold mb-4">{{$listing->make}} {{$listing->model}}</div>
                       
                        <div class="text-lg my-4">
                            Datum: {{$listing->date}}
                        </div>

                        <div class="text-lg my-4">
                            Cena: {{$listing->price}} rsd
                        </div>
                        <div class="border border-black w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                Napomena
                            </h3>
                            <div class="text-lg space-y-6">
                                <p>
                                    {{$listing->note}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@auth
<div class="text-white mt-3 ml-4">
    <a href="/listings/{{$listing->id}}/edit">
    <i class="fa-solid fa-pencil"></i>Ažurirajte termin</a>

<form method="POST" action="/listings/{{$listing->id}}">
    @csrf
    @method('DELETE')
    <button onclick="destroy()" class="text-laravel"><i class="fa-solid fa-trash mr-1"></i>Obriši termin</button>
</form>
</div>
@endauth  
@endsection

