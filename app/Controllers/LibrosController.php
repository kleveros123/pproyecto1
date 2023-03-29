<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LibrosModel;
use App\Models\CategoriasModel;
use App\Models\AutoresModel;

class LibrosController extends BaseController
{
    public function index()
    {
        $categoria = new CategoriasModel();
        $builder1 = $categoria->get();
        
        $autores = new AutoresModel();
        $builder2 = $autores->get();

        $libros = new LibrosModel();
        $builder = $libros->select('*');
        $builder->join('categoria','categoria.id_categoria = libros.id_categoria');
        $builder->join('autores','autores.id_autor = libros.id_autor');
        $builder->orderBy('libros.id_libro','ASC');
        $query = $builder->get();

        $data['libros'] = $query->getResult();
        $data['categorias'] = $builder1->getResult();
        $data['autores'] = $builder2->getResult();
        return view('listado',$data);
        
    }

    public function crear()
    {
        $libro = new LibrosModel();
        $libro->insert($_POST);
        return $this->index();

    }

    public function actualizar()
    {

    }

    public function obtenerNombre()
    {

    }
}
