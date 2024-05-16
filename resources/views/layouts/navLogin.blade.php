

<div class="flex justify-end p-10 text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px">
        @if (Route::has('login'))
        <li class="me-2">
            <a href="{{ url('/') }}" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Aktifitas</a>
        </li>
        <li class="me-2">
            <a href="{{ url('/home-artikel') }}" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Artikel</a>
        </li>
        @auth
            @else
            <li class="me-2">
                <a href="{{ route('login') }}" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Log In</a>
            </li>
            @if (Route::has('register'))
            <li class="me-2">
                <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Sign Up</a>
            </li>
            @endif
        @endauth
        
        @endif
    </ul>
</div>



{{-- <div class="relative flex justify-end p-10 ">
   <div class="">
    <ul class="flex gap-3">
        @if (Route::has('login'))
        <li>
            <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Aktifitas</a>
        </li>
        <li>
            <a href="{{ url('/home-artikel') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Artikel</a>
        </li>
        <li>
            @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
     
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        <li>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
    
        </li>    
        @endif
        </li>
       
    
    
   </div>
    
</div> --}}
{{-- <div class="bg-center flexbg-gray-100 sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    
    <div class="flex justify-center p-6 sm:fixed sm:top-0 sm:right-0">
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
    </div>
</div> --}}

