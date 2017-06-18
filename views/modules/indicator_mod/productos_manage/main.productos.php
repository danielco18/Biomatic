                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <table id="dataTable" class="table dataTable table-responsive no-footer">
                                    <thead>
                                        <tr class="main-fila">
                                            <th>Item</th>
                                            <th>Nombre</th>
                                            <th>Tipo del producto</th>
                                            <th>Programa de formación</th>
                                            <th width="120px">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $item = 0;
                                        foreach ($this->ProductosM->readProductos() as $row){
                                            $item++;
                                    ?>
                                        <tr>
                                            <td><?php echo $item; ?></td>
                                        <td><?php echo $row["pro_nombre"]; ?></td>
                                        <td><?php echo $row["pro_tipoProducto"]; ?></td>
                                        <td><?php echo $row["pro_programaFormacion"]; ?></td>
                                            <td>
                                                <a href="index.php?c=productos&a=update&token=<?php echo $row['pro_code'];?>" class="icon-table">
                                                    <i class="material-icons icon-yellow">create</i>
                                                </a>
                                                <a href="index.php?c=productos&a=delete&token=<?php echo $row['pro_code'];?>" class="icon-table" onclick="return confirm('Está seguro?');">
                                                    <i class="material-icons icon-red">delete</i>
                                                </a>
                                            </td>
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
