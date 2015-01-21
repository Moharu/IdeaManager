<?php
$user = $this->Session->read('Auth.User');
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		IdeaManager
	</title>
	<?php
		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<?php
        echo $this->Html->meta('icon','/app/favicon.ico', array
		('type' =>'icon'));
    ?> 
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><a style="text-decoration:none; background:black;" href="http://localhost/ideas/">IdeaManager</a></h1>
			<!--  <?php echo $user['username']; ?> -->
			<?php
				if($user['img'] == ""){
					$user['img'] = "http://www.tubeisbol.com/sites/default/files/styles/large/public/default_images/default_profile_picture.png";
				}
				if(!empty($user['username'])){
					echo "<img id='imglogin' src='".$user['img']."' alt=''>' > <h2 id='welcome'> Welcome, ".$user['username'].".</h2><h5 id='logout'><a href='http://localhost/users/logout' style='text-decoration:none; color:white;'>logout</a></h5>";
				}
				else{
					echo "<h3 id='h04'><a href='http://localhost/users/register' style='text-decoration:none; color:white;'>Create an account </a></h3>   <h3 id='h05'><a href='http://localhost/users/login'style='text-decoration:none; color:white;'> Log In </a></h3>";
				}
			?>
		<!-- 	<h3 id='h04'><a href='users/register' style='text-decoration:none; color:white;'>Criar uma conta </a></h3>   <h3 id='h05'><a href='users/login'style='text-decoration:none; color:white;'> Log In </a></h3> -->
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
</body>
</html>
