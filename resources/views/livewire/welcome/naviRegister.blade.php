<div class="z-10 p-6 sm:fixed sm:top-0 sm:right-0 text-end ">
   
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="font-semibold text-gray-600 ms-4 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
        @endif

</div>

