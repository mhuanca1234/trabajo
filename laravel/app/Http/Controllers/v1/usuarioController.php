<?php
 
namespace App\Http\Controllers\v1;
 

use App\Models\usuario;
use App\Http\Controllers\Controller;


 
class usuarioController extends Controller
{
    

    public function getusuario()
    {
        $reponse_local = new \stdClass();

        $reponse_local->success=true;
        $reponse_local->data=usuario::All();

       return response()->json($reponse_local,200);
    }
}