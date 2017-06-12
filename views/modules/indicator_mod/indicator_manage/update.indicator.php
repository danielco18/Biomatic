                            <?php
                                require_once 'views/include/dashboard.php';
                                $Indicator = $this->IndicatorM->readIndByCode($data);
                            ?>
                            <div class="text-dashboard">
                                <h2 class="dashboard-texto">Gestionar Inidicador</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <form action="index.php?c=indicator&a=updateData" method="post" id="signIn">
                                        <select class="" name="data[]">
                                            <option value="" disabled selected>Escoja una opción</option>
                                            <?php
                                                foreach ($this->IndicatorM->readTypeInd() as $row){
                                            ?>
                                                <option value="<?php echo $row['typeIn_code']; ?>"><?php echo $row["typeIn_name"]; ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_nombre'];?>" placeholder="Nombre">
                                        <input type="date" name="data[]" value="<?php echo $Indicator['ind_fechaActualizacion'];?>" placeholder="Fecha Actualización">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_categoria'];?>" placeholder="Categoria">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_subCategoria'];?>" placeholder="Subcategoria">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_definicion'];?>" placeholder="Definicion">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_objetivo'];?>" placeholder="Objetivo">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_metodoMedicion'];?>" placeholder="Metodo medición">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_unidadMedida'];?>" placeholder="Unidad de medidad">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_formulaMedida'];?>" placeholder="Formula de medida">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_variable1'];?>" placeholder="Variable1">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_conceptoEstadistico'];?>" placeholder="Concepto estadistico">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_frecuenciaCalculoVariable'];?>" placeholder="Frecuenta calculo variable">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_fuenteInformacion'];?>" placeholder="Fuenta imformación">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_serieDisponible'];?>" placeholder="Serie disponible">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_desagracionTematica'];?>" placeholder="Desagracion tematica">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_desagracionGeografica'];?>" placeholder="Desagracion geografica">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_limitaciones'];?>" placeholder="Limitaciones">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_responsable'];?>" placeholder="Responsable">
                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_observaciones'];?>" placeholder="Observaciones">
                                        <input type="hidden" name="data[]" value="<?php echo $Indicator['ind_code'];?>">
                                        <button name="button">actualizar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
