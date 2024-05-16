<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("List Artikel ") }}
                    <form method="post" enctype="multipart/form-data" action="{{ route('artikel.store') }}" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="block w-full mt-1" :value="old('title')" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-area id="description" name="description" type="text" class="block w-full mt-1" :value="old('description')" required autofocus autocomplete="description" />
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>
                        <div>
                            <x-input-label for="photo" :value="__('Photo')" />
                            <x-text-input id="photo" name="photo" type="file" class="block w-full mt-1" :value="old('photo')"  autofocus autocomplete="photo" />
                            <x-input-error class="mt-2" :messages="$errors->get('photo')" />
                        </div>
                        
                        <div>
                            <x-input-label for="category" :value="__('Category')" />
                            <x-select-input id="category" name="category" class="block w-full mt-1" :value="old('category')" :data="$category" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('category')" />
                        </div>
                        <div>
                            <x-input-label for="setatus" :value="__('Setatus')" />
                            <x-select-input id="setatus" name="setatus" class="block w-full mt-1" :value="old('setatus')" :data="$setatus" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('setatus')" />
                        </div>
                        
                
                        <div class="flex items-center justify-center gap-4">
                            <x-primary-button>{{ __('Tambah') }}</x-primary-button>
                        </div>
                    </form>
                </div>

            </div>
            
        </div>
        
    </div>
    
</x-app-layout>
