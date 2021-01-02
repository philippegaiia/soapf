{{-- <div class="max-w-7xl py-4 px-4 overflow-x-auto whitespace-no-wrap "> --}}
    {{-- <div class="inline-flex max-w-xl w-full bg-green-50 shadow-md rounded-lg overflow-hidden" >
        <div class="flex justify-center items-center w-12 bg-green-400">
            <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
            </svg>
        </div>
        <div class="-mx-3 py-2 px-4 ">
            <div class="mx-3 ">
                {{ $slot }}
            </div>
        </div>
    </div> --}}
{{-- </div> --}}
<div x-data="{animate: true}">
    <div @click="animate = (animate) ? true : false" class="inline-flex max-w-xl w-full bg-green-50 shadow-md rounded-lg overflow-hidden">



            <div class="inline-flex max-w-xl w-full bg-green-50 shadow-md rounded-lg overflow-hidden"
                    x-show="animate"
                    x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-1000"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90">
                <div class="flex justify-center items-center w-12 bg-green-400">
                    <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
                    </svg>
                </div>
                <div class="-mx-3 py-2 px-4 ">
                    <div class="mx-3 ">
                        {{ $slot }}
                    </div>
                </div>
            </div>

    </div>
</div>

