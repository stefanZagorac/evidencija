<section
class="relative h-72 bg-black flex flex-col justify-center align-center text-center space-y-4 mb-4"
>
<div
    class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat"
    style="background-image: url('images/laravel-logo.png')"
></div>

<div class="z-10">
    @auth
    <h1 class="text-6xl font-bold text-white">
        Zakazani termini:
    </h1>
    @else
    <h1 class="text-6xl font-bold text-white">
        Dobrodošli
    </h1>
    <p class="text-2xl text-white font-bold my-4">
        Imajte uvid i kontrolišite vaše zakazane termine
    </p>
    @endauth
</div>
</section>