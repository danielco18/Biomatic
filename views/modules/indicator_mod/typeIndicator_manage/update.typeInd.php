                    <?php
                        require_once 'views/include/dashboard.php';
                        $typeInd = $this->TypeIndM->readTypeIndByCode($data);
                    ?>
                        <div class="text-dashboard">
                            <h2 class="dashboard-texto">Gestionar Tipo Inidicador</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <form action="index.php?c=typeIndicator&a=updateData" method="post">
                                    <div class="form-text-container">
                                        <h4 class="form-title form-subtitle">MODIFICAR TIPO INDICADOR</h4>
                                    </div>
                                    <div class="form-signIn">
                                        <div class="form-group">
                                            <label for="nameTypeIndicator" class="form-label">Nombre</label>
                                            <input type="text" name="data[]" value="<?php echo $typeInd['typeIn_name']; ?>" class="form-control form-input" id="nameTypeIndicator" aria-describedby="nameTypeIndHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="descTypeIndicator" class="form-label">Descripción</label>
                                            <input type="text" name="data[]" value="<?php echo $typeInd['typeIn_desc']; ?>" class="form-control form-input" id="descTypeIndicator">
                                        </div>
                                        <div class="form-group">
                                            <label for="stateTypeIndicator" class="form-label">Estado</label>
                                            <input type="text" name="data[]" value="<?php echo $typeInd['typeIn_state']; ?>" class="form-control form-input" id="stateTypeIndicator">
                                        </div>
                                        <input type="hidden" name="data[]" value="<?php echo $typeInd['typeIn_code']; ?>">
                                        <div class="button-container">
                                            <button class="form-button" id="butonSignIn">MODIFICAR</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
