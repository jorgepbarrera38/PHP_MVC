<?php

    class NuevoModel extends Model {
        public function __construct () {
            parent::__construct();
        }

        public function insert ($datos) {
            $query = $this->db->connect()->prepare('INSERT INTO ALUMNOS (MATRICULA, NOMBRES, APELLIDOS) 
                                            VALUES (:matricula, :nombres, :apellidos)');

            if ($query->execute([
                                'matricula' => $datos['matricula'], 
                                'nombres' => $datos['nombres'], 
                                'apellidos' => $datos['apellidos'], 
                            ])) {
                                return true;
                            } else {
                                return false;
                            }
        }
    }