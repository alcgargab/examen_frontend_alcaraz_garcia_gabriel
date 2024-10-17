<?php
    //---------- FUNCIÓN PARA CONVERTIR LA FECHA EN TEXTO ----------//
    if(!function_exists('__convertDateToLetter')) {
        function __convertDateToLetter($date = NULL)
        { 
            $fecha = substr($date, 0, 10);
            $numeroDia = date('d', strtotime($date));
            $dia = date('l', strtotime($date));
            $mes = date('F', strtotime($date));
            $anio = date('Y', strtotime($date));
            $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
            $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
            $nombredia = str_replace($dias_EN, $dias_ES, $dia);
            $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
            $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
            // $fechaText = $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
            $fechaText = $nombreMes." ".$numeroDia.", ".$anio;
            return $fechaText;
        }
    }
    //---------- FUNCIÓN PARA OBETNER EDAD ----------//
    if(!function_exists('__getAge')) {
        function __getAge($fecha_nacimiento = NULL)
        { 
            $nacimiento = new DateTime($fecha_nacimiento);
            $date = new DateTime(date("Y-m-d"));
            $diferencia = $date->diff($nacimiento);
            return $diferencia->format("%y");
        }
    }
    //---------- FUNCIÓN PARA OBTENER TODOS LOS USUARIOS ----------//
    if(!function_exists('__getAll')) {
        function __getAll()
        {
            try {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'http://localhost/examen_backend_alcaraz_garcia_gabriel',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                return $response;
            } catch (Exception $e) {
                return $e -> getMessage();
                // return array(
                //     "code" => 500,
                //     "data" => $e -> getMessage()
                // );
            }
        }
    }
    //---------- FUNCIÓN PARA AGREGAR UN USUARIO ----------//
    if(!function_exists('__add')) {
        function __add($queryForm = NULL)
        {
            try {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'http://localhost/examen_backend_alcaraz_garcia_gabriel/create',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => 'name='.$queryForm["name"].'&email='.$queryForm["email"].'&password='.$queryForm["pass"].'&location='.$queryForm["location"].'&phone='.$queryForm["phone"].'&birthday='.$queryForm["date"],
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/x-www-form-urlencoded'
                    ),
                ));

                $response = curl_exec($curl);
                curl_close($curl);
                return $response;
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }
    }
    //---------- FUNCIÓN PARA OBTENER UN USUARIO ----------//
    if(!function_exists('__getUser')) {
        function __getUser($id = NULL)
        {
            try {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'http://localhost/examen_backend_alcaraz_garcia_gabriel/read/'.$id,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                return $response;
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }
    }
    //---------- FUNCIÓN PARA ACTUALIZAR UN USUARIO ----------//
    if(!function_exists('__update')) {
        function __update($queryForm = NULL)
        {
            try {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'http://localhost/examen_backend_alcaraz_garcia_gabriel/update/'.$queryForm["ID"],
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'PUT',
                    CURLOPT_POSTFIELDS => 'name='.$queryForm["name"].'&email='.$queryForm["email"].'&password='.$queryForm["pass"].'&location='.$queryForm["location"].'&phone='.$queryForm["phone"].'&birthday='.$queryForm["date"],
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/x-www-form-urlencoded'
                    ),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                return $response;
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }
    }
    //---------- FUNCIÓN PARA ELIMINAR UN USUARIO ----------//
    if(!function_exists('__delete')) {
        function __delete($id = NULL)
        {
            try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://localhost/examen_backend_alcaraz_garcia_gabriel/delete/'.$id,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            return $response;
            } catch (Exception $e) {
                return $e -> getMessage();
            }
        }
    }