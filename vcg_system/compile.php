<?php
	$root = getcwd();
	include("config.php");
	include("classes/class.core.php");
	include("classes/class.var.php");
	include("classes/class.template.php");
	include("classes/class.connection.php");
	include("classes/class.query.builder.php");

	// initialize classes
	$classes = new stdClass();
	$template = new template();
	$vars = new variable();
	$core = new core();
	$connection = new Connection();
	$queryBuilder = new Builder();

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
	$sdb = $vars->obj();
	$sdb->status = $connection->MySQL->Connection;
	$sdb->error = $connection->MySQL->Error;
	$sdb->builder = $queryBuilder;
	$sdb->helper = $connection;

	// tdata structure;
	$tdata = $vars->obj();
	$tdata->title = WEB_TITLE;
	$tdata->root = $root;

	# default setting
	$tdata->view = $vars->obj();
	$tdata->view->contact = true;
	$tdata->view->footer = true;
	$tdata->view->header = true;
	$tdata->view->breadcrumb = false;
	$tdata->view->hiddenbar = true;
	$tdata->view->navbar = true;

	$tdata->theme = $vars->obj();
	$tdata->theme->path = THEME_PATH;
	$tdata->theme->list = THEME_LIST_PATH;
	$tdata->theme->rootURL = ROOT_URL;
	$template->set($tdata);
	
	// route redirection 
	$route = $vars->obj();
	$route->root = "$root";
	$core->set($route);

	#setting up request variable
	$request = $vars->obj();
	$request->template = $template;

	#setting up database variables
	$request->db = $sdb;

	#setting up root on to pass on route files
	$request->path = $vars->obj();
	$request->path->root = $root;

	#setting up additional requirement
	$request->require = $vars->obj();
	$request->require->login = 0;

	#input request passing to an object
	$request->req = $vars->obj();
	$request->req->post = $_POST;
	$request->req->get = $parsed_input;
	$request->req->method = $_SERVER['REQUEST_METHOD'];

	$request->flag = "";

	if(strpos($serverUrl, "?") !== false){
	    $request->url = strstr($serverUrl, '?', true);
	} else{
	    $request->url = $serverUrl;
	}
	
	include('route.php');
?>	