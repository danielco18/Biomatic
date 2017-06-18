                    <?php require_once 'views/include/dashboard.php'; ?>
                        <div class="text-dashboard">
                            <h2 class="dashboard-texto">Gestionar Productos de Investigación</h2>
                            <div class="chart-link">
                                <a href="chart-productos">
                                    <i class="material-icons">equalizer</i>
                                    <span>Ver gráficas</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <form action="index.php?c=productos&a=create" method="post" id="createTypeInd">
                                    <div class="form-text-container">
                                        <h4 class="form-title form-subtitle">CREAR PRODUCTO DE INVESTIGACIÓN</h4>
                                    </div>
                                    <div class="form-signIn">
                                        <div class="form-group">
                                            <label for="" class="form-label">Nombre del Producto</label>
                                            <input type="text" name="data[0]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Tipo del producto</label>
                                            <select class="form-control form-input form-select" name="data[1]">
                                                <option value="Nueva variedad">Nueva variedad</option>
                                                <option value="Producto tecnológico">Producto tecnológico</option>
                                                <option value="Prototipo">Prototipo</option>
                                                <option value="Signos distintivos">Signos distintivos</option>
                                                <option value="Software">Software</option>
                                                <option value="Patente">Patente</option>
                                                <option value="Modelos de utilidad">Modelos de utilidad</option>
                                                <option value="Talleres de creación">Talleres de creación</option>
                                                <option value="Consultoría científico tecnológica e informe técnico">Consultoría científico tecnológica e informe técnico</option>
                                                <option value="Diseño Industrial">Diseño Industrial</option>
                                                <option value="Innovación de proceso o procedimiento">Innovación de proceso o procedimiento</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Nombre de los autores y cedula</label>
                                            <input type="text" name="data[2]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Programa de formación</label>
                                            <select name="data[3]" class="form-control form-input">
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
                                        <div class="form-group">
                                            <label for="" class="form-label">Proyectos asociados</label>
                                            <input type="text" name="data[4]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Horas semanales</label>
                                            <input type="text" name="data[5]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Productos</label>
                                            <input type="text" name="data[6]" class="form-control form-input" id="">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="form-label">Año</label>
                                            <select class="form-control form-input form-select" name="data[7]">
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
                        <?php require_once 'views/modules/indicator_mod/productos_manage/main.productos.php'; ?>
