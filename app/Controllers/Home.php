<?php
    namespace App\Controllers;
    class Home extends BaseController
    {
        //---------- FUNCIÓN PRINCIPAL ----------//
        public function index()
        {
            $response = __getAll();
            $result = json_decode($response, true);
            if (!empty($result) && $result['code'] == 200) {
                return view('header')
                    .view('home', $result)
                    .view('footer');
            } else {
                $queryAlert['alertIcon'] = "error";
                $queryAlert['alertTitle'] = "ATENCIÓN";
                $queryAlert['alertText'] = "Ocurrio un error. Intentalo nuevamente.";
                $queryAlert['alertRuta'] = "ruta";
                return view('header')
                .view('white')
                .view('popup', $queryAlert)
                .view('footer');
            }
        }
        //---------- FUNCIÓN PARA CREAR UN USUARIO ----------//
        public function create()
        {
            $queryForm['name'] = trim(mb_strtoupper($this -> request -> getPost('name'), "UTF-8"));
            $queryForm['email'] = trim(mb_strtoupper($this -> request -> getPost('email'), "UTF-8"));
            $queryForm['pass'] = hash('whirlpool', trim($this -> request -> getPost('pass')));
            $queryForm['location'] = trim(mb_strtoupper($this -> request -> getPost('location'), "UTF-8"));
            $queryForm['phone'] = trim($this -> request -> getPost('phone'));
            $queryForm['date'] = trim($this -> request -> getPost('birthday'));
            if (!empty($queryForm['name']) && !empty($queryForm['email']) && !empty($queryForm['pass']) && !empty($queryForm['location']) && !empty($queryForm['phone']) && !empty($queryForm['date'])) {
                $response = __add($queryForm);
                $result = json_decode($response, true);
                if (!empty($result) && $result['code'] == 200) {
                    $queryAlert['alertIcon'] = "success";
                    $queryAlert['alertTitle'] = "LISTO";
                    $queryAlert['alertText'] = "Se agrego correctamente el usuario.";
                    $queryAlert['alertRuta'] = "ruta";
                    return view('header')
                        .view('white')
                        .view('popup', $queryAlert)
                        .view('footer');
                } else {
                    $queryAlert['alertIcon'] = "error";
                    $queryAlert['alertTitle'] = "ATENCIÓN";
                    $queryAlert['alertText'] = "Ocurrio un error. Intentalo nuevamente.";
                    $queryAlert['alertRuta'] = "ruta";
                    return view('header')
                        .view('white')
                        .view('popup', $queryAlert)
                        .view('footer');
                }
            } else {
                $queryAlert['alertIcon'] = "error";
                $queryAlert['alertTitle'] = "ATENCIÓN";
                $queryAlert['alertText'] = "Ocurrio un error. Intentalo nuevamente.";
                $queryAlert['alertRuta'] = "ruta";
                return view('header')
                    .view('white')
                    .view('popup', $queryAlert)
                    .view('footer');
            }
        }
        //---------- FUNCIÓN PARA VER LA INFORMAICÓN DE UN USUARIO ----------//
        public function read($id = NULL)
        {
            if (!empty($id)) {
                $response = __getUser($id);
                $result = json_decode($response, true);
                // echo "<pre>"; print_r($result); die(); echo "</pre>";
                if (!empty($result) && $result['code'] == 200) {
                    return view('header')
                        .view('detalle', $result)
                        .view('footer');
                } else {
                    $queryAlert['alertIcon'] = "error";
                    $queryAlert['alertTitle'] = "ATENCIÓN";
                    $queryAlert['alertText'] = "Ocurrio un error. Intentalo nuevamente.";
                    $queryAlert['alertRuta'] = "ruta";
                    return view('header')
                    .view('white')
                    .view('popup', $queryAlert)
                    .view('footer');
                }
            } else {
                $queryAlert['alertIcon'] = "error";
                $queryAlert['alertTitle'] = "ATENCIÓN";
                $queryAlert['alertText'] = "Ocurrio un error. Intentalo nuevamente.";
                $queryAlert['alertRuta'] = "ruta";
                return view('header')
                    .view('white')
                    .view('popup', $queryAlert)
                    .view('footer');
            }
        }
        //---------- FUNCIÓN PARA VER LA INFORMAICÓN DE UN USUARIO ----------//
        public function update($id = NULL)
        {
            if (!empty($id)) {
                $response = __getUser($id);
                $result = json_decode($response, true);
                // echo "<pre>"; print_r($result); die(); echo "</pre>";
                if (!empty($result) && $result['code'] == 200) {
                    return view('header')
                        .view('update', $result)
                        .view('footer');
                } else {
                    $queryAlert['alertIcon'] = "error";
                    $queryAlert['alertTitle'] = "ATENCIÓN";
                    $queryAlert['alertText'] = "Ocurrio un error. Intentalo nuevamente.";
                    $queryAlert['alertRuta'] = "ruta";
                    return view('header')
                    .view('white')
                    .view('popup', $queryAlert)
                    .view('footer');
                }
            } else {
                $queryAlert['alertIcon'] = "error";
                $queryAlert['alertTitle'] = "ATENCIÓN";
                $queryAlert['alertText'] = "Ocurrio un error. Intentalo nuevamente.";
                $queryAlert['alertRuta'] = "ruta";
                return view('header')
                    .view('white')
                    .view('popup', $queryAlert)
                    .view('footer');
            }
        }
        //---------- FUNCIÓN PARA ACTUALIZAR LA INFORMAICÓN DE UN USUARIO ----------//
        public function updateAction()
        {
            $queryForm['ID'] = trim(mb_strtoupper($this -> request -> getPost('idUser'), "UTF-8"));
            $queryForm['name'] = trim(mb_strtoupper($this -> request -> getPost('name'), "UTF-8"));
            $queryForm['email'] = trim(mb_strtoupper($this -> request -> getPost('email'), "UTF-8"));
            $queryForm['pass'] = hash('whirlpool', trim($this -> request -> getPost('pass')));
            $queryForm['location'] = trim(mb_strtoupper($this -> request -> getPost('location'), "UTF-8"));
            $queryForm['phone'] = trim($this -> request -> getPost('phone'));
            $queryForm['date'] = trim($this -> request -> getPost('birthday'));
            if (!empty($queryForm['name']) && !empty($queryForm['email']) && !empty($queryForm['pass']) && !empty($queryForm['location']) && !empty($queryForm['phone']) && !empty($queryForm['date'])) {
                $response = __update($queryForm);
                $result = json_decode($response, true);
                if (!empty($result) && $result['code'] == 200) {
                    $queryAlert['alertIcon'] = "success";
                    $queryAlert['alertTitle'] = "LISTO";
                    $queryAlert['alertText'] = "Se actualizo correctamente el usuario.";
                    $queryAlert['alertRuta'] = "ruta";
                    return view('header')
                        .view('white')
                        .view('popup', $queryAlert)
                        .view('footer');
                } else {
                    $queryAlert['alertIcon'] = "error";
                    $queryAlert['alertTitle'] = "ATENCIÓN";
                    $queryAlert['alertText'] = "Ocurrio un error. Intentalo nuevamente.";
                    $queryAlert['alertRuta'] = "ruta";
                    return view('header')
                        .view('white')
                        .view('popup', $queryAlert)
                        .view('footer');
                }
            } else {
                $queryAlert['alertIcon'] = "error";
                $queryAlert['alertTitle'] = "ATENCIÓN";
                $queryAlert['alertText'] = "Ocurrio un error. Intentalo nuevamente.";
                $queryAlert['alertRuta'] = "ruta";
                return view('header')
                    .view('white')
                    .view('popup', $queryAlert)
                    .view('footer');
            }
        }
        //---------- FUNCIÓN PARA ELIMINAR UN USUARIO ----------//
        public function delete($id = NULL)
        {
            if (!empty($id)) {
                $response = __delete($id);
                $result = json_decode($response, true);
                if (!empty($result) && $result['code'] == 200) {
                    $queryAlert['alertIcon'] = "success";
                    $queryAlert['alertTitle'] = "LISTO";
                    $queryAlert['alertText'] = "Se elimino correctamente el usuario.";
                    $queryAlert['alertRuta'] = "ruta";
                    return view('header')
                        .view('white')
                        .view('popup', $queryAlert)
                        .view('footer');
                } else {
                    $queryAlert['alertIcon'] = "error";
                    $queryAlert['alertTitle'] = "ATENCIÓN";
                    $queryAlert['alertText'] = "Ocurrio un error. Intentalo nuevamente.";
                    $queryAlert['alertRuta'] = "ruta";
                    return view('header')
                    .view('white')
                    .view('popup', $queryAlert)
                    .view('footer');
                }
            } else {
                $queryAlert['alertIcon'] = "error";
                $queryAlert['alertTitle'] = "ATENCIÓN";
                $queryAlert['alertText'] = "Ocurrio un error. Intentalo nuevamente.";
                $queryAlert['alertRuta'] = "ruta";
                return view('header')
                    .view('white')
                    .view('popup', $queryAlert)
                    .view('footer');
            }
        }
    }
