<?php
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location:../index.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>CRUD</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"/>
    <link rel="icon" href="../src/users.png">
  <body>
          <nav class="navbar navbar-dark bg-primary">
              <div class="container">
              <a class="navbar-brand" href="#">
              <img src="../src/1455555019_users-9_icon-icons.com_53249.png" alt="" width="32" height="32" class="d-inline-block align-text-top">
                Admin
              </a>
                  <a class="nav-item nav-link active" href="index.php" style="color: azure">Inicio</a>
                  <a class="nav-item nav-link" href="vista_alumnos.php" style="color: azure">Alumnos</a>
                  <a class="nav-item nav-link" href="vista_cursos.php" style="color: azure">Cursos</a>
                  <a class="nav-item nav-link" href="cerrar.php" style="color: azure">Cerrar Sesion</a>
              </div>
          </nav>

          <div class="container">
    <div class="row">
        <div class="col-md-12">
          <br>
            <div class="row">