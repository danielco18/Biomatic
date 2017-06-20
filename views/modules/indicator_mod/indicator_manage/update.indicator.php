                            <?php
                                require_once 'views/include/dashboard.php';
                                $Indicator = $this->IndicatorM->readIndByCode($data);
                                // capturo el token que me mandan por GET y hago una consulta de ese token para mostrar los datos que estan en la bd
                            ?>
                            <div class="text-dashboard">
                                <h2 class="dashboard-texto">Gestionar Inidicador</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <form action="index.php?c=indicator&a=updateData" method="post" style="margin-bottom: 30px;">
                                        <div class="form-text-container">
                                            <h4 class="form-title form-subtitle">MODIFICAR TIPO INDICADOR</h4>
                                        </div>
                                        <div class="form-signIn">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Tipo Indicador</label>
                                                        <select class="form-control form-input" name="data[]">
                                                            <option selected value="<?php echo $Indicator['ind_typeIn_code']; // imprimo el valor que esta la base de datos dependiendo del token?>">Elige una opción</option>
                                                            <?php
                                                            foreach ($this->IndicatorM->readTypeInd() as $row){
                                                                ?>
                                                                <option value="<?php echo $row['typeIn_code']; ?>"><?php echo $row["typeIn_name"]; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Nombre</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_nombre'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Fecha de Actualización</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_fechaActualizacion'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Categoria</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_categoria'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Subcategoria</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_subCategoria'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Definición</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_definicion'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Objetivo</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_objetivo'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Metodo de medición</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_metodoMedicion'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Unidad de medida</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_unidadMedida'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Fórmula de medida</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_formulaMedida'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Variable1</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_variable1'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Concepto estadístico</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_conceptoEstadistico'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Frecuencia de cálculo de la variable</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_frecuenciaCalculoVariable'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Fuente de información</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_fuenteInformacion'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Serie disponible</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_serieDisponible'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Desagregración temática</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_desagracionTematica'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Desagregración geográfica</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_desagracionGeografica'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Limitaciones del indicador</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_limitaciones'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Responsable</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_responsable'];?>"  class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Observaciones</label>
                                                        <input type="text" name="data[]" value="<?php echo $Indicator['ind_observaciones'];?>" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">

                                                        <input type="hidden" name="data[]" value="<?php echo $Indicator['ind_code'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="button-container">
                                                        <button class="form-button" id="">MODIFICAR</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
