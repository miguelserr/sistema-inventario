<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        // Lógica para mostrar el formulario de edición del perfil
        return view('profile.edit'); // Asegúrate de tener una vista llamada edit.blade.php
    }
}


