@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-2 py-1 bg-[#e0e1dd] rounded-lg w-full font-medium leading-5 text-[#1b263b] focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-2 py-1 border-b-2 border-transparent font-medium leading-5 text-[#778da9] hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
