<?php

    class Controller {

        protected $view;

        public function __construct () {
            $this->view = new View();
        }

        public function loadModel ($model) {
            $url = 'modelos/' . $model . 'model.php';
            
            if (file_exists($url)) {
                require $url;

                $modelName = $model . 'Model';
                $this->model = new $modelName;
            }
        }

    }