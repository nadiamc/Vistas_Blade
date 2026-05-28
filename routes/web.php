<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/productos', function () {

    $productos = [
        [
            'nombre' => 'Yerba mate',
            'precio' => 2500,
            'stock' => 15,
        ],
        [
            'nombre' => 'Te verde',
            'precio' => 1800,
            'stock' => 8,
        ],
        [
            'nombre' => 'Miel pura',
            'precio' => 3200,
            'stock' => 0,
        ],
        [
            'nombre' => 'Café tostado',
            'precio' => 3500,
            'stock' => 10,
   ],
    ];

    return view('productos', [
        'productos' => $productos,
    ]);
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/contacto', function () {
    $email = 'contacto@miempresa.com';

    return view('contacto', [
        'email' => $email,
    ]);
});
//se hizo Inicio. 
// Productos, lista de datos.
//  Contacto, email.