<?php
include ("conexion.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM tabla WHERE  id =$id";
    $result=mysqli_query($conex, $query);

    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $titulo = $row['titulo'];
        $descripcion = $row['descripcion'];
    }
    
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    $query="UPDATE tabla set titulo = '$titulo', descripcion = '$descripcion' WHERE id = $id";
    mysqli_query($conex, $query);
    $_SESSION['message']='se actualizo ';
    $_SESSION['message_type']='warning';

    header("Location: index.php");

}   

?>
<?php include("plantilla/cabeza.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                  <div class="form group">
                    <input type="text" name = "titulo" value="<?php echo $titulo; ?>" class="from-control" placeholder="titulo">
                  </div> 
                  <div>
                    <textarea name="descripcion" rows="2" class="form-control" placeholder="descripcion"><?php echo $descripcion;?></textarea>
                  </div>

                  <button class="btn btn-success" name="update">actualizar</button>
                </form>

            </div>
        </div>
    </div>
</div>
<?php include("plantilla/pie.php")?>