@props(['label', 'name'])
@php
    $defaults = [
       'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6',
        'value' => old($name)
]
@endphp
<div :$label :$name>
    <label for="{{ $name }}" class="block mt-2 text-sm font-medium leading-6 text-red-100">{{ $label }}</label>
    <div class="relative mt-2 rounded-md shadow-sm">
        <input {{ $attributes($defaults) }}>
    </div>
</div>
