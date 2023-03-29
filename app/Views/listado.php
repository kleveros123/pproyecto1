<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>CRUD con Codeigniter</h1>
      <div class="row">
        <div class="col-sm-6">
          <form action="<?= base_url().'crear' ?>" method="post">
          
          <div class="form-group">
            <label for="nombre_libro">Nombre del Libro</label>
            <input type="text" name="nombre_libro" id="nombre_libro" class="form-control" placeholder="">
          </div>
          
          <div class="form-group">
            <label for="imagen_libro">Imagen del Libro</label>
            <input type="text" name="imagen_libro" id="imagen_libro" class="form-control" placeholder="">
          </div>
              
          <div class="form-group">
              <label for="id_categoria">Categoria</label>
              <select class="form-control" name="id_categoria" id="id_categoria">
                <option value="">Seleccione</option>
                <?php foreach($categorias as $categoria): ?>
                <option value="<?= $categoria->id_categoria ?>"><?= $categoria->descripcion_categoria ?></option>
                <?php endforeach; ?>
              </select>
          </div>

          <div class="form-group">

              <label for="id_autor">Autores</label>
              <select class="form-control" name="id_autor" id="id_autor">
                <option value="">Seleccione</option>
                <?php foreach($autores as $autor): ?>
                  <option value="<?= $autor->id_autor ?>"><?= $autor->nombre_autor ?></option>
                  <?php endforeach; ?>
                </select>
          </div>
                
          <div class="form-group">
            <button class='btn btn-primary'>Guardar</button>
          </div>  
        </div>
        </form>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-12">
          <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
              <tr>
                <th>Id</th>
                <th>Libro</th>
                <th>Imagen</th>
                <th>Categoria</th>
                <th>Autor</th>
                <th>Acciones</th>
              </tr>
              </thead>
              <tbody>
                <?php foreach ($libros as $libro ): ?>
                <tr>
                  <td>
                    <?= $libro->id_libro ?>
                  </td>
                  <td>
                    <?= $libro->nombre_libro ?>
                  </td>
                  <td>
                    <?= $libro->imagen_libro ?>
                  </td>
                  <td>
                    <?=  $libro->descripcion_categoria ?>
                  </td>
                  <td>
                    <?= $libro->nombre_autor ?>
                  </td>
                  <td>
                    <a href="<?= base_url().'modificar/'.$libro->id_libro ?>" class="btn btn-warning">Modificar</a>
                    <a href="<?= base_url().'eliminar/'.$libro->id_libro ?>" class="btn btn-danger">Eliminar</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>