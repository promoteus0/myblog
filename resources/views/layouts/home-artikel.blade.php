
<div class="px-6 py-6 mx-auto bg-white max-w-7xl lg:px-8">
      
  <div class="max-w-2xl mx-auto lg:mx-0">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Welcome To My Blog</h2>
    <p class="mt-2 text-lg leading-8 text-gray-600">Discover more about me </p>
  </div>
  <h2 class="pt-20 font-bold tracking-tight text-gray-900 text-5xlxl sm:text-4xl">My Artikel</h2>
  <div class="grid max-w-2xl grid-cols-1 pt-10 mx-auto mt-10 border-t border-gray-200 gap-x-8 gap-y-16 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    
@foreach ($artikel as $data )
    
    {{-- <article class="flex flex-col items-start justify-between max-w-xl p-5 border border-gray-400 shadow-xl rounded-xl">
      
      <div class="flex items-center text-xs gap-x-4">
        <time datetime="2020-03-16" class="text-gray-500">{{$data->tanggalPost()}}</time>
        <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{$data->categoryName()}}</a>
      </div>

      <div class="relative group">
        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
          <a href="{{ url('/view-artikel/'.$data->slug) }}">
            <span class="absolute inset-0"></span>
            {{ $data->title }}
          </a>
        </h3>
        <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">{{ $data->description }}.</p>
      </div>

      <div class="relative flex items-center mt-8 gap-x-4">
        <img src="{{asset('storage/artikel_image')}}/{{$data->photo}}" alt="{{ $data->photo }}" class="w-10 h-10 rounded-full bg-gray-50">
        <div class="text-sm leading-6">
          <p class="font-semibold text-gray-900">
            <a href="#">
              <span class="absolute inset-0"></span>
              {{$data->user->name}}
            </a>
          </p>
          <p class="text-gray-600">{{$data->user->email}}</p>
        </div>
      </div>
    
    </article> --}}

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
  <a href="#">
      <img class="w-full rounded-t-lg h-60" src="{{asset('storage/artikel_image')}}/{{$data->photo}}" alt="{{ $data->photo }}" />
  </a>
  
  <div class="p-5">
      <a href="{{ url('/view-artikel/'.$data->slug) }}">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->title }}</h5>
      </a>
      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-3">{{ $data->description }}</p>
      <a href="{{ url('/view-artikel/'.$data->slug) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          Read more
           <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
          </svg>
      </a>
      <div class="flex items-center mt-6 text-xs gap-x-4">
        <time datetime="2020-03-16" class="text-gray-500">{{$data->tanggalPost()}}</time>
        <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{$data->categoryName()}}</a>
      </div>
  </div>
</div>

@endforeach
    <!-- More posts... -->
  </div>
</div>