<?php
	$root = getcwd();
	include("config.php");
	include("classes/class.core.php");
	include("classes/class.template.php");
	include("classes/class.connection.php");
	include("classes/class.query.builder.php");

	// initialize classes
	$classes = new stdClass();
	$template = new template();
	$core = new core();
	$connection = new Connection();
	$queryBuilder = new Builder();
	$helper = new stdClass();

	// input
	$input = isset($_GET["input"]) ? $_GET["input"] : null;
	$serverUrl = $_SERVER['REQUEST_URI'];

	// parse input
	$parse_url = parse_url($serverUrl, PHP_URL_QUERY);
	$parsed_input = array();
	if(isset($parse_url)){
		$parse_url = explode("&", $parse_url);
		$p_count = count($parse_url);
		for($a = 0; $a < $p_count; $a++){
			$index = $parse_url[$a];
			$value = explode("=", $index, 2);
			$parsed_input[$value[0]] = $value[1];
		}
	}
	
	// database varaibles
	$sdb = $core->obj();
	$sdb->status = $connection->MySQL->Connection;
	$sdb->error = $connection->MySQL->Error;
	$sdb->builder = $queryBuilder;
	$sdb->helper = $connection;

	$cHelper = count(HELPER);
	if($cHelper > 0){
		for($a = 0; $a < $cHelper; $a++){
			$index = HELPER[$a];
			include("modules/helper/$index.php");
			$helper->$index = new $index($sdb->builder, $sdb->helper);
		}
	}

	// tdata structure;
	$tdata = $core->obj();
	$tdata->title = WEB_TITLE;
	$tdata->root = $root;

	# default setting
	$tdata->view = $core->obj();
	$tdata->view->contact = true;
	$tdata->view->footer = true;
	$tdata->view->header = true;
	$tdata->view->breadcrumb = false;
	$tdata->view->hiddenbar = true;
	$tdata->view->navbar = true;
	$tdata->view->sidebar = true;

	$tdata->theme = $core->obj();
	$tdata->theme->path = THEME_PATH;
	$tdata->theme->list = THEME_LIST_PATH;
	$tdata->theme->rootURL = ROOT_URL;
	$tdata->sidebarData = $helper->component->generateSidebar();
	$template->set($tdata);
	
	// route redirection 
	$route = $core->obj();
	$route->root = "$root";
	$core->set($route);

	#setting up request variable
	$request = $core->obj();
	$request->template = $template;
	$request->root = "$root";

	#setting up database variables
	$request->db = $sdb;

	#setting up root on to pass on route files
	$request->path = $core->obj();
	$request->path->root = $root;

	#setting up additional requirement
	$request->require = $core->obj();
	$request->require->login = 0;

	#input request passing to an object
	$request->req = $core->obj();
	$request->req->post = $_POST;
	$request->req->get = $parsed_input;
	$request->req->method = $_SERVER['REQUEST_METHOD'];

	$request->flag = "";
	$request->default_pages = "pages";

	$request->specialRole = SPECIAL_ROLE;

	#helper 
	$request->helper = $core->obj();
	$request->helper = $helper;

	if(strpos($serverUrl, "?") !== false){
	    $request->url = strstr($serverUrl, '?', true);
	    $request->fullurl = strstr($serverUrl, '?', true);
	} else{
	    $request->url = $serverUrl;
	    $request->fullurl = $serverUrl;
	}

	// Custom routes
	$core->router($request);
?>	