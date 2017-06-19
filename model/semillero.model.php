<?php

    class SemilleroModel extends DataBase{
        private $pdo;
        public function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
        }

        public function createSemillero($data){
            try {
                $sql = "INSERT INTO semillero_investigacion VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
            $data[15],$data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],
            $data[7],$data[8],$data[9],$data[10],$data[1],$data[12],$data[13],$data[14],$data[16]
                        ));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readSemillero(){
            try {
                $sql = "SELECT * FROM semillero_investigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readSemilleroByCode($data){
            try {
                $sql = "SELECT * FROM semillero_investigacion WHERE semI_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function updateSemillero($data){
            try {
                $sql = "UPDATE semillero_investigacion SET
                        semI_nombre = ?,
                        semI_documento = ?,
                        seml_fechaNac = ?,
                        seml_email = ?,
                        seml_celular = ?,
                        seml_usuarioClave = ?,
                        seml_ficha = ?,
                        seml_nivelFormacion = ?,
                        semI_categoria = ?,
                        semI_fechaIni = ?,
                        semI_fechaFin = ?,
                        semI_proyectos = ?,
                        semI_horasSemanales = ?,
                        semI_productos = ?,
                        dates = ?
                        WHERE semI_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
                            $data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],
                            $data[8],$data[9],$data[10],$data[11],$data[12],$data[13],$data[14],$data[15]));
                $result = "Datos actualizados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function deleteSemillero($data){
            try {
                $sql = "DELETE FROM semillero_investigacion WHERE semI_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = "Datos eliminados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function readNivelTotal(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN seml_nivelFormacion = 'Técnico'  THEN 1 ELSE 0 END) Técnico,
                            SUM(CASE WHEN seml_nivelFormacion = 'Tecnólogo'THEN 1 ELSE 0 END) Tecnólogo, 
                            SUM(CASE WHEN seml_nivelFormacion = 'Especialización tecnológica'
                                THEN 1 ELSE 0 END) Especialización
                        FROM semillero_investigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('Nivel' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2]]
                            );
            return $result;
        }

        public function readSemilleroIn2012(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN semI_categoria = 'ADSI'  AND dates = '2012' THEN 1 ELSE 0 END) ADSI, 
                            SUM(CASE WHEN semI_categoria = 'Sistemas de gestión ambiental' AND dates = '2012'  THEN 1 ELSE 0 END) SistemasGestion, 
                            SUM(CASE WHEN semI_categoria = 'Diseño de componentes para calzado'  AND dates = '2012' THEN 1 ELSE 0 END) DiseñoComponentes,
                            SUM(CASE WHEN semI_categoria = 'Inyección de plastico'  AND dates = '2012' THEN 1 ELSE 0 END) Inyeccion,
                            SUM(CASE WHEN semI_categoria = 'Extrusión de plastico'  AND dates = '2012' THEN 1 ELSE 0 END) Extrusion,
                            SUM(CASE WHEN semI_categoria = 'Sistemas integrados de gestión de calidad'  AND dates = '2012' THEN 1 ELSE 0 END) SistemasInt,
                            SUM(CASE WHEN semI_categoria = 'Formulación de proyectos'  AND dates = '2012' THEN 1 ELSE 0 END) Formulacion,
                            SUM(CASE WHEN semI_categoria = 'Contabilidad'  AND dates = '2012' THEN 1 ELSE 0 END) Contabilidad,
                            SUM(CASE WHEN semI_categoria = 'Recursos Humanos'  AND dates = '2012' THEN 1 ELSE 0 END) Recursos,
                            SUM(CASE WHEN semI_categoria = 'Logística'  AND dates = '2012' THEN 1 ELSE 0 END) Logistica,
                            SUM(CASE WHEN semI_categoria = 'Salud Ocupacional'  AND dates = '2012' THEN 1 ELSE 0 END) SaludOc,
                            SUM(CASE WHEN semI_categoria = 'Producción de calzado y marroquinería' AND dates = '2012' THEN 1 ELSE 0 END) ProduccionCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de calzado y marroquinería' AND dates = '2012' THEN 1 ELSE 0 END) DiseñoCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de productos industriales' AND dates = '2012' THEN 1 ELSE 0 END) DiseñoProductos,
                            SUM(CASE WHEN semI_categoria = 'Producción y consumo sostenible' AND dates = '2012' THEN 1 ELSE 0 END) ProduccionSos,
                            SUM(CASE WHEN semI_categoria = 'Decoración y adecuación de especies comerciales' AND dates = '2012' THEN 1 ELSE 0 END) Decoracion,
                            SUM(CASE WHEN semI_categoria = 'Gestión y seguridad de bases de datos'  AND dates = '2012' THEN 1 ELSE 0 END) GestionBD,
                            SUM(CASE WHEN semI_categoria = 'Diagnóstico y análisis organizacional'  AND dates = '2012' THEN 1 ELSE 0 END) Diagnostico,
                            SUM(CASE WHEN semI_categoria = 'Mercadeo estrátegico para el sistema de moda'  AND dates = '2012' THEN 1 ELSE 0 END) Mercadeo,
                            SUM(CASE WHEN semI_categoria = 'Diseño y desarrollo de investigaciones de mercado' AND dates = '2012' THEN 1 ELSE 0 END) DiseñoMercado,
                            SUM(CASE WHEN semI_categoria = 'Otro'  AND dates = '2012' THEN 1 ELSE 0 END) Otro
                        FROM semillero_investigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2012' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10],
                                $result[0][11],
                                $result[0][12],
                                $result[0][13],
                                $result[0][14],
                                $result[0][15],
                                $result[0][16],
                                $result[0][17],
                                $result[0][18],
                                $result[0][19],
                                $result[0][20]]
                            );
            return $result;
        }

        public function readSemilleroIn2013(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN semI_categoria = 'ADSI'  AND dates = '2013' THEN 1 ELSE 0 END) ADSI, 
                            SUM(CASE WHEN semI_categoria = 'Sistemas de gestión ambiental' AND dates = '2013'  THEN 1 ELSE 0 END) SistemasGestion, 
                            SUM(CASE WHEN semI_categoria = 'Diseño de componentes para calzado'  AND dates = '2013' THEN 1 ELSE 0 END) DiseñoComponentes,
                            SUM(CASE WHEN semI_categoria = 'Inyección de plastico'  AND dates = '2013' THEN 1 ELSE 0 END) Inyeccion,
                            SUM(CASE WHEN semI_categoria = 'Extrusión de plastico'  AND dates = '2013' THEN 1 ELSE 0 END) Extrusion,
                            SUM(CASE WHEN semI_categoria = 'Sistemas integrados de gestión de calidad'  AND dates = '2013' THEN 1 ELSE 0 END) SistemasInt,
                            SUM(CASE WHEN semI_categoria = 'Formulación de proyectos'  AND dates = '2013' THEN 1 ELSE 0 END) Formulacion,
                            SUM(CASE WHEN semI_categoria = 'Contabilidad'  AND dates = '2013' THEN 1 ELSE 0 END) Contabilidad,
                            SUM(CASE WHEN semI_categoria = 'Recursos Humanos'  AND dates = '2013' THEN 1 ELSE 0 END) Recursos,
                            SUM(CASE WHEN semI_categoria = 'Logística'  AND dates = '2013' THEN 1 ELSE 0 END) Logistica,
                            SUM(CASE WHEN semI_categoria = 'Salud Ocupacional'  AND dates = '2013' THEN 1 ELSE 0 END) SaludOc,
                            SUM(CASE WHEN semI_categoria = 'Producción de calzado y marroquinería' AND dates = '2013' THEN 1 ELSE 0 END) ProduccionCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de calzado y marroquinería' AND dates = '2013' THEN 1 ELSE 0 END) DiseñoCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de productos industriales' AND dates = '2013' THEN 1 ELSE 0 END) DiseñoProductos,
                            SUM(CASE WHEN semI_categoria = 'Producción y consumo sostenible' AND dates = '2013' THEN 1 ELSE 0 END) ProduccionSos,
                            SUM(CASE WHEN semI_categoria = 'Decoración y adecuación de especies comerciales' AND dates = '2013' THEN 1 ELSE 0 END) Decoracion,
                            SUM(CASE WHEN semI_categoria = 'Gestión y seguridad de bases de datos'  AND dates = '2013' THEN 1 ELSE 0 END) GestionBD,
                            SUM(CASE WHEN semI_categoria = 'Diagnóstico y análisis organizacional'  AND dates = '2013' THEN 1 ELSE 0 END) Diagnostico,
                            SUM(CASE WHEN semI_categoria = 'Mercadeo estrátegico para el sistema de moda'  AND dates = '2013' THEN 1 ELSE 0 END) Mercadeo,
                            SUM(CASE WHEN semI_categoria = 'Diseño y desarrollo de investigaciones de mercado' AND dates = '2013' THEN 1 ELSE 0 END) DiseñoMercado,
                            SUM(CASE WHEN semI_categoria = 'Otro'  AND dates = '2013' THEN 1 ELSE 0 END) Otro
                        FROM semillero_investigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2013' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10],
                                $result[0][11],
                                $result[0][12],
                                $result[0][13],
                                $result[0][14],
                                $result[0][15],
                                $result[0][16],
                                $result[0][17],
                                $result[0][18],
                                $result[0][19],
                                $result[0][20]]
                            );
            return $result;
        }

        public function readSemilleroIn2014(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN semI_categoria = 'ADSI'  AND dates = '2014' THEN 1 ELSE 0 END) ADSI, 
                            SUM(CASE WHEN semI_categoria = 'Sistemas de gestión ambiental' AND dates = '2014'  THEN 1 ELSE 0 END) SistemasGestion, 
                            SUM(CASE WHEN semI_categoria = 'Diseño de componentes para calzado'  AND dates = '2014' THEN 1 ELSE 0 END) DiseñoComponentes,
                            SUM(CASE WHEN semI_categoria = 'Inyección de plastico'  AND dates = '2014' THEN 1 ELSE 0 END) Inyeccion,
                            SUM(CASE WHEN semI_categoria = 'Extrusión de plastico'  AND dates = '2014' THEN 1 ELSE 0 END) Extrusion,
                            SUM(CASE WHEN semI_categoria = 'Sistemas integrados de gestión de calidad'  AND dates = '2014' THEN 1 ELSE 0 END) SistemasInt,
                            SUM(CASE WHEN semI_categoria = 'Formulación de proyectos'  AND dates = '2014' THEN 1 ELSE 0 END) Formulacion,
                            SUM(CASE WHEN semI_categoria = 'Contabilidad'  AND dates = '2014' THEN 1 ELSE 0 END) Contabilidad,
                            SUM(CASE WHEN semI_categoria = 'Recursos Humanos'  AND dates = '2014' THEN 1 ELSE 0 END) Recursos,
                            SUM(CASE WHEN semI_categoria = 'Logística'  AND dates = '2014' THEN 1 ELSE 0 END) Logistica,
                            SUM(CASE WHEN semI_categoria = 'Salud Ocupacional'  AND dates = '2014' THEN 1 ELSE 0 END) SaludOc,
                            SUM(CASE WHEN semI_categoria = 'Producción de calzado y marroquinería' AND dates = '2014' THEN 1 ELSE 0 END) ProduccionCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de calzado y marroquinería' AND dates = '2014' THEN 1 ELSE 0 END) DiseñoCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de productos industriales' AND dates = '2014' THEN 1 ELSE 0 END) DiseñoProductos,
                            SUM(CASE WHEN semI_categoria = 'Producción y consumo sostenible' AND dates = '2014' THEN 1 ELSE 0 END) ProduccionSos,
                            SUM(CASE WHEN semI_categoria = 'Decoración y adecuación de especies comerciales' AND dates = '2014' THEN 1 ELSE 0 END) Decoracion,
                            SUM(CASE WHEN semI_categoria = 'Gestión y seguridad de bases de datos'  AND dates = '2014' THEN 1 ELSE 0 END) GestionBD,
                            SUM(CASE WHEN semI_categoria = 'Diagnóstico y análisis organizacional'  AND dates = '2014' THEN 1 ELSE 0 END) Diagnostico,
                            SUM(CASE WHEN semI_categoria = 'Mercadeo estrátegico para el sistema de moda'  AND dates = '2014' THEN 1 ELSE 0 END) Mercadeo,
                            SUM(CASE WHEN semI_categoria = 'Diseño y desarrollo de investigaciones de mercado' AND dates = '2014' THEN 1 ELSE 0 END) DiseñoMercado,
                            SUM(CASE WHEN semI_categoria = 'Otro'  AND dates = '2014' THEN 1 ELSE 0 END) Otro
                        FROM semillero_investigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2014' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10],
                                $result[0][11],
                                $result[0][12],
                                $result[0][13],
                                $result[0][14],
                                $result[0][15],
                                $result[0][16],
                                $result[0][17],
                                $result[0][18],
                                $result[0][19],
                                $result[0][20]]
                            );
            return $result;
        }

        public function readSemilleroIn2015(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN semI_categoria = 'ADSI'  AND dates = '2015' THEN 1 ELSE 0 END) ADSI, 
                            SUM(CASE WHEN semI_categoria = 'Sistemas de gestión ambiental' AND dates = '2015'  THEN 1 ELSE 0 END) SistemasGestion, 
                            SUM(CASE WHEN semI_categoria = 'Diseño de componentes para calzado'  AND dates = '2015' THEN 1 ELSE 0 END) DiseñoComponentes,
                            SUM(CASE WHEN semI_categoria = 'Inyección de plastico'  AND dates = '2015' THEN 1 ELSE 0 END) Inyeccion,
                            SUM(CASE WHEN semI_categoria = 'Extrusión de plastico'  AND dates = '2015' THEN 1 ELSE 0 END) Extrusion,
                            SUM(CASE WHEN semI_categoria = 'Sistemas integrados de gestión de calidad'  AND dates = '2015' THEN 1 ELSE 0 END) SistemasInt,
                            SUM(CASE WHEN semI_categoria = 'Formulación de proyectos'  AND dates = '2015' THEN 1 ELSE 0 END) Formulacion,
                            SUM(CASE WHEN semI_categoria = 'Contabilidad'  AND dates = '2015' THEN 1 ELSE 0 END) Contabilidad,
                            SUM(CASE WHEN semI_categoria = 'Recursos Humanos'  AND dates = '2015' THEN 1 ELSE 0 END) Recursos,
                            SUM(CASE WHEN semI_categoria = 'Logística'  AND dates = '2015' THEN 1 ELSE 0 END) Logistica,
                            SUM(CASE WHEN semI_categoria = 'Salud Ocupacional'  AND dates = '2015' THEN 1 ELSE 0 END) SaludOc,
                            SUM(CASE WHEN semI_categoria = 'Producción de calzado y marroquinería' AND dates = '2015' THEN 1 ELSE 0 END) ProduccionCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de calzado y marroquinería' AND dates = '2015' THEN 1 ELSE 0 END) DiseñoCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de productos industriales' AND dates = '2015' THEN 1 ELSE 0 END) DiseñoProductos,
                            SUM(CASE WHEN semI_categoria = 'Producción y consumo sostenible' AND dates = '2015' THEN 1 ELSE 0 END) ProduccionSos,
                            SUM(CASE WHEN semI_categoria = 'Decoración y adecuación de especies comerciales' AND dates = '2015' THEN 1 ELSE 0 END) Decoracion,
                            SUM(CASE WHEN semI_categoria = 'Gestión y seguridad de bases de datos'  AND dates = '2015' THEN 1 ELSE 0 END) GestionBD,
                            SUM(CASE WHEN semI_categoria = 'Diagnóstico y análisis organizacional'  AND dates = '2015' THEN 1 ELSE 0 END) Diagnostico,
                            SUM(CASE WHEN semI_categoria = 'Mercadeo estrátegico para el sistema de moda'  AND dates = '2015' THEN 1 ELSE 0 END) Mercadeo,
                            SUM(CASE WHEN semI_categoria = 'Diseño y desarrollo de investigaciones de mercado' AND dates = '2015' THEN 1 ELSE 0 END) DiseñoMercado,
                            SUM(CASE WHEN semI_categoria = 'Otro'  AND dates = '2015' THEN 1 ELSE 0 END) Otro
                        FROM semillero_investigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2015' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10],
                                $result[0][11],
                                $result[0][12],
                                $result[0][13],
                                $result[0][14],
                                $result[0][15],
                                $result[0][16],
                                $result[0][17],
                                $result[0][18],
                                $result[0][19],
                                $result[0][20]]
                            );
            return $result;
        }

        public function readSemilleroIn2016(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN semI_categoria = 'ADSI'  AND dates = '2016' THEN 1 ELSE 0 END) ADSI, 
                            SUM(CASE WHEN semI_categoria = 'Sistemas de gestión ambiental' AND dates = '2016'  THEN 1 ELSE 0 END) SistemasGestion, 
                            SUM(CASE WHEN semI_categoria = 'Diseño de componentes para calzado'  AND dates = '2016' THEN 1 ELSE 0 END) DiseñoComponentes,
                            SUM(CASE WHEN semI_categoria = 'Inyección de plastico'  AND dates = '2016' THEN 1 ELSE 0 END) Inyeccion,
                            SUM(CASE WHEN semI_categoria = 'Extrusión de plastico'  AND dates = '2016' THEN 1 ELSE 0 END) Extrusion,
                            SUM(CASE WHEN semI_categoria = 'Sistemas integrados de gestión de calidad'  AND dates = '2016' THEN 1 ELSE 0 END) SistemasInt,
                            SUM(CASE WHEN semI_categoria = 'Formulación de proyectos'  AND dates = '2016' THEN 1 ELSE 0 END) Formulacion,
                            SUM(CASE WHEN semI_categoria = 'Contabilidad'  AND dates = '2016' THEN 1 ELSE 0 END) Contabilidad,
                            SUM(CASE WHEN semI_categoria = 'Recursos Humanos'  AND dates = '2016' THEN 1 ELSE 0 END) Recursos,
                            SUM(CASE WHEN semI_categoria = 'Logística'  AND dates = '2016' THEN 1 ELSE 0 END) Logistica,
                            SUM(CASE WHEN semI_categoria = 'Salud Ocupacional'  AND dates = '2016' THEN 1 ELSE 0 END) SaludOc,
                            SUM(CASE WHEN semI_categoria = 'Producción de calzado y marroquinería' AND dates = '2016' THEN 1 ELSE 0 END) ProduccionCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de calzado y marroquinería' AND dates = '2016' THEN 1 ELSE 0 END) DiseñoCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de productos industriales' AND dates = '2016' THEN 1 ELSE 0 END) DiseñoProductos,
                            SUM(CASE WHEN semI_categoria = 'Producción y consumo sostenible' AND dates = '2016' THEN 1 ELSE 0 END) ProduccionSos,
                            SUM(CASE WHEN semI_categoria = 'Decoración y adecuación de especies comerciales' AND dates = '2016' THEN 1 ELSE 0 END) Decoracion,
                            SUM(CASE WHEN semI_categoria = 'Gestión y seguridad de bases de datos'  AND dates = '2016' THEN 1 ELSE 0 END) GestionBD,
                            SUM(CASE WHEN semI_categoria = 'Diagnóstico y análisis organizacional'  AND dates = '2016' THEN 1 ELSE 0 END) Diagnostico,
                            SUM(CASE WHEN semI_categoria = 'Mercadeo estrátegico para el sistema de moda'  AND dates = '2016' THEN 1 ELSE 0 END) Mercadeo,
                            SUM(CASE WHEN semI_categoria = 'Diseño y desarrollo de investigaciones de mercado' AND dates = '2016' THEN 1 ELSE 0 END) DiseñoMercado,
                            SUM(CASE WHEN semI_categoria = 'Otro'  AND dates = '2016' THEN 1 ELSE 0 END) Otro
                        FROM semillero_investigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2016' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10],
                                $result[0][11],
                                $result[0][12],
                                $result[0][13],
                                $result[0][14],
                                $result[0][15],
                                $result[0][16],
                                $result[0][17],
                                $result[0][18],
                                $result[0][19],
                                $result[0][20]]
                            );
            return $result;
        }

        public function readSemilleroIn2017(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN semI_categoria = 'ADSI'  AND dates = '2017' THEN 1 ELSE 0 END) ADSI, 
                            SUM(CASE WHEN semI_categoria = 'Sistemas de gestión ambiental' AND dates = '2017'  THEN 1 ELSE 0 END) SistemasGestion, 
                            SUM(CASE WHEN semI_categoria = 'Diseño de componentes para calzado'  AND dates = '2017' THEN 1 ELSE 0 END) DiseñoComponentes,
                            SUM(CASE WHEN semI_categoria = 'Inyección de plastico'  AND dates = '2017' THEN 1 ELSE 0 END) Inyeccion,
                            SUM(CASE WHEN semI_categoria = 'Extrusión de plastico'  AND dates = '2017' THEN 1 ELSE 0 END) Extrusion,
                            SUM(CASE WHEN semI_categoria = 'Sistemas integrados de gestión de calidad'  AND dates = '2017' THEN 1 ELSE 0 END) SistemasInt,
                            SUM(CASE WHEN semI_categoria = 'Formulación de proyectos'  AND dates = '2017' THEN 1 ELSE 0 END) Formulacion,
                            SUM(CASE WHEN semI_categoria = 'Contabilidad'  AND dates = '2017' THEN 1 ELSE 0 END) Contabilidad,
                            SUM(CASE WHEN semI_categoria = 'Recursos Humanos'  AND dates = '2017' THEN 1 ELSE 0 END) Recursos,
                            SUM(CASE WHEN semI_categoria = 'Logística'  AND dates = '2017' THEN 1 ELSE 0 END) Logistica,
                            SUM(CASE WHEN semI_categoria = 'Salud Ocupacional'  AND dates = '2017' THEN 1 ELSE 0 END) SaludOc,
                            SUM(CASE WHEN semI_categoria = 'Producción de calzado y marroquinería' AND dates = '2017' THEN 1 ELSE 0 END) ProduccionCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de calzado y marroquinería' AND dates = '2017' THEN 1 ELSE 0 END) DiseñoCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de productos industriales' AND dates = '2017' THEN 1 ELSE 0 END) DiseñoProductos,
                            SUM(CASE WHEN semI_categoria = 'Producción y consumo sostenible' AND dates = '2017' THEN 1 ELSE 0 END) ProduccionSos,
                            SUM(CASE WHEN semI_categoria = 'Decoración y adecuación de especies comerciales' AND dates = '2017' THEN 1 ELSE 0 END) Decoracion,
                            SUM(CASE WHEN semI_categoria = 'Gestión y seguridad de bases de datos'  AND dates = '2017' THEN 1 ELSE 0 END) GestionBD,
                            SUM(CASE WHEN semI_categoria = 'Diagnóstico y análisis organizacional'  AND dates = '2017' THEN 1 ELSE 0 END) Diagnostico,
                            SUM(CASE WHEN semI_categoria = 'Mercadeo estrátegico para el sistema de moda'  AND dates = '2017' THEN 1 ELSE 0 END) Mercadeo,
                            SUM(CASE WHEN semI_categoria = 'Diseño y desarrollo de investigaciones de mercado' AND dates = '2017' THEN 1 ELSE 0 END) DiseñoMercado,
                            SUM(CASE WHEN semI_categoria = 'Otro'  AND dates = '2017' THEN 1 ELSE 0 END) Otro
                        FROM semillero_investigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2017' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10],
                                $result[0][11],
                                $result[0][12],
                                $result[0][13],
                                $result[0][14],
                                $result[0][15],
                                $result[0][16],
                                $result[0][17],
                                $result[0][18],
                                $result[0][19],
                                $result[0][20]]
                            );
            return $result;
        }

        public function readSemilleroIn2018(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN semI_categoria = 'ADSI'  AND dates = '2018' THEN 1 ELSE 0 END) ADSI, 
                            SUM(CASE WHEN semI_categoria = 'Sistemas de gestión ambiental' AND dates = '2018'  THEN 1 ELSE 0 END) SistemasGestion, 
                            SUM(CASE WHEN semI_categoria = 'Diseño de componentes para calzado'  AND dates = '2018' THEN 1 ELSE 0 END) DiseñoComponentes,
                            SUM(CASE WHEN semI_categoria = 'Inyección de plastico'  AND dates = '2018' THEN 1 ELSE 0 END) Inyeccion,
                            SUM(CASE WHEN semI_categoria = 'Extrusión de plastico'  AND dates = '2018' THEN 1 ELSE 0 END) Extrusion,
                            SUM(CASE WHEN semI_categoria = 'Sistemas integrados de gestión de calidad'  AND dates = '2018' THEN 1 ELSE 0 END) SistemasInt,
                            SUM(CASE WHEN semI_categoria = 'Formulación de proyectos'  AND dates = '2018' THEN 1 ELSE 0 END) Formulacion,
                            SUM(CASE WHEN semI_categoria = 'Contabilidad'  AND dates = '2018' THEN 1 ELSE 0 END) Contabilidad,
                            SUM(CASE WHEN semI_categoria = 'Recursos Humanos'  AND dates = '2018' THEN 1 ELSE 0 END) Recursos,
                            SUM(CASE WHEN semI_categoria = 'Logística'  AND dates = '2018' THEN 1 ELSE 0 END) Logistica,
                            SUM(CASE WHEN semI_categoria = 'Salud Ocupacional'  AND dates = '2018' THEN 1 ELSE 0 END) SaludOc,
                            SUM(CASE WHEN semI_categoria = 'Producción de calzado y marroquinería' AND dates = '2018' THEN 1 ELSE 0 END) ProduccionCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de calzado y marroquinería' AND dates = '2018' THEN 1 ELSE 0 END) DiseñoCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de productos industriales' AND dates = '2018' THEN 1 ELSE 0 END) DiseñoProductos,
                            SUM(CASE WHEN semI_categoria = 'Producción y consumo sostenible' AND dates = '2018' THEN 1 ELSE 0 END) ProduccionSos,
                            SUM(CASE WHEN semI_categoria = 'Decoración y adecuación de especies comerciales' AND dates = '2018' THEN 1 ELSE 0 END) Decoracion,
                            SUM(CASE WHEN semI_categoria = 'Gestión y seguridad de bases de datos'  AND dates = '2018' THEN 1 ELSE 0 END) GestionBD,
                            SUM(CASE WHEN semI_categoria = 'Diagnóstico y análisis organizacional'  AND dates = '2018' THEN 1 ELSE 0 END) Diagnostico,
                            SUM(CASE WHEN semI_categoria = 'Mercadeo estrátegico para el sistema de moda'  AND dates = '2018' THEN 1 ELSE 0 END) Mercadeo,
                            SUM(CASE WHEN semI_categoria = 'Diseño y desarrollo de investigaciones de mercado' AND dates = '2018' THEN 1 ELSE 0 END) DiseñoMercado,
                            SUM(CASE WHEN semI_categoria = 'Otro'  AND dates = '2018' THEN 1 ELSE 0 END) Otro
                        FROM semillero_investigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('2018' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10],
                                $result[0][11],
                                $result[0][12],
                                $result[0][13],
                                $result[0][14],
                                $result[0][15],
                                $result[0][16],
                                $result[0][17],
                                $result[0][18],
                                $result[0][19],
                                $result[0][20]]
                            );
            return $result;
        }

        public function readSemilleroTotal(){
            try {
                $sql = "SELECT 
                            SUM(CASE WHEN semI_categoria = 'ADSI'
                            THEN 1 ELSE 0 END) ADSI, 
                            SUM(CASE WHEN semI_categoria = 'Sistemas de gestión ambiental' 
                            THEN 1 ELSE 0 END) SistemasGestion, 
                            SUM(CASE WHEN semI_categoria = 'Diseño de componentes para calzado'
                            THEN 1 ELSE 0 END) DiseñoComponentes,
                            SUM(CASE WHEN semI_categoria = 'Inyección de plastico' 
                            THEN 1 ELSE 0 END) Inyeccion,
                            SUM(CASE WHEN semI_categoria = 'Extrusión de plastico'
                            THEN 1 ELSE 0 END) Extrusion,
                            SUM(CASE WHEN semI_categoria = 'Sistemas integrados de gestión de calidad'
                            THEN 1 ELSE 0 END) SistemasInt,
                            SUM(CASE WHEN semI_categoria = 'Formulación de proyectos' 
                            THEN 1 ELSE 0 END) Formulacion,
                            SUM(CASE WHEN semI_categoria = 'Contabilidad'THEN 1 ELSE 0 END) Contabilidad,
                            SUM(CASE WHEN semI_categoria = 'Recursos Humanos' 
                            THEN 1 ELSE 0 END) Recursos,
                            SUM(CASE WHEN semI_categoria = 'Logística'
                            THEN 1 ELSE 0 END) Logistica,
                            SUM(CASE WHEN semI_categoria = 'Salud Ocupacional' 
                            THEN 1 ELSE 0 END) SaludOc,
                            SUM(CASE WHEN semI_categoria = 'Producción de calzado y marroquinería'
                            THEN 1 ELSE 0 END) ProduccionCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de calzado y marroquinería' 
                            THEN 1 ELSE 0 END) DiseñoCalzado,
                            SUM(CASE WHEN semI_categoria = 'Diseño de productos industriales'
                            THEN 1 ELSE 0 END) DiseñoProductos,
                            SUM(CASE WHEN semI_categoria = 'Producción y consumo sostenible' 
                            THEN 1 ELSE 0 END) ProduccionSos,
                            SUM(CASE WHEN semI_categoria = 'Decoración y adecuación de especies comerciales' 
                            THEN 1 ELSE 0 END) Decoracion,
                            SUM(CASE WHEN semI_categoria = 'Gestión y seguridad de bases de datos' 
                            THEN 1 ELSE 0 END) GestionBD,
                            SUM(CASE WHEN semI_categoria = 'Diagnóstico y análisis organizacional'  
                            THEN 1 ELSE 0 END) Diagnostico,
                            SUM(CASE WHEN semI_categoria = 'Mercadeo estrátegico para el sistema de moda' 
                            THEN 1 ELSE 0 END) Mercadeo,
                            SUM(CASE WHEN semI_categoria = 'Diseño y desarrollo de investigaciones de mercado'
                            THEN 1 ELSE 0 END) DiseñoMercado,
                            SUM(CASE WHEN semI_categoria = 'Otro'
                            THEN 1 ELSE 0 END) Otro
                        FROM semillero_investigacion";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            $result = array('Total' => 
                                [$result[0][0],
                                $result[0][1],
                                $result[0][2],
                                $result[0][3],
                                $result[0][4],
                                $result[0][5],
                                $result[0][6],
                                $result[0][7],
                                $result[0][8],
                                $result[0][9],
                                $result[0][10],
                                $result[0][11],
                                $result[0][12],
                                $result[0][13],
                                $result[0][14],
                                $result[0][15],
                                $result[0][16],
                                $result[0][17],
                                $result[0][18],
                                $result[0][19],
                                $result[0][20]]
                            );
            return $result;
        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
