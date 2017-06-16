                    <?php require_once 'views/include/dashboard.php'; ?>
                        <div class="text-dashboard">
                            <h2 class="dashboard-texto">Gestionar Publicaciones</h2>
                            <div class="chart-link">
                                <a href="chart-publicacion">
                                    <i class="material-icons">equalizer</i>
                                    <span>Ver gráficas</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <form action="index.php?c=publicacion&a=create" method="post" id="createTypeInd">
                                    <div class="form-text-container">
                                        <h4 class="form-title form-subtitle">CREAR PUBLICACIÓN</h4>
                                    </div>
                                    <div class="form-signIn">
                                        <div class="form-group">
                                            <label for="" class="form-label">Tipo de Publicación</label>
                                            <input type="text" name="data[0]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Nombre de Editorial</label>
                                            <input type="text" name="data[1]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Categoria</label>
                                            <input type="text" name="data[2]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Nombre de la Publicación</label>
                                            <input type="text" name="data[3]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Autores</label>
                                            <input type="text" name="data[4]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Programa formación</label>
                                            <input type="text" name="data[5]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Año</label>
                                            <select class="form-control form-input form-select" name="data[6]">
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                            </select>
                                        </div>
                                        <div class="button-container">
                                            <button class="form-button" id="">CREAR</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php require_once 'views/modules/indicator_mod/publicacion_manage/main.publicacion.php'; ?>
