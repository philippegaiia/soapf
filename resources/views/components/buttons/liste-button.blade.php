<a {{ $attributes->merge(['href' => '', 'class' => 'inline-flex items-center justify-center px-2 py-2 bg-gray-500  rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400  transition ease-in-out duration-300']) }}>
<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" /></svg>
{{ $slot }}
</a>



