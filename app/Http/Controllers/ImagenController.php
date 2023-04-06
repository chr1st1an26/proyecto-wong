<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ImagenController extends Controller
{
    public function store(Request $_request){
        $imagen = $_request -> file('file');
        $nombreImagen = Str::uuid().".".$imagen->extension();
        $imagenServidor = Image::make($imagen);
        $imagenServidor->fit(1000, 1000);
        $imagenPath = public_path('upload')."/".$nombreImagen;
        $imagenServidor->save($imagenPath);
        return response()->json(['imagen'=>"$nombreImagen"]);
    }
}
