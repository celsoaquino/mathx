<form {{ $attributes(["class" => "bg-gray-800", "method" => "GET"]) }}>
    @if($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif
    <div class="mx-auto max-w-7xl px-6">
        <div class="mx-auto max-w-xl">
            <p class="mt-2 text-lg leading-8 text-white text-center">Selecione as opções para gerar exercícios de
                matemática</p>
        </div>
        <div
            class="mx-auto mt-10 grid col-auto max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            {{ $slot }}
        </div>
    </div>
</form>

