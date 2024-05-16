
<div class="px-6 mx-auto max-w-7xl lg:px-8 ">

  <section class="bg-white dark:bg-gray-900">
    <div class="flex items-center max-w-screen-xl gap-16 px-4 py-8 mx-auto lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-6 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white"> {{ $aktifitas->title }}</h2>
            <div class="flex items-center text-xs gap-x-4">
                <time datetime="2020-03-16" class="text-gray-500">{{$aktifitas->tanggalPost()}}</time>
                <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{$aktifitas->categoryName()}}</a>
              </div>
            <div class="flex justify-center">
                <div class="flex justify-end w-full m-6 h-80">
                    <img class="w-full rounded-lg" src="{{asset('storage/image')}}/{{$aktifitas->photo}}" alt="{{ $aktifitas->photo }}">
                </div>
            </div>
            
            
            <p class="mb-4">{{ $aktifitas->description }}</p>
        </div>
        
    </div>
 </section>
    
  
</div>