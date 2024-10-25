<x-layout>
 <x-form>
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
         <x-input-text label="Minimo" name="min"/>
         <x-input-text label="Maximo" name="max"/>
     </x-form-section>
     <x-form-section title="Número de exerćicios">
         <x-input-text label="Número" name="numero"/>
         <div class="flex items-end justify-end">
             <button data-ripple-light="true"
                     class="rounded-md bg-green-800 py-2 px-4 mt-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                     type="button">
                 Gerar Exercícios
             </button>
         </div>
     </x-form-section>
 </x-form>
</x-layout>
