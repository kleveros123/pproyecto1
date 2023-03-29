<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LibrosModel;

class LibrosController extends BaseController
{
    public function index()
    {
        $libros = new LibrosModel();
        $builder = $libros->select('*');
        $builder->join('categoria','categoria.id_categoria = libros.id_categoria');
        $builder->join('autores','autores.id_autor = libros.id_autor');
        $query = $builder->get();
        $data['libros'] = $query->getResult();
        return view('listado',$data);
        
    }

    public function crear()
    {


    }

    public function actualizar()
    {

    }

    public function obtenerNombre()
    {

    }
}
