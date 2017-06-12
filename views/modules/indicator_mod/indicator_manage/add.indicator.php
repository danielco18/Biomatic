                            <?php require_once 'views/include/dashboard.php'; ?>
                            <div class="text-dashboard">
                                <h2 class="dashboard-texto">Gestionar Inidicador</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <form action="index.php?c=indicator&a=create" method="post" id="signIn">
                                        <select class="" name="data[]">
                                            <option disabled selected>Escoja una opción</option>
                                            <?php
                                                foreach ($this->IndicatorM->readTypeInd() as $row){
                                            ?>
                                                <option value="<?php echo $row['typeIn_code']; ?>"><?php echo $row["typeIn_name"]; ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        <input type="text" name="data[]" placeholder="Nombre">
                                        <input type="date" name="data[]" placeholder="Fecha Actualización">
                                        <input type="text" name="data[]" placeholder="Categoria">
                                        <input type="text" name="data[]" placeholder="Subcategoria">
                                        <input type="text" name="data[]" placeholder="Definicion">
                                        <input type="text" name="data[]" placeholder="Objetivo">
                                        <input type="text" name="data[]" placeholder="Metodo medición">
                                        <input type="text" name="data[]" placeholder="Unidad de medidad">
                                        <input type="text" name="data[]" placeholder="Formula de medida">
                                        <input type="text" name="data[]" placeholder="Variable1">
                                        <input type="text" name="data[]" placeholder="Concepto estadistico">
                                        <input type="text" name="data[]" placeholder="Frecuenta calculo variable">
                                        <input type="text" name="data[]" placeholder="Fuenta imformación">
                                        <input type="text" name="data[]" placeholder="Serie disponible">
                                        <input type="text" name="data[]" placeholder="Desagracion tematica">
                                        <input type="text" name="data[]" placeholder="Desagracion geografica">
                                        <input type="text" name="data[]" placeholder="Limitaciones">
                                        <input type="text" name="data[]" placeholder="Responsable">
                                        <input type="text" name="data[]" placeholder="Observaciones">
                                        <button name="button">registrar</button>
                                    </form>
                                </div>
                            </div>
                            <?php require_once 'views/modules/indicator_mod/indicator_manage/main.indicator.php'; ?>
