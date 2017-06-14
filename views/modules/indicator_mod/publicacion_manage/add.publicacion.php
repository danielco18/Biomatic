                    <?php require_once 'views/include/dashboard.php'; ?>
                        <div class="text-dashboard">
                            <h2 class="dashboard-texto">Gestionar Publicaciones</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <form action="index.php?c=Publicaciones&a=create" method="post" id="createTypeInd">
                                    <div class="form-text-container">
                                        <h4 class="form-title form-subtitle">CREAR PUBLICACIÓN</h4>
                                    </div>
                                    <div class="form-signIn">
                                        <div class="form-group">
                                            <label for="" class="form-label">Tipo de Publicación</label>
                                            <input type="text" name="data[]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Nombre de Editorial</label>
                                            <input type="text" name="data[]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Categoria</label>
                                            <input type="text" name="data[]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Nombre de la Publicación</label>
                                            <input type="text" name="data[]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Autores</label>
                                            <input type="text" name="data[]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Programa formación</label>
                                            <input type="text" name="data[]" class="form-control form-input" id="">
                                        </div>
                                        <div class="button-container">
                                            <button class="form-button" id="">CREAR</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php require_once 'views/modules/indicator_mod/publicacion_manage/main.publicacion.php'; ?>
