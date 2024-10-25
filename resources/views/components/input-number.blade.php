@props(['label', 'name'])
@php
    $defaults = [
       'type' => 'number',
        'id' => $name,
        'name' => $name,
        'class' => "bg-gray-50 py-2 pl-4 pr-2 w-80 border border-green-300 text-green-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block  dark:bg-gray-700 dark:border-green-600 dark:placeholder-green-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500",
        //'class' => 'rounded-md border-0 py-1.5 pl-2 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6',
        'value' => old($name)
]
@endphp
<div >
    <label for="{{ $name }}" class="block mt-2 text-sm font-medium leading-6 text-red-100">{{ $label }}</label>
    <div class="relative mt-2 rounded-md shadow-sm">
        <input {{ $attributes($defaults) }}>
    </div>
    <x-error :error="$errors->first($name)"/>
</div>
