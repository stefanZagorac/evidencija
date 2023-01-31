<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                            darkgrey: "#202020",
                            lightgrey: "#808080",
                        },
                    },
                },
            };
        </script>
        <title>Evidencija</title>
    </head>
    <body class="mb-48 bg-darkgrey">
        <nav class="flex justify-between items-center mb-4">
            <a href="/"
                ><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                @auth
                    <span class="font-bold uppercase text-white">
                        Dobrodošli {{auth()->user()->name}}
                    </span>
                    <li>
                        <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="text-white hover:text-laravel">
                            Odjavite se
                        </button>
                    </form>
                    </li>
                @else
                <li>
                    <a href="/register" class="hover:text-laravel text-white"
                        >Registracija</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel text-white"
                        >Prijavite se</a>
                </li>
                @endauth
            </ul>
        </nav>
        <main>
    @yield('content')
</main>
<footer
class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-black text-white h-24 mt-24 opacity-90 md:justify-center"
>
<p class="ml-2">Tehnički fakultetet - Mihajlo Pupin, Zrenjanin</p>

<a
    href="/listings/create"
    class="absolute top-1/3 right-10 bg-darkgrey text-white py-2 px-5"
    >Kreiraj termin</a
>
</footer>
</body>
</html>