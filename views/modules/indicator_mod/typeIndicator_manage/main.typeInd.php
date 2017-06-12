                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <table id="dataTable" class="table dataTable table-responsive no-footer">
                                    <thead>
                                        <tr class="main-fila">
                                            <th>Item</th>
                                            <th>Nombre</th>
                                            <th>Estado</th>
                                            <th width="120px">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $item = 0;
                                        foreach ($this->TypeIndM->readTypeInd() as $row){
                                            $item++;
                                    ?>
                                        <tr>
                                            <td><?php echo $item; ?></td>
                                            <td><?php echo $row["typeIn_name"]; ?></td>
                                            <td><?php echo $row["typeIn_state"]; ?></td>
                                            <td>
                                                <a href="" class="icon-table">
                                                    <i class="material-icons icon-green">remove_red_eye</i>
                                                </a>
                                                <a href="index.php?c=typeIndicator&a=update&token=<?php echo $row['typeIn_code'];?>" class="icon-table">
                                                    <i class="material-icons icon-yellow">create</i>
                                                </a>
                                                <a href="index.php?c=typeIndicator&a=delete&token=<?php echo $row['typeIn_code'];?>" class="icon-table">
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