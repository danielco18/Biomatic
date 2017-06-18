<?php require_once 'views/include/dashboard.php'; ?>
    <div class="text-dashboard">
        <h2 class="dashboard-texto">Gestionar Semillero de Investigación</h2>
        <div class="chart-link">
            <a href="chart-semillero">
                <i class="material-icons">equalizer</i>
                <span>Ver gráficas</span>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <form action="index.php?c=semillero&a=create" method="post" id="createIndicator">
                <div class="form-text-container">
                    <h4 class="form-title form-subtitle">AGREGAR APRENDIZ</h4>
                </div>
                <div class="form-signIn">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Nombre Completo</label>
                                <input type="text" name="data[0]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Documento</label>
                                <input type="text" name="data[1]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Fecha Nacimiento</label>
                                <input type="text" name="data[2]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input type="text" name="data[3]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Celular</label>
                                <input type="text" name="data[4]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Usuario y clave</label>
                                <input type="text" name="data[5]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="" class="form-label">Ficha</label>
                                <input type="text" name="data[6]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="" class="form-label">Nivel de formación</label>
                                <select name="data[7]" class="form-control form-input">
                                    <option value="Técnico">Técnico</option>
                                    <option value="Tecnólogo">Tecnólogo</option>
                                    <option value="Especialización tecnológica">Especialización tecnológica</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Programa de formación</label>
                                <select name="data[8]" class="form-control form-input">
                                    <option value="ADSI">ADSI</option>
                                    <option value="Sistemas de gestión ambiental">Sistemas de gestión ambiental</option>
                                    <option value="Diseño de componentes para calzado">Diseño de componentes para calzado</option>
                                    <option value="Inyección de plastico">Inyección de plastico</option>
                                    <option value="Extrusión de plastico">Extrusión de plastico</option>
                                    <option value="Sistemas integrados de gestión de calidad">Sistemas integrados de gestión de calidad</option>
                                    <option value="Formulación de proyectos">Formulación de proyectos</option>
                                    <option value="Contabilidad">Contabilidad</option>
                                    <option value="Recursos Humanos">Recursos Humanos</option>
                                    <option value="Logística">Logística</option>
                                    <option value="Salud Ocupacional">Salud Ocupacional</option>
                                    <option value="Producción de calzado y marroquinería">Producción de calzado y marroquinería</option>
                                    <option value="Diseño de calzado y marroquinería">Diseño de calzado y marroquinería</option>
                                    <option value="Diseño de productos industriales">Diseño de productos industriales</option>
                                    <option value="Producción y consumo sostenible">Producción y consumo sostenible</option>
                                    <option value="Decoración y adecuación de especies comerciales">Decoración y adecuación de especies comerciales</option>
                                    <option value="Gestión y seguridad de bases de datos">Gestión y seguridad de bases de datos</option>
                                    <option value="Diagnóstico y análisis organizacional">Diagnóstico y análisis organizacional</option>
                                    <option value="Mercadeo estrátegico para el sistema de moda">Mercadeo estrátegico para el sistema de moda</option>
                                    <option value="Diseño y desarrollo de investigaciones de mercado">Diseño y desarrollo de investigaciones de mercado</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Fecha inicio</label>
                                <input type="text" name="data[9]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Fecha fin</label>
                                <input type="text" name="data[10]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Proyectos Asociados</label>
                                <input type="text" name="data[11]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Horas semanales</label>
                                <input type="text" name="data[12]" class="form-control form-input">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="" class="form-label">Productos</label>
                                <input type="text" name="data[13]" class="form-control form-input">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="" class="form-label">Año</label>
                                    <select class="form-control form-input form-select" name="data[14]">
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
