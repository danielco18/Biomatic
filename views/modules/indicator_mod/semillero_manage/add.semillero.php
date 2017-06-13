<?php require_once 'views/include/dashboard.php'; ?>
    <div class="text-dashboard">
        <h2 class="dashboard-texto">Gestionar Semillero de Investigación</h2>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <form action="index.php?c=indicator&a=create" method="post" id="createIndicator">
                <div class="form-text-container">
                    <h4 class="form-title form-subtitle">CREAR SEMILLERO</h4>
                </div>
                <div class="form-signIn">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Nombre</label>
                                <input type="text" name="data[]" class="form-control form-input" required="">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Documento</label>
                                <input type="text" name="data[]" class="form-control form-input" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Fecha Nacimiento</label>
                                <input type="date" name="data[]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input type="text" name="data[]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Celular</label>
                                <input type="text" name="data[]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Usuario y clave</label>
                                <input type="text" name="data[]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Ficha</label>
                                <input type="text" name="data[]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Categoria</label>
                                <select name="data[]" class="form-control form-input">
                                    <option disabled selected>Escoje una opción</option>
                                    <option value="ADSI">ADSI</option>
                                    <option value="Sistemas integrados de gestión de calidad">Sistemas integrados de gestión de calidad</option>
                                    <option value="Formulación de proyectos">Formulación de proyectos</option>
                                    <option value="Contabilidad">Contabilidad</option>
                                    <option value="Recursos Humanos">Recursos Humanos</option>
                                    <option value="Logística">Logística</option>
                                    <option value="Salud Ocupacional">Salud Ocupacional</option>
                                    <option value="Producción de calzado y marroquinería">Producción de calzado y marroquinería</option>
                                    <option value="Diseño de calzado y marroquinería">Diseño de calzado y marroquinería</option>
                                    <option value="Diseño de productos industriales">Diseño de productos industriales</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Fecha inicio</label>
                                <input type="text" name="data[]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Fecha fin</label>
                                <input type="text" name="data[]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Proyectos Asociados</label>
                                <input type="text" name="data[]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Horas semanales</label>
                                <input type="text" name="data[]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Productos</label>
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
    <?php require_once 'views/modules/indicator_mod/semillero_manage/main.semillero.php'; ?>
