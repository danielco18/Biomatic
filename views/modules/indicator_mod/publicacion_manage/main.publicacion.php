                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <table id="dataTable" class="table dataTable table-responsive no-footer">
                                    <thead>
                                        <tr class="main-fila">
                                            <th>Item</th>
                                            <th>Tipo de publicación</th>
                                            <th>Categoria</th>
                                            <th>Nombre de Publicación</th>
                                            <th width="120px">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $item = 0;
                                        foreach ($this->PublicacionM->readPublicacion() as $row){
                                            $item++;
                                    ?>
                                        <tr>
                                            <td><?php echo $item; ?></td>
                                        <td><?php echo $row["pub_tipoPublicacion"]; ?></td>
                                        <td><?php echo $row["pub_categoria"]; ?></td>
                                        <td><?php echo $row["pub_nombrePublicacion"]; ?></td>
                                            <td>
                                                <a href="index.php?c=publicacion&a=update&token=<?php echo $row['pub_code'];?>" class="icon-table">
                                                    <i class="material-icons icon-yellow">create</i>
                                                </a>
                                                <a href="index.php?c=publicacion&a=delete&token=<?php echo $row['pub_code'];?>" class="icon-table" onclick="return confirm('Está seguro?');">
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
