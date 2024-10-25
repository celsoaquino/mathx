@props(['title'])

<section class="flex max-w-xl flex-col items-center justify-between" >
    <div class="group relative">
        <h3 class="text-lg font-semibold leading-6 text-green-400">{{ $title }}</h3>
       {{ $slot }}
    </div>
</section>
