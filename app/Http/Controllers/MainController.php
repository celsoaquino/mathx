<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function generateExercises(Request $request): View
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

        for ($i = 1; $i <= $numberExercises; $i++) {
            $exercises[] = $this->generate($i, $selectedOperations, $min, $max);
        }

        $request->session()->put('exercises', $exercises);

        return view('operations', compact('exercises'));
    }

    public function printExercises()
    {
          if (!session()->has('exercises')) {
              return redirect()->route('home');
          }

          $exercises = session('exercises');

          echo '<pre>';
          echo '<h1>Exercícios de Matemática (' . env('APP_NAME') . ') </h1>';
          echo '<hr>';
          foreach ($exercises as $exercise) {
              echo '<h2><small>' . $exercise['exercise_number']  . ' >> </small>' . $exercise['exercise'] . ' </h2>';
          }
          echo '<hr>';
          echo '<small>Resultados</small><br>';

        foreach ($exercises as $exercise) {
            echo '<small>' . $exercise['exercise_number']  . ' >> ' . $exercise['solution'] . ' </small><br>';
        }

    }

    public function exportExercises()
    {
        if (!session()->has('exercises')) {
            return redirect()->route('home');
        }

        $exercises = session('exercises');

        $filename = 'exercises_' . env('APP_NAME') . '_' . date('YmdHis') . '.txt';

        $content = 'Exercícios de Matemática (' . env('APP_NAME') . ')' . "\n\n";
        foreach ($exercises as $exercise) {
            $content .= $exercise['exercise_number'] . ' > ' . $exercise['exercise'] . "\n";
        }

        $content .= "\n";
        $content .= "Resultados\n" . str_repeat('-', 20) . "\n";
        foreach ($exercises as $exercise) {
            $content .= $exercise['exercise_number'] . ' > ' . $exercise['solution'] . "\n";
        }

        return response($content, 200)
            ->header('Content-Type', 'text/plain')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }

    private function generate($index, $operation, $min, $max): array
    {
        $operation = $operation[array_rand($operation)];
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

        return [
            'operation' => $operation,
            'exercise_number' => str_pad($index, 2, "0", STR_PAD_LEFT),
            'exercise' => $exercise,
            'solution' => "$exercise $solution",
        ];
    }
}
