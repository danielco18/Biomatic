<?php
    require_once 'views/include/dashboard.php';
    $Ponencia = $this->PonenciasM->readPonenciasByCode($data);
?>
<div class="text-dashboard">
    <h2 class="dashboard-texto">Gestionar Ponencias</h2>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <form action="index.php?c=ponencias&a=updateData" method="post" style="margin-bottom: 30px;">
            <div class="form-text-container">
                <h4 class="form-title form-subtitle">MODIFICAR PONENCIA</h4>
            </div>
            <div class="form-signIn">
                <div class="form-group">
                    <label for="" class="form-label">Clase evento</label>
                    <input type="text" name="data[0]" class="form-control form-input" value="<?php echo $Ponencia["pon_claseEvento"];?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Nombre Ponencia</label>
                    <input type="text" name="data[1]" class="form-control form-input" value="<?php echo $Ponencia["pon_nombrePonencia"];?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Nombre Evento</label>
                    <input type="text" name="data[2]" class="form-control form-input" value="<?php echo $Ponencia["pon_nombreEvento"];?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Tipo Ponencia</label>
                    <input type="text" name="data[3]" class="form-control form-input" value="<?php echo $Ponencia["pon_tipoPonencia"];?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Autores</label>
                    <input type="text" name="data[4]" class="form-control form-input" value="<?php echo $Ponencia["pon_autores"];?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Programa formación</label>
                    <input type="text" name="data[5]" class="form-control form-input" value="<?php echo $Ponencia["pon_programasFormacion"];?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Año</label>
                    <select class="form-control form-input form-select" name="data[6]">
                        <option selected value="<?php echo $Ponencia["dates"];?>">Elige una opción</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                    </select>
                </div>
                <input type="hidden" name="data[7]" value="<?php echo $Ponencia["pon_code"];?>">
                <div class="button-container">
                    <button class="form-button">MODIFICAR</button>
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
