
<?php
    include "./header.php";
    include "./menu.php";
    include "../clases/Conexion.php";
    $conexion = new Conexion();
    $datos = $conexion->Conectar();
    $idRecibido = 1;
    $sql = "SELECT * FROM t_cat_pasivos";
    $result = mysqli_query($datos, $sql);
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1>Pasivos</h1>
                <form action="../procesos/gastos/gastos.php" method="POST">
                    <label for="">Monto</label>
                    <input type="text" class="form-control" id="" name="monto_pasivos" placeholder="Escribe el monto a gastar" required>
                    <label for="">Tipo de pasivo</label>
                    <select name="tipo_pasivos" id="" class="form-select">
                        <?php
                            while($ver = mysqli_fetch_array($result)){ 
                                if($ver['id_cat_pasivos'] == $idRecibido) {
                        ?>
                    <option selected value="<?php echo $ver['id_cat_pasivos']?>">
                        <?php echo $ver['nombre_pasivos'] ?>
                    </option>
                        <?php 
                            } else {
                        ?>
                    <option value="<?php echo $ver['id_cat_pasivos']?>">
                        <?php echo $ver['nombre_pasivos'] ?>
                    </option>
                        <?php             
                            }
                        ?>
                        <?php 
                            } 
                        ?>
                    </select>
                    <button class="btn btn-primary mt-4">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
    include "./footer.php";
?>