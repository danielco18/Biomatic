                        <?php require_once 'views/include/dashboard.php'; ?>
                            <div class="text-dashboard">
                                <h2 class="dashboard-texto">Gestionar Inidicador</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <form action="index.php?c=indicator&a=create" method="post" id="createIndicator">
                                        <div class="form-text-container">
                                            <h4 class="form-title form-subtitle">CREAR INDICADOR</h4>
                                        </div>
                                        <div class="form-signIn">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Tipo indicador</label>
                                                        <select class="" name="data[]" class="form-control form-input form-select">
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
                                                        <input type="text" name="data[]" class="form-control form-input" ="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Fecha de Actualización</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Categoria</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Subcategoria</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Definición</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Objetivo</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Metodo de medición</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Unidad de medida</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Fórmula de medida</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Variable1</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Concepto estadístico</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Frecuencia de cálculo de la variable</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Fuente de información</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Serie disponible</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Desagregración temática</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Desagregración geográfica</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Limitaciones del indicador</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Responsable</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Observaciones</label>
                                                        <input type="text" name="data[]" class="form-control form-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="button-container">
                                                        <button class="form-button" name="button">CREAR</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php require_once 'views/modules/indicator_mod/indicator_manage/main.indicator.php'; ?>
