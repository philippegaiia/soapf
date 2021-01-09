@props([
    'leadingAddOn' => false,
])

<div class="flex rounded-md shadow-sm">
    @if ($leadingAddOn)
        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
            {{ $leadingAddOn }}
        </span>
    @endif

    <input {{ $attributes->merge(['class' => 'flex-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-100 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' . ($leadingAddOn ? ' rounded-none rounded-r-md' : '')]) }}/>
</div>



{{-- flex-1 border-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 --}}
