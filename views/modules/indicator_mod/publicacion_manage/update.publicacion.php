<?php
    require_once 'views/include/dashboard.php';
    $Publicacion = $this->PublicacionM->readPublicacionByCode($data);
?>
<div class="text-dashboard">
    <h2 class="dashboard-texto">Gestionar Publicación</h2>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <form action="index.php?c=publicacion&a=updateData" method="post" style="margin-bottom: 30px;">
            <div class="form-text-container">
                <h4 class="form-title form-subtitle">MODIFICAR PUBLICACIÓN</h4>
            </div>
            <div class="form-signIn">
                <div class="form-group">
                    <label for="" class="form-label">Tipo de Publicación</label>
                    <select class="form-control form-input form-select" name="data[0]">
                        <option value="<?php echo $Publicacion["pub_tipoPublicacion"];?>">Elige una opción</option>
                        <option value="Artículos">Artículos</option>
                        <option value="Libros">Libros</option>
                        <option value="Capítulos">Capítulos</option>
                        <option value="Tesis">Tesis</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Nombre de Editorial</label>
                    <input type="text" name="data[1]" class="form-control form-input" value="<?php echo $Publicacion["pub_nombreEditorial"];?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Categoria</label>
                    <input type="text" name="data[2]" class="form-control form-input" value="<?php echo $Publicacion["pub_categoria"];?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Nombre de la Publicación</label>
                    <input type="text" name="data[3]" class="form-control form-input" value="<?php echo $Publicacion["pub_nombrePublicacion"];?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Autores</label>
                    <input type="text" name="data[4]" class="form-control form-input" value="<?php echo $Publicacion["pub_autores"];?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Programa formación</label>
                    <input type="text" name="data[5]" class="form-control form-input" value="<?php echo $Publicacion["pub_programasFormacion"];?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Año</label>
                    <select class="form-control form-input form-select" name="data[6]">
                        <option value="<?php echo $Publicacion["dates"];?>">Elige una opción</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                    </select>
                </div>
                <input type="hidden" name="data[7]" value="<?php echo $Publicacion["pub_code"];?>">
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
