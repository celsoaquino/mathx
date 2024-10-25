<x-layout>
 <x-form action="{{ route('generate') }}" method="POST">
     <x-form-section title="Operações">
         <div class="mt-2">
             <x-checkbox label="Soma" name="sum"/>
         </div>
         <div>
             <x-checkbox label="Subtração" name="subtraction"/>
         </div>
         <div>
             <x-checkbox label="Multiplicação" name="multiplication"/>
         </div>
         <div>
             <x-checkbox label="Divisão" name="division"/>
         </div>

     </x-form-section>
     <x-form-section title="Parcelas">
         <x-input-number label="Minimo" name="number_min" min="1" max="999"/>
         <x-input-number label="Maximo" name="number_max" min="1" max="999"/>
     </x-form-section>
     <x-form-section title="Número de Exercícios">
         <x-input-number label="Número" name="number_exercises" min="5" max="50"/>
         <div class="flex items-end justify-end">
             <button class="rounded-md bg-green-800 py-2 px-4 mt-4 border border-transparent text-center text-sm text-white font-bold transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                     type="submit">
                 Gerar Exercícios
             </button>
         </div>
     </x-form-section>
 </x-form>
</x-layout>
