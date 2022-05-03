<x-front-layout>
    @if(!empty($movie))
    <main class="my-2">
        <section class="bg-gradient-to-r from-indigo-700 to-trannsparent">
            <div class="max-w-6xl mx-auto m-4 p-2">
                <div class="flex">
                    <div class="w-3/12">
                        <div class="w-full">
                            <img class="w-full h-full rounded"
                                src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $movie->poster_path }}"
                                alt="">
                        </div>
                    </div>
                    <div class="8/12">
                        <div class="m-4 p-2">
                            <h1 class="flex text-white font-bold text-4xl">{{ $movie->title }}</h1>
                            <div class="flex p-3 text-white space-x-4">
                                <span class="">{{ $movie->release_date }}</span>
                                <span class="ml-2 space-x-1">
                                    @foreach($movie->genres as $genre)
                                    {{ $genre->title }},
                                    @endforeach
                                </span>
                                <span>
                                    {{ $movie->runtime }}
                                </span>
                            </div>
                            <div class="flex space-x-4">
                                @foreach($movie->trailers as $trailer)
                                <x-jet-button>{{ $trailer->name }}</x-jet-button>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-8 text-white">
                            <p>{{ $movie->overview }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="max-w-6xl mx-auto ">
            <div class="flex">
                <div class="w-8/12">
                    <h1 class="flex text-white font-bold text-xl">Movie Casts</h1>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-4">
                        @foreach($movie->casts as $cast)
                        <x-movie-card>
                            <x-slot name="image">
                                <img class=""
                                    src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $cast->poster_path }}"
                                    alt="">
                            </x-slot>
                            <span class="text-white">{{ $cast->name }}</span>
                        </x-movie-card>
                        @endforeach
                    </div>
                </div>
                <div class="w-4/12">
                    <h1 class="flex text-white font-bold text-xl">Latest Movies</h1>
                </div>
            </div>
        </section>
    </main>
    @endif
</x-front-layout>