<x-layout>
    <div class="bg-gray-800">
        <div class="mx-auto max-w-7xl ">
            <div class="mx-auto mt-10 gap-x-8 gap-y-16 border-t border-gray-200  ">


                <div id="main" class="flex flex-wrap  justify-start mt-6">
                    @foreach($exercises as $exercise)
                        <div class="flex-none m-4">
                            <span
                                class="border rounded border-green-500 p-2 text-red-100 font-bold">{{ str_pad($exercise['exercise_number'], 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-red-300">{{ $exercise['exercise'] }}</span>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="mx-auto mt-6 gap-x-8 gap-y-16 border-t border-gray-200  ">
                <div class="flex justify-between">
                    <button
                        class="rounded-md bg-green-800 py-2 px-4 mt-4 border border-transparent text-center text-sm text-white font-bold transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                        type="submit">
                        Voltar
                    </button>
                    <div>
                        <button
                            class="rounded-md bg-green-800 py-2 px-4 mt-4 border border-transparent text-center text-sm text-white font-bold transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                            type="submit">
                            Baixar Exercícios
                        </button>
                        <button
                            class="rounded-md bg-green-800 py-2 px-4 mt-4 border border-transparent text-center text-sm text-white font-bold transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                            type="submit">
                            Imprimir Exercícios
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
