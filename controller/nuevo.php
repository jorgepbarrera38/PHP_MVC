<?php

    class Nuevo extends Controller {

        public function __construct () {
            parent::__construct();
            $this->view->render('nuevo/index');
        }

        public function registrarAlumno () {
            $matricula = $_POST['matricula'];
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];

            $creado = $this->model->insert([
                'matricula' => $matricula,
                'nombres' => $nombres,
                'apellidos' => $apellidos
            ]);

            if ($creado) {
                echo "Nuevo alumno creado";
            } else {
                echo "El alumno no se creó, verifique los datos";
            }
        } 
    }