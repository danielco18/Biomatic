<?php
    require_once 'views/include/dashboard.php';
    $Proyectos = $this->ProyectosM->readProyectosByCode($data);
?>
<div class="text-dashboard">
    <h2 class="dashboard-texto">Gestionar Proyectos</h2>
</div>
<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <form action="index.php?c=proyectos&a=updateData" method="post" id="">
            <div class="form-text-container">
                <h4 class="form-title form-subtitle">MODIFICAR PROYECTOS</h4>
            </div>
            <div class="form-signIn">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="" class="form-label">Tipo de Investigación</label>
                            <select name="data[0]" class="form-control form-input">
                                <option value="<?php echo $Proyectos["np_tipoInvestigacion"];?>">Elige una opción</option>
                                <option value="Investigación">Investigación</option>
                                <option value="Innovación">Innovación</option>
                                <option value="Fortalecimiento tecnológico">Fortalecimiento tecnológico</option>
                                <option value="Mordernización">Mordernización</option>
                                <option value="Divulgación">Divulgación</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label class="form-label">Serial</label>
                            <input type="text" name="data[1]" class="form-control form-input" value="<?php echo $Proyectos["np_Serial"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Título de Investigación</label>
                            <input type="text" name="data[2]" class="form-control form-input" value="<?php echo $Proyectos["np_tituloInvestigacion"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="form-group">
                            <label for="" class="form-label">Alcance</label>
                            <input type="text" name="data[3]" class="form-control form-input" value="<?php echo $Proyectos["np_alcanceInvestigacion"];?>">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="" class="form-label">Entidad</label>
                            <select name="data[4]" class="form-control form-input">
                                <option value="<?php echo $Proyectos["np_Entidad"];?>">Elige una opción</option>
                                <option value="SENA">SENA</option>
                                <option value="Cofinanciados x Empresas">Cofinanciados x Empresas</option>
                                <option value="Cofinanciación de otras entidades">Cofinanciación de otras entidades</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Institución</label>
                            <input type="text" name="data[5]" class="form-control form-input" value="<?php echo $Proyectos["np_institucion"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Carácter de la Institución</label>
                            <input type="text" name="data[6]" class="form-control form-input" value="<?php echo $Proyectos["np_caracterInstitucion"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Investigadores</label>
                            <input type="text" name="data[7]" class="form-control form-input" value="<?php echo $Proyectos["np_investigadores"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Coinvestigadores</label>
                            <input type="text" name="data[8]" class="form-control form-input" value="<?php echo $Proyectos["np_coInvestigadores"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Aprendices Involucrados</label>
                            <input type="text" name="data[9]" class="form-control form-input" value="<?php echo $Proyectos["np_aprendicesInvolucrados"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Nombre y Documento</label>
                            <input type="text" name="data[10]" class="form-control form-input" value="<?php echo $Proyectos["np_nombreyDocumento"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Programa de formación</label>
                            <input type="text" name="data[11]" class="form-control form-input" value="<?php echo $Proyectos["np_programaFormAprendices"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Soporte</label>
                            <input type="text" name="data[12]" class="form-control form-input" value="<?php echo $Proyectos["np_soporte"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Objetivos Investigación</label>
                            <input type="text" name="data[13]" class="form-control form-input" value="<?php echo $Proyectos["np_objetivosInvestigacion"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Resultados Esperados</label>
                            <input type="text" name="data[14]" class="form-control form-input" value="<?php echo $Proyectos["np_resultadosEsperados"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Resultados Obtenidos</label>
                            <input type="text" name="data[15]" class="form-control form-input" value="<?php echo $Proyectos["np_resultadosObtenidos"];?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Cobertura</label>
                            <input type="text" name="data[16]" class="form-control form-input" value="<?php echo $Proyectos["np_cobertura"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="" class="form-label">Año</label>
                                <select name="data[17]" class="form-control form-input">
                                    <option selected value="<?php echo $Proyectos["dates"];?>">Elige una opción</option>
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
                            <input type="text" name="data[18]" class="form-control form-input" value="<?php echo $Proyectos["np_fechaInicio"];?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="" class="form-label">Fecha Fin</label>
                            <input type="text" name="data[19]" class="form-control form-input" value="<?php echo $Proyectos["np_fechaFin"];?>">
                        </div>
                    </div>
                    <input type="hidden" name="data[20]" value="<?php echo $Proyectos["np_code"]; ?>">
                </div>
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
