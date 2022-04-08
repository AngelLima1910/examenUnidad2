
<?php
    include "./header.php";
    include "./menu.php";
    include "../clases/Conexion.php";
    $conexion = new Conexion();
    $datos = $conexion->Conectar();
    $idRecibido = 1;
    $sql = "SELECT * FROM t_cat_activos";
    $result = mysqli_query($datos, $sql);
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1>Activos</h1>
                <div class="row">
                    <div class="col">
                        <form action="../procesos/gastos/ganancia.php" method="POST">
                            <label for="">Monto</label>
                            <input type="text" class="form-control" id="" name="monto_activos" placeholder="Escribe el monto a agregar" required>
                            <label for="">Tipo de activo</label>
                            <select name="tipo_activos" id="" class="form-select" required>
                                <?php
                                    while($ver = mysqli_fetch_array($result)){ 
                                        if($ver['id_cat_activos'] == $idRecibido) {
                                ?>
                                <option selected value="<?php echo $ver['id_cat_activos']?>">
                                    <?php echo $ver['nombre_activos'] ?>
                                </option>
                                <?php 
                                    } else {
                                ?>
                                <option value="<?php echo $ver['id_cat_activos']?>">
                                    <?php echo $ver['nombre_activos'] ?>
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
    </div>
</div>


<?php
    include "./footer.php";
?>