<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName(){
        return view('welcome', ['name' => 'Edgar']);
    }

    public function getSuma($x, $y){
        // $x = 10;
        // $y = 20;
        return 'La suma es: ' . $this->sumar($x, $y);
    }

    public function sumar($x, $y){
        return $x + $y;
    }

    public function getResta($x, $y){
        // $x = 10;
        // $y = 20;
        return 'La resta es: ' . $this->restar($x, $y);
    }

    public function restar($x, $y){
        return $x - $y;
    }

    public function getMultiplica($x, $y){
        // $x = 10;
        // $y = 20;
        return 'La multilpicación es: ' . $this->multiplicar($x, $y);
    }

    public function multiplicar($x, $y){
        return $x * $y;
    }

    public function getDivide($x, $y){
        if($y != 0){
            return 'La multilpicación es: ' . $this->dividir($x, $y);
        } else{
            return 'No se puede dividir por cero';
        }
    }

    public function dividir($x, $y){
        return $x / $y;
    }
}
