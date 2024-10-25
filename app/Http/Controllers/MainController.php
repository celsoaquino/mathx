<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function generateExercises(Request $request)
    {
        $request->validate([
            'sum' => 'required_without_all:subtraction,multiplication,division',
            'subtraction' => 'required_without_all:sum,multiplication,division',
            'multiplication' => 'required_without_all:sum,division,subtraction',
            'division' => 'required_without_all:sum,multiplication,subtraction',
            'number_min' => 'required|integer|min:1|max:999|lt:number_max',
            'number_max' => 'required|integer|min:1|max:999',
            'number_exercises' => 'required|integer|min:5|max:50'
        ]);

        $operations = [
            'sum' => $request->boolean('sum'),
            'subtraction' => $request->boolean('subtraction'),
            'multiplication' => $request->boolean('multiplication'),
            'division' => $request->boolean('division')
        ];

        $selectedOperations = array_keys(array_filter($operations));

        $min = $request->number_min;
        $max = $request->number_max;

        $numberExercises = $request->number_exercises;

        for ($i = 0; $i < $numberExercises; $i++) {
            $operation = $selectedOperations[array_rand($selectedOperations)];
            $num1 = rand($min, $max);
            $num2 = rand($min, $max);

            $exercise = '';
            $solution = '';

            switch ($operation) {
                case 'sum':
                    $exercise = "$num1 + $num2 = ";
                    $solution = $num1 + $num2;
                    break;
                case 'subtraction':
                    $exercise = "$num1 - $num2 = ";
                    $solution = $num1 - $num2;
                    break;
                case 'multiplication':
                    $exercise = "$num1 x $num2 = ";
                    $solution = $num1 * $num2;
                    break;
                case 'division':
                    $exercise = "$num1 : $num2 = ";
                    $solution = $num1 / $num2;
                    break;
            }

            if (is_float($solution)) {
                $solution = round($solution, 2);
            }

            $exercises[] = [
                'operation' => $operation,
                'exercise_number' => 'index',
                'exercise' => $exercise,
                'solution' => "$exercise $solution",
            ];
        }
        dd($exercises);
    }

    public function printExercises()
    {

    }

    public function exportExercises()
    {

    }
}
