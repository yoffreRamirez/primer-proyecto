<?php include("conexion.php")?>
<?php include("plantilla/cabeza.php")?>
<div class="container p-4">

<div class="row">
    <div class="col-md-4">
        <?php if (isset($_SESSION['message'])) {?>
           <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
           <?=$_SESSION['message']?>
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
        
        <?php session_unset();
    }?>
        <div class="card card-body">       

        <form action="guardar.php" method="POST" >
            <div class="form-group">
                <input type="text" name="titulo" class="form-control" placeholder="Ingrese titulo" autofocus>
            </div><br>
            <div class="form-group">
                <textarea name="descripcion" rows="2" class="form-control" placeholder="Ingrese Descripcion "></textarea>
            </div><br>
            <input type= "submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
        </form>
        </div>
    </div>

    <div class="col-md-8">
<table class ="table table _bordered">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Create-at</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query ="SELECT * FROM tabla";
        $result=mysqli_query($conex, $query);
        while ($row=mysqli_fetch_array($result)) { ?>
           <tr>
            <td><?php  echo $row['titulo']?></td>
            <td><?php  echo $row['descripcion']?></td>
            <td><?php  echo $row['creat_at']?></td>
            <td><a href="edit.php?id=<?php echo $row['id']?>"><i class="fa fa-pencil" style="font-size:28px;color:black"></i></a></td>
            <td><a href="borrar.php?id=<?php echo $row['id']?>"><i class="fa fa-trash-o" style="font-size:28px;color:red"></i></a></td>
           </tr>
        
        <?php } ?>
    </tbody>
</table>

    </div>
</div>
</div>
<?php include("plantilla/pie.php")?>
