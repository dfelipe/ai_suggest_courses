<?php
// Archivo: /blocks/mi_bloque/block_mi_bloque.php

class block_avanza extends block_base {
    public function init() {
        $this->title = get_string('Avanza', 'block_avanza');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;
        $this->content->text   = $this->obtener_saludo();
        $this->content->footer = 'Esperamos que estas sugerencias sean útiles para ti. ¡Que tengas una excelente experiencia!';

        return $this->content;
    }

    private function obtener_saludo() {
        //global $USER;
        //$saludo = '¡Hola Daniel!!, ' . fullname($USER) . '!';
        //return $saludo;

	global $USER, $DB;

	// Obtener el nombre del usuario actual desde la base de datos
    	$user = $DB->get_record('user', array('id' => $USER->id));
	$user = $DB->get_record('user', array('id' => $USER->id), 'id, firstname, lastname, username, city');

	// Construir el mensaje de saludo personalizado

	$datos = "2,13,3,1,90";
	$output = exec("python3 /Users/dvelasquez/Documents/Personal/funciones.py {$datos}");


	// Ejecutar el script Python y capturar la salida y los errores
	//exec("python3 /Users/dvelasquez/Documents/Personal/funciones.py {$datos}", $output, $return_var);



	//$saludo = '¡Hola ' . fullname($user) . '!' . " ({$user->username}), ciudad: {$user->city}" . "{$output}" . ' error: ' . "{$return_var}";
	$saludo = '¡Hola ' . fullname($user) . '!' . "{$output}";
	$content = '<div class="hello-personalized">';
	$content .= get_string('blockstring', 'block_hello_personalized', fullname($user));
    	$content .= '</div>';

	// Devolver el contenido del bloque

	//Llamada a la función en Python
	//$nombre = $user->username;

	//echo $output;
	//$saludo = '¡Holas holas!!, ' . $output;


    	return $saludo;



    }
}
