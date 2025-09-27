<?php 
namespace App\Controllers;

require __DIR__ ."/../models/contacto.php";

use App\Models\Contacto;

class ContactosController
{

    public function queryAllContactos()
    {
        $contacto = new Contacto();
        return $contacto -> all();
    }
    
    public function saveNewContacto($request){
        if (empty($request['nombre'])) {
            return false;
        }
        $contacto = new Contacto();
        $contacto -> set('nombre', $request['nombre']);
        $contacto -> set('telefono', $request['telefono']);
        $contacto -> set('email', $request['email']);
        return $contacto->insert();
    }

       public function updateContacto($request){
        if (empty($request['nombre']) || empty($request['id'])) {
            return false;
        }
        $contacto = new Contacto();
        $contacto -> set('id', $request['id']);
        $contacto -> set('nombre', $request['nombre']);
        $contacto -> set('telefono', $request['telefono']);
        $contacto -> set('email', $request['email']);
        return $contacto->update(); // Cambiado de insert() a update()
    }

}

?>