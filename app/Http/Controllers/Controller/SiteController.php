<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\Models\Producto; // <-- IMPORTANTE: Importar el modelo 
 use App\Models\Provincia;
class SiteController extends Controller 
{ 
    public function inicio() 
    { 
        return view('inicio'); 
    } 
 
    public function productos() 
    { 
        // El controlador le pide los datos al Modelo 
        $productos = Producto::allLocal();  
 
        return view('productos', compact('productos')); 
    } 
 
    public function contacto() 
    { 
        $email = 'contacto@miempresa.com'; 
        return view('contacto', compact('email')); 
    } 

        public function provincias() 
        { 
            $provincias = Provincia::all();  
    
            return view('provincias', compact('provincias')); 
        }

} 