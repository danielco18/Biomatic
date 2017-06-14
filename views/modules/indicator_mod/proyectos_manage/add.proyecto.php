<?php require_once 'views/include/dashboard.php'; ?>
    <div class="text-dashboard">
        <h2 class="dashboard-texto">Gestionar Número de Proyectos</h2>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <form action="index.php?c=proyectos&a=create" method="post" id="createIndicator">
                <div class="form-text-container">
                    <h4 class="form-title form-subtitle">CREAR PROYECTOS</h4>
                </div>
                <div class="form-signIn">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Tipo de Investigación</label>
                                <input type="text" name="data[0]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Título de Investigación</label>
                                <input type="text" name="data[1]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Alcance de Investigación</label>
                                <input type="text" name="data[2]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Institución</label>
                                <input type="text" name="data[3]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Carácter de la Institución</label>
                                <input type="text" name="data[4]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Investigadores</label>
                                <input type="text" name="data[5]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Coinvestigadores</label>
                                <input type="text" name="data[6]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Aprendices Involucrados</label>
                                <input type="text" name="data[7]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Nombre y Documento</label>
                                <input type="text" name="data[8]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Programa de formación</label>
                                <select name="data[9]" class="form-control form-input">
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
                                <label for="" class="form-label">Soporte</label>
                                <input type="text" name="data[10]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Objetivos Investigación</label>
                                <input type="text" name="data[11]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Resultados Esperados</label>
                                <input type="text" name="data[12]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Resultados Obtenidos</label>
                                <input type="text" name="data[13]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Cobertura</label>
                                <input type="text" name="data[14]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="" class="form-label">Año</label>
                                    <select class="form-control form-input form-select" name="data[15]">
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Fecha Inicio</label>
                                <input type="text" name="data[16]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Fecha Fin</label>
                                <input type="text" name="data[17]" class="form-control form-input">
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
    <?php require_once 'views/modules/indicator_mod/proyectos_manage/main.proyecto.php'; ?>
