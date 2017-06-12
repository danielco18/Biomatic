                    <?php require_once 'views/include/dashboard.php'; ?>
                        <div class="text-dashboard">
                            <h2 class="dashboard-texto">Gestionar Tipo Inidicador</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <form action="index.php?c=typeIndicator&a=create" method="post" id="signIn">
                                    <div class="form-text-container">
                                        <h4 class="form-title form-subtitle">CREAR TIPO INDICADOR</h4>
                                    </div>
                                    <div class="form-signIn">
                                        <div class="form-group">
                                            <label for="nameTypeIndicator" class="form-label">Nombre</label>
                                            <input type="text" name="data[]" class="form-control form-input" id="nameTypeIndicator" aria-describedby="nameTypeIndHelp" required>
                                            <small id="nameTypeIndHelp" class="form-text text-muted">El nombre del indicador ya existe en la aplicación.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="descTypeIndicator" class="form-label">Descripción</label>
                                            <textarea name="data[]" class="form-control form-input" id="descTypeIndicator" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="stateTypeIndicator" class="form-label">Estado</label>
                                            <input type="text" name="data[]" class="form-control form-input" id="stateTypeIndicator" required>

                                        </div>  
                                        <div class="button-container">
                                            <button class="form-button" id="butonSignIn">CREAR</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php require_once 'views/modules/indicator_mod/typeIndicator_manage/main.typeInd.php';; ?>