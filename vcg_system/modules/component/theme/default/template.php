<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Html</title>
</head>
<body>
	<div>
		<?php
            if($theme->view->header){ 
                include("$theme->header"); 
            }
        ?>
	</div>
	<div>
		<?php
			if($theme->contentFilter->isFile){
				include("$theme->content");
			}else{
				echo "$theme->content";
			}
		?>
	</div>
	<div>
		<?php 
            if($theme->view->footer){ 
                include("$theme->footer");    
            } 
        ?>
	</div>
</body>
</html>