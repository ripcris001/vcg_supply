<?php
	class core {
		private $rootPath;
		private $encryption_key = "VjWt#9<\=m<uyq6zC=%Yb.&DBe5q^+T]f8k";
		private $encryption_iv = "2zQfC2GEcQ*})gMg";
		private $encryption_cipher = "AES-256-CBC";
		public function __construct(){}
		public function set($data){
			if($data->root){
				$this->rootPath = $data->root;
			}
		}

		# bind route file and
		public function route($data, $test = false){
			$template = $data->template;
			$file = $data->route;
			$path = "$this->rootPath/modules/routes/$file.php";
			$core = $this;
			$req = $data->req;
			$helper = $data->helper;
			$db = new stdClass();
			$db->status = $data->db->status;
			$db->helper = $data->db->helper;
			$db->builder = $data->db->builder;
			if(isset($test) && $test){
				$path = "$this->rootPath/modules/test/routes/$file.php";
			}
			if($data->require->login == 1){
				$routeRoleInput = $core->obj();
				$routeRoleInput->table = 'url_roles';
				$routeRoleInput->condition = [
					["url", "=", $data->fullurl]
				];
				$getRouteRole = $data->helper->universal->query($routeRoleInput);
				$routeRoule = $getRouteRole->status && isset($getRouteRole->data) && count((array)$getRouteRole->data) ? $getRouteRole->data->roles : $core->obj();
				$routeRoule = isset($routeRoule) && count((array)$routeRoule) ? explode(',', $routeRoule) : array();
				if($this->check_session()){
					if(file_exists($path)){
						$getUserRole = $this->get_session("login");
						if(isset($getUserRole) && in_array($getUserRole->user_role_index, $routeRoule) || in_array($getUserRole->user_role_index, $data->specialRole)){
							include($path);
						}else{
							$template->content("error/404", true)->render("frontstore");
						}
					}else{
						$template->content("error/500", true)->render("frontstore");
					}
				}else{
					$this->redirect("/login");
				}
			}else{
				if($data->flag == "login" && $this->check_session()){
					$this->redirect("/");
				}
				if(file_exists($path)){
					include($path);
				}else{
					$template->content("error/500", true)->render("frontstore");
				}
			}
		}

		public function router($request){
			$core = $this;
			$__method = $request->req->method;
			$__url = $request->url;
			$__array_url = explode("/", $__url);
			
			# home page if empty
			if(empty($__array_url[1])){
				include("$this->rootPath/route.php");
			}else{
				if(isset(ROUTE_SOURCE["/$__array_url[1]"])){
					$__parse_url = $this->replace_first_str("/$__array_url[1]", "", $__url);
					if(isset($__parse_url) && strlen($__parse_url) > 0){
						$request->url = $__parse_url;
					}else{
						$request->url = "/";
					}
					$source = ROUTE_SOURCE["/$__array_url[1]"][0];
					$request_type = ROUTE_SOURCE["/$__array_url[1]"][1];
					if(strtolower($__method) == $request_type || strtolower($request_type) == "all"){
						include("$this->rootPath/modules/route_config/$source.php");
					}else{
						if(strtolower($__method) == "get"){
							$request->template->content("error/404", true)->render("frontstore");
						}else{
							http_response_code(404);
							$cout = new stdClass();
							$cout->message = "Error 404: url not found";
							$cout->status = "false";
							$core->route($cout);
						}
					}
					
				}else{
					include("$this->rootPath/route.php");
				}
			}
		}

		public function redirect($data){
			header("location: $data");
		}

		private function replace_first_str($search_str, $replacement_str, $src_str){
		  return (false !== ($pos = strpos($src_str, $search_str))) ? substr_replace($src_str, $replacement_str, $pos, strlen($search_str)) : $src_str;
		}
		# get session data
		public function check_session(){
			session_start();
			if(isset($_SESSION)){
				if(count($_SESSION) > 0){
					$session = $_SESSION;
					// if($session['lock']){
						
					// }else{
						return true;
					// }
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		public function session_timeout_checker(){
			$output = $this->output();
			$session = !isset($_SESSION) ? $this->check_session() : false;
			if(isset($_SESSION)){
				$current_time = strtotime(date("h:i:sa"));
				$session_expire_time = $this->get_session("session_expire");
				if($current_time > $session_expire_time){
					session_destroy();
					$output->message = "Session successfully destroy";
					$output->status = true;
				}else{
					$output->status = false;
				}
			}else{
				$output->message = "Session is already destroy";
			}
			return $output;
		}

		public function get_session($param = null){
			$output = new stdClass();
			$session = !isset($_SESSION) ? $this->check_session() : false;
			if(isset($_SESSION)){
				if(isset($param) && isset($_SESSION[$param])){
					$output = $_SESSION[$param];
					return $output;
				}else{
					$output = $_SESSION;
					return $output;
				}
			}else{
				return $output;
			}
		}

		public function set_session($field, $data){
			$output = $this->output();
			if(isset($field)){
				$session = $this->check_session();
				if(!$session){
					$_SESSION["session_expire"] = strtotime(date("h:i:sa")) + SESSION_TIMEOUT;
					$_SESSION[$field] = new stdClass();
					foreach ($data as $key => $value) {
						$_SESSION[$field]->$key = $value;
					}
				}else{
					$output->message = "Session is already initialize";
					return $output;
				}
			}
		}

		public function destroy_session(){
			$output = $this->output();
			$session = $this->check_session();
			if($session){
				session_destroy();
				$output->message = "Session successfully destroy";
				$output->status = true;
			}else{
				$output->message = "Session is already destroy";
			}
			return $output;
		}

		# encrypt input
		public function encrypt($data, $eiv = null){
			$out = new stdClass();
			if(isset($eiv) && strtolower($eiv) == 'create'){
				$iv = $this->randomChar(16);
			}if(isset($eiv)){
				$iv = $eiv;
			}else{
				$iv = $encryption_iv;
			}
			// $iv_length = openssl_cipher_iv_length($this->encryption_cipher);
			$encryption_iv = substr(hash('sha256', $this->encryption_iv), 0, 16); 
			$encryption_key = hash('sha256', $this->encryption_key); 
			// $encryption = openssl_encrypt($data, $this->encryption_cipher, $encryption_key, 0, $encryption_iv); 
			$encryption = openssl_encrypt($data, $this->encryption_cipher, $encryption_key, 0, $iv);
			$out->hash = $iv;
			$out->enc = $encryption;
			return $out;
		}

		# decrypt input
		public function decrypt($data, $eiv = null){
			if(!isset($eiv)){
				$iv = $this->randomChar(16);
			}else{
				$iv = $eiv;
			}
			//$iv_length = openssl_cipher_iv_length($this->encryption_cipher); 
			$decryption_iv = substr(hash('sha256', $this->encryption_iv), 0, 16);
			$decryption_key = hash('sha256', $this->encryption_key); 
			$decryption = openssl_decrypt ($data, $this->encryption_cipher, $decryption_key, 0, $iv);
			return $decryption;
		}

		public function randomChar($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

		# return default output
		public function output($status = false, $message = "", $data = []){
	        $output = new stdClass();
	        $output->status = $status;
	        $output->message = $message;
	        $output->data = $data ? $data : new stdClass();
	        return $output;
	    }

		# return json format output
		public function response($data){
			http_response_code(200);
			print_r(json_encode($data));
			exit(1);
		}

		public function obj(){
			$object = new stdClass();
			return $object;
		}

		public function sidebar($name = "", $url = null, $role = null){
			$output = new stdClass();
			$output->name = isset($name) ? $name : "";
			$output->url = isset($url) ? $url : "#";
			$output->sub = array();
			$output->icon = "default";
			$output->roles = isset($url) ? $role : array();
			$output->uid = isset($name) ? preg_replace('/\s+/', '_', $name) : '';
			$output->uid = strtolower("sidebar_".$output->uid);
			return $output;
		}
	}
?>