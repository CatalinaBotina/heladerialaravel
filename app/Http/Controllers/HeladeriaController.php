<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeladeriaController extends Controller
{
    public function index()
    {
        $helados = collect([
            (object) [
                'nombre' => 'Helado de Mora',
                'descripcion' => 'Cremoso helado artesanal preparado con moras frescas de la región.',
                'precio' => 6500,
                'imagen' => 'Mora.jpg',
                'disponible' => true,
            ],
            (object) [
                'nombre' => 'Helado de Limón',
                'descripcion' => 'Refrescante helado cítrico ideal para cualquier momento del día.',
                'precio' => 6000,
                'imagen' => 'limon.jpg',
                'disponible' => true,
            ],
            (object) [
                'nombre' => 'Especial de Diciembre',
                'descripcion' => 'Combinación festiva con frutos rojos, crema y chispas dulces.',
                'precio' => 8500,
                'imagen' => 'diciembre.jpg',
                'disponible' => true,
            ],
            (object) [
                'nombre' => 'Helado Mora Azul',
                'descripcion' => 'Sabor intenso a arándanos y mora azul con textura suave.',
                'precio' => 7000,
                'imagen' => 'heladodemoraazul.jpg',
                'disponible' => false,
            ],
        ]);

        return view('heladeria', compact('helados'));
    }
}