<?php
    require_once 'views/include/dashboard.php';
    $Semillero = $this->SemilleroM->readSemilleroByCode($data);
?>
<div class="text-dashboard">
    <h2 class="dashboard-texto">Gestionar Semilleros de Investigación</h2>
</div>
<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <form action="index.php?c=semillero&a=updateData" method="post" id="">
            <div class="form-text-container">
                <h4 class="form-title form-subtitle">MODIFICAR SEMILLERO</h4>
            </div>
            <div class="form-signIn">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="data[0]" class="form-control form-input" value="<?php echo $Semillero["semI_nombre"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Documento</label>
                            <input type="text" name="data[1]" class="form-control form-input" value="<?php echo $Semillero["semI_documento"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Fecha de nacimiento</label>
                            <input type="text" name="data[2]" class="form-control form-input" value="<?php echo $Semillero["seml_fechaNac"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="data[3]" class="form-control form-input" value="<?php echo $Semillero["seml_email"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Celular</label>
                            <input type="text" name="data[4]" class="form-control form-input" value="<?php echo $Semillero["seml_celular"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Usuario y clave</label>
                            <input type="text" name="data[5]" class="form-control form-input" value="<?php echo $Semillero["seml_usuarioClave"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Ficha</label>
                            <input type="text" name="data[6]" class="form-control form-input" value="<?php echo $Semillero["seml_ficha"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Categoria</label>
                            <select name="data[7]" class="form-control form-input">
                                <option selected value="<?php echo $Semillero["semI_categoria"];?>">Elige una opción</option>
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
                            <input type="text" name="data[8]" class="form-control form-input" value="<?php echo $Semillero["semI_fechaIni"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Fecha fin</label>
                            <input type="text" name="data[9]" class="form-control form-input" value="<?php echo $Semillero["semI_fechaFin"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Proyectos asociados</label>
                            <input type="text" name="data[10]" class="form-control form-input" value="<?php echo $Semillero["semI_proyectos"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Horas semanales</label>
                            <input type="text" name="data[11]" class="form-control form-input" value="<?php echo $Semillero["semI_horasSemanales"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Productos</label>
                            <input type="text" name="data[12]" class="form-control form-input" value="<?php echo $Semillero["semI_productos"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Año</label>
                            <select name="data[13]" class="form-control form-input">
                                <option selected value="<?php echo $Semillero["dates"];?>">Elije una opción</option>
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
                <input type="hidden" name="data[14]" value="<?php echo $Semillero["semI_code"];?>">
                <div class="row">
                    <div class="col">
                        <div class="button-container">
                            <button class="form-button" name="button">MODIFICAR</button>
                        </div>
                    </div>
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
