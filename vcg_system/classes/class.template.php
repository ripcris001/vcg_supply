<?php
	class template extends core {
		public $structure, $contentdata;
		public function __construct(){}
		public function set($data){
			$this->structure = new stdClass();
			$this->structure = $data;
			$this->structure->footer = $this->parseExtention(isset($data->footer) ? $data->footer : 'footer');
			$this->structure->header = $this->parseExtention(isset($data->header) ? $data->header : 'header');
			$this->structure->sidebar = $this->parseExtention(isset($data->sidebar) ? $data->sidebar : 'sidebar');
			$this->structure->template = $this->parseExtention(isset($data->template) ? $data->template : 'template');
			$this->structure->navbar = $this->parseExtention(isset($data->navbar) ? $data->navbar : 'navbar');
			$this->structure->themePath = $this->joinPath($data->root, $data->theme->path);
			$this->structure->themeActivePath = "";
			$this->structure->assetPath = "";
			$this->structure->contentFilter = new stdClass();
			$this->structure->contentFilter->isFile = 0;
			$this->structure->sidebarData = isset($data->sidebarData) ? $data->sidebarData : array();
			return $this;
		}
		public function update($field, $value, $file){
			if(isset($this->structure->$field)){
				if($file){
					$this->structure->$field = "$value.php";
				}else{
					$this->structure->$field = $value;
				}
			}
		}
		public function content($data, $file = false){
			if($file){
				$this->structure->content = $this->parseExtention($data);
				$this->structure->contentFilter->isFile = 1;
			}else{
				$this->structure->content = $data;
				$this->structure->contentFilter->isFile = 0;
			}
			return $this;
		}
		
		public function data($data){
			$this->contentdata = $data;
			return $this;
		}

		public function render($data, $sfile = null){
			if(!isset($_SESSION)){
				$this->check_session();
			}
			$this->theme($data);
			$this->buildFilePaths($this->structure->contentFilter->isFile);
			$login = $this->get_session('login');
			$theme = $this->structure;
			$data = $this->contentdata;
			$user = isset($_SESSION) ? $this->get_session("login") : $this->obj();
			$sidebar = $this->structure->sidebarData;
			if(isset($sfile)){
				if($this->structure->contentFilter->isFile){
					include($this->structure->content);
				}else{
					include($this->structure->template);
				}
			}else{
				include($this->structure->template);
			}
		}
		
		// private functions 
		private function parseExtention($data){
			return $data.".php";
		}

		private function buildFilePaths($data){
			$this->structure->footer = $this->joinPath($this->structure->themeActivePath, $this->structure->footer);
			$this->structure->header = $this->joinPath($this->structure->themeActivePath, $this->structure->header);
			$this->structure->template = $this->joinPath($this->structure->themeActivePath, $this->structure->template);
			$this->structure->navbar = $this->joinPath($this->structure->themeActivePath, $this->structure->navbar);
			if($data == 1){
				$content = $this->joinPath($this->structure->themeActivePath, 'pages');
				$this->structure->content = $this->joinPath($content, $this->structure->content);
			}
		}

		private function joinPath($start, $end){
			return $start."/".$end;
		}

		private function theme($data){
			if(!is_null($this->structure->theme->list[$data])){
				$this->structure->themeActivePath = $this->joinPath($this->structure->themePath, $this->structure->theme->list[$data]);

				$assetPath = $this->joinPath($this->structure->theme->rootURL."/".$this->structure->theme->path, $this->structure->theme->list[$data]);
				$this->structure->assetPath = $this->joinPath($assetPath, 'assets');
			}
			return $this;
		}
	}
	
?>