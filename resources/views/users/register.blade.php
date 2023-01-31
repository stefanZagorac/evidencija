@extends('layout')

@section('content')
    


<div class="mx-4">
    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Registrujte se
            </h2>
        </header>

        <form method="POST" action="/users">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">
                    Ime
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                />
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                    >E-mail</label
                >
                <input
                    type="email"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    placeholder="Unesite validan e-mail"
                />
            </div>

            <div class="mb-6">
                <label
                    for="password"
                    class="inline-block text-lg mb-2"
                >
                    Lozinka
                </label>
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password"
                />
            </div>

            <div class="mb-6">
                <label
                    for="password_confirmation"
                    class="inline-block text-lg mb-2"
                >
                    Potvrdite lozinku
                </label>
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password_confirmation"
                />
            </div>

            <div class="mb-6">
                <button
                    type="submit"
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Registrujte se
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Već ste registrovani?
                    <a href="/login" class="text-laravel"
                        >Ulogujte se</a
                    >
                </p>
            </div>
        </form>
    </div>
</div>

@endsection