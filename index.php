<?php
session_start();
ob_start();
include("includes/conn.php");
include("includes/functions.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<title>Totally Trunk</title>
<link rel="stylesheet" type="text/css" href="css/normal.css">
<link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 900px)' href='css/medium.css' />
<link rel='stylesheet' media='screen and (min-width: 320px) and (max-width: 700px)' href='css/small.css' />
</head>
<body>
	<div id="wrapper">
    	<header>
        <img src="i/logo.png" width="600" height="250">
        </header>
        <nav>
        	<ul>
            	<li><a href="index.php">Forside</a></li>
            	<li><a href="?m=kontakt">Kontakt</a></li>
            	<li><a href="?m=miljo">Miljø</a></li>
            	<li><a href="?m=politisk">Politisk</a></li>
            	<li><a href="?m=arbejdsplads">Arbejdes plads</a></li>
            	<li><a href="?m=shop">Shop</a></li>
                <?php
					if(isset($_SESSION['u-id']))
					{
						echo '<li><strong><a href="?admin">>Admin panel<</a></strong></li>';
						echo '<li><a href="?m=logud">Log ud</a></li>';
					}
					else
					{
						echo '<li><a href="?m=login">Login</a></li>';
					}
				?>         	
            </ul>
        </nav>
        <section>
        <?php
			if(isset($_GET['m']))
			{
				include ('m_navigation.php');	
			}
			else if(isset($_GET['admin']))
			{
				include ('admin/adminpanel.php');	
			}
			else
			{
				include('forside.php');	
			}
		?>
        	
        </section>
    </div>
    
    <?php echo "<pre style='background-color:white; width:400px; top:0; position:absolute;'>Session "; print_r($_SESSION); echo "</pre>" ?>
    <?php echo "<pre style='background-color:white; width:400px; top:0; right:0; position:absolute;'>POST "; print_r($_POST); echo "</pre>" ?>

</body>
</html>