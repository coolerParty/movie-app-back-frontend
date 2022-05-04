<x-front-layout>
    @if(!empty($season))
    <main class="my-2">
        <section class="bg-gradient-to-r from-indigo-700 to-trannsparent">
            <div class="max-w-6xl mx-auto m-4 p-2">
                <div class="flex">
                    <div class="w-3/12">
                        <div class="w-full">
                            <img class="w-full h-full rounded"
                                src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $season->poster_path }}"
                                alt="">
                        </div>
                    </div>
                    <div class="w-8/12">
                        <div class="m-4 p-2">
                            <h1 class="flex text-white font-bold text-4xl">{{ $season->name }}</h1>
                            <div class="flex p-3 text-white space-x-4">
                                <span>Serie: <strong>{{ $serie->name }}</strong></span>
                                <span class="">{{ $serie->created_year }}</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="max-w-6xl mx-auto bg-gray-200 dark:bg-gray-900 p-2 rounded">
            <div class="flex justify-between">
                <div class="w-7/12">
                    <h1 class="flex text-white font-bold text-xl">Episodes</h1>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mt-4">
                        @foreach($season->episodes as $episode)
                        <x-movie-card>
                            <x-slot name="image">
                                <a href="{{ route('episodes.show', ['episode'=>$episode, 'slug'=> $episode->slug]) }}">
                                    <img class=""
                                        src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $season->poster_path }}"
                                        alt="">
                                    <div
                                        class="absolute z-10 left-1 top-1 h-6 w-6 bg-gray-800 group-hover:bg-gray-700 text-blue-400 text-center font-bold rounded">
                                        {{ $episode->episode_number }}
                                    </div>
                                </a>
                            </x-slot>
                            <a href="{{ route('episodes.show', ['episode' => $episode, 'slug'=>  $episode->slug]) }}">
                                <span class="text-white">{{ $episode->name }}</span>
                            </a>
                        </x-movie-card>
                        @endforeach
                    </div>
                </div>
                <div class="w-4/12">
                    <h1 class="flex text-white font-bold text-xl">Latest Seasons</h1>
                    <div class="grid grid-cols-3 gap-2">
                        @if(!empty($latests))
                        @foreach($latests as $lseason)
                        <a href="{{ route('series.show',[$lseason->serie->slug, $lseason->slug]) }}">
                            <img class="w-full h-full rounded-lg"
                                src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $lseason->poster_path }}"
                                alt="">
                        </a>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endif
</x-front-layout>