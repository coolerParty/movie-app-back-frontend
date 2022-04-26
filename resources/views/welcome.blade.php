<x-front-layout>
    <main class="max-w-6xl mx-auto mt-6 min-h-screen">
        <section
            class="bg-gray-200 dark:bg-gray-900 dark:text-white mt-4 p-2 rounded"
        >
            <div
                class="m-2 p-2 text-2xl font-bold text-indigo-600 dark:text-indigo-300"
            >
                <h1>Movies</h1>
            </div>
            <div
                class="grid grid-cols-2 sm:grid-cols-3 md:grid-cls-4 gap-4 rounded"
            >
                <x-movie-card>
                    <x-slot name="image">
                        <div class="aspect-w-2 aspect-h-3">
                            <img
                                class="object-cover"
                                src="https://cdn.pixabay.com/photo/2022/04/21/22/50/animal-7148487_960_720.jpg"
                                alt=""
                            />
                            <div
                                class="absolute left-0 top-0 h-8 w-12 bg-gray-800 text-blue-400 text-center font-bold"
                            >
                                New
                            </div>
                        </div>
                    </x-slot>
                    <a href="/">
                        <div
                            class="dark:text-white font-bold group-hover:text-blue-400"
                        >
                            Movie Title
                        </div>
                    </a>
                </x-movie-card>
                <x-movie-card>
                    <x-slot name="image">
                        <div class="aspect-w-2 aspect-h-3">
                            <img
                                class="object-cover"
                                src="https://cdn.pixabay.com/photo/2022/04/21/22/50/animal-7148487_960_720.jpg"
                                alt=""
                            />
                            <div
                                class="absolute left-0 top-0 h-8 w-12 bg-gray-800 text-blue-400 text-center font-bold"
                            >
                                New
                            </div>
                        </div>
                    </x-slot>
                    <a href="/">
                        <div
                            class="dark:text-white font-bold group-hover:text-blue-400"
                        >
                            Movie Title
                        </div>
                    </a>
                </x-movie-card>
                <x-movie-card>
                    <x-slot name="image">
                        <div class="aspect-w-2 aspect-h-3">
                            <img
                                class="object-cover"
                                src="https://cdn.pixabay.com/photo/2022/04/21/22/50/animal-7148487_960_720.jpg"
                                alt=""
                            />
                            <div
                                class="absolute left-0 top-0 h-8 w-12 bg-gray-800 text-blue-400 text-center font-bold"
                            >
                                New
                            </div>
                        </div>
                    </x-slot>
                    <a href="/">
                        <div
                            class="dark:text-white font-bold group-hover:text-blue-400"
                        >
                            Movie Title
                        </div>
                    </a>
                </x-movie-card>
                <x-movie-card>
                    <x-slot name="image">
                        <div class="aspect-w-2 aspect-h-3">
                            <img
                                class="object-cover"
                                src="https://cdn.pixabay.com/photo/2022/04/21/22/50/animal-7148487_960_720.jpg"
                                alt=""
                            />
                            <div
                                class="absolute left-0 top-0 h-8 w-12 bg-gray-800 text-blue-400 text-center font-bold"
                            >
                                New
                            </div>
                        </div>
                    </x-slot>
                    <a href="/">
                        <div
                            class="dark:text-white font-bold group-hover:text-blue-400"
                        >
                            Movie Title
                        </div>
                    </a>
                </x-movie-card>
                <x-movie-card>
                    <x-slot name="image">
                        <div class="aspect-w-2 aspect-h-3">
                            <img
                                class="object-cover"
                                src="https://cdn.pixabay.com/photo/2022/04/21/22/50/animal-7148487_960_720.jpg"
                                alt=""
                            />
                            <div
                                class="absolute left-0 top-0 h-8 w-12 bg-gray-800 text-blue-400 text-center font-bold"
                            >
                                New
                            </div>
                        </div>
                    </x-slot>
                    <a href="/">
                        <div
                            class="dark:text-white font-bold group-hover:text-blue-400"
                        >
                            Movie Title
                        </div>
                    </a>
                </x-movie-card>
                <x-movie-card>
                    <x-slot name="image">
                        <div class="aspect-w-2 aspect-h-3">
                            <img
                                class="object-cover"
                                src="https://cdn.pixabay.com/photo/2022/04/21/22/50/animal-7148487_960_720.jpg"
                                alt=""
                            />
                            <div
                                class="absolute left-0 top-0 h-8 w-12 bg-gray-800 text-blue-400 text-center font-bold"
                            >
                                New
                            </div>
                        </div>
                    </x-slot>
                    <a href="/">
                        <div
                            class="dark:text-white font-bold group-hover:text-blue-400"
                        >
                            Movie Title
                        </div>
                    </a>
                </x-movie-card>
            </div>
        </section>
        <section
            class="bg-gray-200 dark:bg-gray-900 dark:text-white mt-4 p-2 rounded"
        >
            <div
                class="m-2 p-2 text-2xl font-bold text-indigo-600 dark:text-indigo-300"
            >
                <h1>Episodes</h1>
            </div>
            <div
                class="grid grid-cols-2 sm:grid-cols-3 md:grid-cls-4 gap-4 rounded"
            >
                Episodes Cards
            </div>
        </section>
        <section
            class="bg-gray-200 dark:bg-gray-900 dark:text-white mt-4 p-2 rounded"
        >
            <div
                class="m-2 p-2 text-2xl font-bold text-indigo-600 dark:text-indigo-300"
            >
                <h1>Series</h1>
            </div>
            <div
                class="grid grid-cols-2 sm:grid-cols-3 md:grid-cls-4 gap-4 rounded"
            >
                Serie Cards
            </div>
        </section>
    </main>
</x-front-layout>
