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
		public function route($data){
			$template = $data->template;
			$file = $data->route;
			$path = "$this->rootPath/routes/$file.php";
			$core = $this;
			$req = $data->req;
			if($data->require->login == 1){
				if($this->check_session()){
					if(file_exists($path)){
						include($path);
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

		public function check_session(){
			session_start();
			if(isset($_SESSION)){
				if(count($_SESSION)){
					$session = $_SESSION;
					if($session['lock']){
						
					}else{
						return true;
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		public function redirect($data){
			header("location: $data");
		}

		# get session data
		public function get_session(){
			if(isset($param)){
				$session = $this->check_session();
				if($session){
					if(isset($_SESSION[$param])){
						return $_SESSION[$param];
					}else{
						return "";
					}
				}else{
					return "";
				}
			}
		}

		# encrypt input
		public function encrypt($data){
			//$iv_length = openssl_cipher_iv_length($this->encryption_cipher); 
			$encryption_iv = substr(hash('sha256', $this->encryption_iv), 0, 16); 
			$encryption_key = hash('sha256', $this->encryption_key); 
			$encryption = openssl_encrypt($data, $this->encryption_cipher, $encryption_key, 0, $encryption_iv); 
			return $encryption;
		}

		# decrypt input
		public function decrypt($data){
			//$iv_length = openssl_cipher_iv_length($this->encryption_cipher); 
			$decryption_iv = substr(hash('sha256', $this->encryption_iv), 0, 16);
			$decryption_key = hash('sha256', $this->encryption_key); 
			$decryption = openssl_decrypt ($data, $this->encryption_cipher, $decryption_key, 0, $decryption_iv);
			return $decryption;
		}

		# return json format output
		public function response($data){
			http_response_code(200);
			print_r(json_encode($data));
			exit(1);
		}
	}
?>