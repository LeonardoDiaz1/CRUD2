<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/cursos.php'); ?>

<br>
<div class="row">
    <div class="col-md-5">
        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    <b><center>Cursos</center></b>
                </div>
        <div class="card-body">
            <div class="mb-3 d-none">
                <label for="" class="form-label">ID</label>
                <input type="text" value="<?php echo $id; ?>" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID">
            </div>
            <div class="mb-3">
                <label for="nombre_curso" class="form-label">Nombre</label>
                <input type="text" required value="<?php echo $nombre_curso; ?>" class="form-control" name="nombre_curso" id="nombre_curso" aria-describedby="helpId" pattern="[a-z, A-Z]*" placeholder="Nombre del Curso">
            </div>

            <center><div class="d-grid gap-3 d-md-block" role="group" aria-label="">
                <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                <button type="submit" name="accion" value="editar" class="btn btn-warning">Editar</button>
                <button type="submit" name="accion" value="borrar" class="btn btn-danger">Borrar</button>
            </div></center>
        </div>
    </div>
    </form>
</div>

<div class="col-md-7">
    <table class="table table-bordered border-dark">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre del Curso</th>
                <th>
                  <center> Acciones </center> 
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaCursos as $cusrso){?>
                <tr>
                    <td> <?php echo $cusrso['id']; ?> </td>
                    <td> <?php echo $cusrso['nombre_curso']; ?> </td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo $cusrso['id']; ?>"/>
                            <center><input type="submit" value="Seleccionar" name="accion" class="btn btn-primary"></center>
                        </form>
                    </td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
</div>

<?php include('../templates/pie.php'); ?>