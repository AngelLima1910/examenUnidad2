<?php
    include "./header.php";
    include "./menu.php";
    include "../clases/Conexion.php";
    include "../clases/Gastos.php";
    $Gastos = new Gasto();
    $con = new Conexion();
    $conexion = $con->Conectar();
    $sumaActivo = "SELECT sum(monto_activos) as activo FROM t_activos";
    $resultadoActivo = mysqli_query($conexion, $sumaActivo);
    $datosActivo = mysqli_fetch_all($resultadoActivo, MYSQLI_ASSOC);
    $sumaPasivo = "SELECT sum(monto_pasivos) as pasivo FROM t_pasivos";
    $resultadoPasivo = mysqli_query($conexion, $sumaPasivo);
    $datosPasivo = mysqli_fetch_all($resultadoPasivo, MYSQLI_ASSOC);
    $datos = $Gastos->mostrarSaldo();
?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6"><h1>Sistema de gastos personales</h1></div>
                    <?php 
                        if ($datosActivo[0]['activo'] > $datosPasivo[0]['pasivo']) {
                            if ($datosPasivo[0]['pasivo'] != "") {
                            
                    ?>
                    <div class="col-md-6 text-center"><h1>Saldo total: $<?= $datos[0]['total'];?></h1>
                    </div>
                    <?php 
                            } else {
                    ?>
                    <div class="col-md-6 text-center"><h1>Saldo total: $<?= $datosActivo[0]['activo'];?></h1>
                    </div>
                    <?php
                            }
                        }elseif ($datosActivo[0]['activo'] <= $datosPasivo[0]['pasivo']){
                    ?>
                        <div class="col-md-6 text-center"><h1>Saldo total: $0</h1>
                        </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- <img src="../public/img/tiburon.gif" alt=""> -->
                        <div class="table-responsive">
                            <table class="table table-hover table-sm table-bordered">
                                <thead>
                                    <th class="text-center">Saldo gastado</th>
                                    <th class="text-center">Fecha de gasto</th>
                                </thead>
                                <tbody>
                                    <?php
                                        $Gastos = new Gasto();
                                        $sql = "SELECT * FROM t_pasivos";
                                        $datos = $Gastos->muestraDatos($sql);
                                        foreach ($datos as $key){
                                            $id = $key['id_pasivos'];
                                    ?>
                                    <tr>
                                        <td><?php echo $key['monto_pasivos']?></td>
                                        <td><?php echo $key['fecha_gasto']?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include "./footer.php";
?>