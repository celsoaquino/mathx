<x-layout>
    <div class="bg-gray-800">
        <div class="mx-auto max-w-7xl ">
            <div class="mx-auto mt-10 gap-x-8 gap-y-16 border-t border-gray-200  ">


                <div id="main" class="flex flex-wrap  justify-start mt-6">
                    @foreach($exercises as $exercise)
                        <div class="w-32 h-4 m-4">
                            <span
                                class="border rounded border-green-500 p-2 mr-1 text-red-100 font-bold">{{ $exercise['exercise_number']}}</span>
                            <span class="text-red-300 ">{{ $exercise['exercise'] }}</span>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="mx-auto mt-6 gap-x-8 gap-y-16 border-t border-gray-200  ">
                <div class="flex justify-between">
                    <a
                        class="rounded-md bg-green-800 py-2 px-4 mt-4 border border-transparent text-center inline-flex items-center text-sm text-white font-bold transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                        href="{{ route('home') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 me-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                        </svg>

                        Voltar
                    </a>
                    <div>
                        <a href="{{ route('export') }}"
                            class="rounded-md bg-green-800 py-2 px-4 mt-4 border border-transparent text-center inline-flex items-center text-sm text-white font-bold transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 me-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                            </svg>
                            Baixar
                        </a>
                        <a href="{{ route('print') }}"
                            class="rounded-md bg-green-800 py-2 px-4 mt-4 border border-transparent text-center inline-flex items-center text-sm text-white font-bold transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 me-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                            </svg>

                            Imprimir
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
