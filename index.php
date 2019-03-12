<?php 
// error_reporting(1);
require 'vendor/autoload.php';
require 'api_source.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remoteok api</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>
<div class="content">
	<div class="container-fluid">
		 <div class="row">
				<div class="col-md-12">
					<div class="card">

                        <?php
                                echo '<h3>'.$decode_res[0]['legal'].'</h3>';
                                    
                                foreach ($decode_res as $decode):
                                    
                                    if(isset($decode['slug'])){ 

                                        echo        $decode['slug'].' '.
                                                    $decode['id'].' '.
                                                    $decode['epoch'].' '.
                                                    '<h6 style="color:red;">'.$decode['date'].'<h6>'.' '.
                                                    '<h5 style="color:green;">'.$decode['company'].'<h5>'.' ';

                                        echo        "<p><img src=". $decode['company_logo'] ." alt='' ></p>
                                                    <h5>". $decode['position'].'</h5>'.' ';

                                                    foreach ($decode['tags'] as $tag):

                                                           echo  $tag.'<br>';
                                                    endforeach;

                                                    echo '<br><hr>';
                                    }
                                    
                                endforeach;
                        ?>

                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

