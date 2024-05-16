<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <div class="container">
                    <div class="flex flex-wrap">
                        <div class="self-center w-full px-4 lg:w-1/2">
                            
                            <h1 class="text-base font-semibold text-teal-500 md:text-xl lg:text-2xl">Halo Semua 👋, saya <span class="block text-4xl font-bold text-slate-900 lg:text-5xl">{{$data->name}}</span> </h1>
                            <h2 class="mb-5 text-lg font-medium text-slate-500 lg:text-2xl">Mari belajar pemrograman</h2>
                            <p class="mb-10 font-medium leading-relaxed text-slate-400 lg:text-xl">Belajar pemrograman itu mudah dan menyenangkan bukan. bukan! </p>
                            
                        </div>
                        <div class="self-end w-full px-4 lg:w-1/2 ">
                            <div class="mt-10 lg:mt-9 lg:right-0 ">
                                <img src="https://img.freepik.com/premium-vector/illustration-programmer-working-his-desk_23-2148270201.jpg?w=740" alt="" class="max-w-full mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
           </section>
            </div>
        </div>
    </div>
</x-app-layout>
