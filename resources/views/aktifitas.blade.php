<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Aktifitas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("List Aktifitas ") }}
                    <div class="pt-5">

                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                              <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                  <table
                                    class="min-w-full text-sm font-light text-left text-surface dark:text-white">
                                    <thead
                                      class="font-medium bg-white border-b border-neutral-200 dark:border-white/10 dark:bg-body-dark">
                                      <tr>
                                        <th scope="col" class="px-6 py-4">ID</th>
                                        <th scope="col" class="px-6 py-4">TITLE</th>
                                        <th scope="col" class="px-6 py-4">DESCRIPTION</th>
                                        <th scope="col" class="px-6 py-4">PHOTO</th>
                                        <th scope="col" class="px-6 py-4">SLUG</th>
                                        <th scope="col" class="px-6 py-4">CATEGORY</th>
                                        <th scope="col" class="px-6 py-4">ACTION</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($aktifitas as $data)
                                          
                                      <tr
                                        class="border-b border-neutral-200 bg-black/[0.02] dark:border-white/10 ">
                                        <td class="px-6 py-4 font-medium whitespace-nowrap">{{ $data->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $data->title }}</td>
                                        <td class="px-6 py-4 text-wrap">{{ $data->description }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap"><img src="{{asset('storage/image')}}/{{$data->photo}}" alt="{{ $data->photo }}" class="rounded-lg w-50 h-50 bg-gray-50"></td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $data->slug }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $data->categoryName() }}</td>
                                        <td class="">
                                            <div class="flex gap-1 px-6 py-4">
                                                <a href="{{ route('edit.aktifitas', ['id' => $data->id]) }}"
                                                    class="px-1 py-1 bg-orange-400 rounded-md place-items-center ">Edit</a> 
                                                    <form method="POST" action="{{"delete-aktifitas/$data->id"}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                    class="px-1 py-1 bg-red-600 rounded-md">Delete</button>
                                                    </form>
                                            </div>
                                            
                                        </td>
                                      </tr>
                                      
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    
                </div>
                <div class="flex items-center justify-center pb-3 ">
                    <x-primary-link href="{{route('aktifitas.baru')}}">Tambah Aktifitas</x-primary-link>
                </div>
            </div>
            
        </div>
        
    </div>
    
</x-app-layout>
