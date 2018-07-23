<?php

define("CONFIG_FILE", "config.ini");

function t($text, $printable = true, $encode = true)
{
	global $conn;
	$lang = getDefaultLanguage();
	
	if($query = $conn->prepare("SELECT target FROM translation WHERE source = ? AND lang = ?")) {
		$query->bind_param("ss", $text, $lang);
		$query->execute();
		$query->bind_result($result);
		
		$args = func_get_args();
		
		if($query->fetch() != NULL){
			$args[0] = $encode ? utf8_encode($result) : $result;
		}
		
		$query->close();
		
		if($printable) {
			call_user_func_array('printf', $args);
		} else {
			return call_user_func_array('sprintf', $args);
		}
	}
}

function is_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function error($code, $msg, $field = null) {
	header('HTTP/1.1 ' . $code . ' ' . $msg);
	if($field != null) {
		header('Field: ' . $field);
	}
	die('The user is not defined');
}

function is_known_user($hash = NULL, $request_method = 'GET') {
	$hash = getHashParameter($hash, $request_method);
	return isset($hash) && !empty($hash) && user_exists($hash);
}

function getHashParameter($hash = NULL, $request_method = 'GET') {
	if($hash == NULL) {
		$hash = $request_method == 'GET' ? $_GET['hash'] : $_POST['hash'];
	}
	return $hash;
}
function user_exists($hash) {
	global $conn;
	if($query = $conn->prepare("SELECT 1 FROM user WHERE hash = ?")) {
		$query->bind_param("s", $hash);
		$query->execute();
		try {
			return $query->fetch();
		} finally {
			$query->close();
		}
	}
}

function is_new_user($hash = NULL) {
	$user = getUser($hash);
	if ($user == NULL) {
		http_response_code(304);
		die('The user with the hash ' . $hash . ' doesn\'t exists.');
	}
	return $user['name'] === NULL || $user['email'] === NULL || $user['pass'] === NULL;
}

function getUser($hash = NULL, $request_method = 'GET') {
	$hash = getHashParameter($hash, $request_method);
	global $conn;
	if($query = $conn->prepare("SELECT id, hash, phase, pos, name, email, pass FROM user WHERE hash = ?")) {
		$query->bind_param("s", $hash);
		$query->execute();
		$query->bind_result($id, $hash, $phase, $pos, $name, $email, $pass);
		if($query->fetch()) {
			$query->close();
			return array(
				'id' => $id, 'hash' => $hash, 'phase' => $phase, 'pos' => $pos, 'name' => $name, 'email' => $email, 'pass' => $pass
			);
		}
		return null;
	}
}

function is_user_starting() {
	$hash = getHashParameter();
	global $conn;
	if($query = $conn->prepare("SELECT pos FROM user WHERE hash = ?")) {
		$query->bind_param("s", $hash);
		$query->execute();
		$query->bind_result($pos);
		if($query->fetch()) {
			$query->close();
			return $pos === null;
		} else {
			die('The user with hash \'' . $_GET['hash'] . '\' doesn\'t exists.');
		}
	}
}

function updateUser($user, $name, $email, $pass) {
	global $conn;
	if($query = $conn->prepare("UPDATE user SET name = ?, email = ?, pass = AES_ENCRYPT(?,UNHEX(MD5(hash))) WHERE id = ?")) {
		$query->bind_param("sssi", $name, $email, $pass, $user['id']);
		$query->execute();
		
		return $user['id'];
	}
	return $conn->error;
}

function connect_db() {
	$props = parse_ini_file(CONFIG_FILE, true);
	
	$servername = $props['database']['servername'];
	$port = $props['database']['port'];
	$database = $props['database']['database'];
	$username = $props['database']['username'];
	$password= $props['database']['password'];
	
	global $conn;
	$conn = new mysqli($servername, $username, $password, $database, $port);
	if ($conn->connect_errno) {
		return false;
	}
	
	return true;
}

function disconnect_db() {
	global $conn;
	$conn->close();
}

function getDefaultLanguage() {
   if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
      return parseDefaultLanguage($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
   }
   else {
      return parseDefaultLanguage(NULL);
   }
}

function parseDefaultLanguage($http_accept, $deflang = "en-us") {

   if (isset($http_accept) && strlen($http_accept) > 1)  {

      // dividir los posibles idiomas en un array
      $x = explode(",",$http_accept);

      foreach ($x as $val) {

         // compruebe el valor q y cree un array asociativa. Si no existe el valor q, es por defecto 1
         if (preg_match("/(.*);q=([0-1]{0,1}.\d{0,4})/i",$val,$matches)) {

            $lang[$matches[1]] = (float)$matches[2];
         } 
         else {

            $lang[$val] = 1.0;
         }
      }

      // retornamos el idioma por defecto el cual es el valor q más alto
      $qval = 0.0;

      foreach ($lang as $key => $value) {

         if ($value > $qval) {

            $qval = (float)$value;
            $deflang = $key;
         }
      }
   }

   return strtolower($deflang);
}
?>