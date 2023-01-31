@extends('layout')

@section('content')
    


<div class="bg-lightgrey border border-black p-10 rounded max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold mb-1">
                            Ažurirajte termin
                        </h2>
                    </header>

                    <form method="POST" action="/listings/{{$listing->id}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-6">
                            <label
                                for="title"
                                class="inline-block text-lg mb-2"
                                >Naziv</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title"
                                value="{{$listing->title}}"
                            />
                        </div>

                        <div class="mb-6">
                            <label for="make" class="inline-block text-lg mb-2"
                                >Marka vozila</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="make"
                                placeholder="Na primer: Volkswagen"
                                value="{{$listing->make}}"
                            />
                        </div>

                        <div class="mb-6">
                            <label
                                for="model"
                                class="inline-block text-lg mb-2"
                                >Model vozila</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="model"
                                placeholder="Na primer: Golf 4"
                                value="{{$listing->model}}"
                            />
                        </div>

                        <div class="mb-6">
                            <label for="date" class="inline-block text-lg mb-2"
                                >Datum</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="date"
                                placeholder="Uneti datum u formatu DD.MM.GGGG"
                                value="{{$listing->date}}"
                            />
                        </div>

                        <div class="mb-6">
                            <label for="price" class="inline-block text-lg mb-2"
                                >Cena</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="price"
                                placeholder="Uneti cenu u dinarima"
                                value="{{$listing->price}}"
                            />
                        </div>


                        <div class="mb-6">
                            <label
                                for="note"
                                class="inline-block text-lg mb-2"
                            >
                                Napomena
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="note"
                                placeholder="Include tasks, requirements, salary, etc"
                                value="{{$listing->note}}"
                            >
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                                onclick="store()"
                            >
                                Ažuriraj termin
                            </button>

                            <a href="/" class="text-black ml-4"> Nazad </a>
                        </div>
                    </form>
                </div>
                @endsection