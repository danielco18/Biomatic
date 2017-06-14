                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <table id="dataTable" class="table dataTable table-responsive no-footer">
                                    <thead>
                                        <tr class="main-fila">
                                            <th>Item</th>
                                            <th>Clase Evento</th>
                                            <th>Nombre de Ponencia</th>
                                            <th>Tipo de Ponencia</th>
                                            <th width="120px">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $item = 0;
                                        foreach ($this->PonenciasM->readPonencias() as $row){
                                            $item++;
                                    ?>
                                        <tr>
                                            <td><?php echo $item; ?></td>
                                        <td><?php echo $row["pon_claseEvento"]; ?></td>
                                        <td><?php echo $row["pon_nombrePonencia"]; ?></td>
                                        <td><?php echo $row["pon_tipoPonencia"]; ?></td>
                                            <td>
                                                <a href="index.php?c=typeIndicator&a=update&token=<?php echo $row['pon_code'];?>" class="icon-table">
                                                    <i class="material-icons icon-yellow">create</i>
                                                </a>
                                                <a href="index.php?c=typeIndicator&a=delete&token=<?php echo $row['pon_code'];?>" class="icon-table">
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
