<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CV19 - Software Engineering Project 2020';
$url = 'http://progetto.localhost'
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
   
    
    <!-- CSS Bootstrap 4 -->
    <?php echo $this->Html->css('bootstrap.min') ?>
     <!-- CSS Custom -->
     <?php echo $this->Html->css('style') ?>

    <?php echo $this->Html->css('owl.carousel') ?>
    <?php echo $this->Html->css('font-awesome.min') ?>
    <?php echo $this->Html->css('switcher') ?>
    <!-- Switcher-->
    <?php echo $this->Html->css('blue') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
</head>
<body>

	<!-- Header -->
	
	<?php if($_SERVER['REQUEST_URI'] != '/users/login' && $_SERVER['REQUEST_URI'] != '/users/register'){?>
	<header id="header" class="transparent-header">
		<nav class="navbar navbar-expand-lg fixed-top" id="header_nav">
			<div class="container-fluid">
				<div class="row header_row">
					<div class="col-md-3 col-sm-12 col-xs-12">
						<div class="navbar-header">
							<div class="logo"> <a href="<?=$url?>/"><img src="<?=$url?>/webroot/img/logo.png" alt="image" /></a>
							</div>
						</div>
						<button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse"
							class="navbar-toggler" type="button">
							<i class="fa fa-bars"></i>
						</button>
					</div>


					<div class="col-md-9 col-sm-12 col-xs-12">
						<div class="collapse navbar-collapse" id="navigation">
                           
							<ul class="nav navbar-nav mr-auto">
                                <li>
                                  <a href="<?=$url?>/">Home</a>
                                </li>
                                <li >
                                    <?php
                                        echo $this->Html->link('Alberghi', ['controller' => 'Events', 'action' => 'category', 'Albergo']);
                                    ?>
                                </li>
                                <li>
                                    <?php
                                        echo $this->Html->link('Ristoranti', ['controller' => 'Events', 'action' => 'category', 'Ristorante']);
                                    ?>
                                </li>
                                <li>
                                    <?php
                                        echo $this->Html->link('Attrazioni', ['controller' => 'Events', 'action' => 'category', 'Attrazione']);
                                    ?>
                                </li>
                                <?php 
                                if ($this->request->session()->read('Auth.User')){
                                    echo '<span style="color: #17a2b8; font-weight: 800;">Benvenuto/a '. $this->request->session()->read('Auth.User.name') . '!&nbsp;&nbsp;&nbsp;</span>';
                                }
                            ?>
                                <?php 
                                    if ($this->request->session()->read('Auth.User')){
                                        echo '<li class="menu-item-has-children"><a href="#">Impostazioni</a> <span class="arrow"></span>
                                            <ul class="sub-menu">
                                                <li>
                                                    '. $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout']) . '    
                                                </li>
                                            </ul>
                                        </li>';
                                    }
                                    else{?>
                                        <li >
                                                <?php echo $this->Html->link('Accedi', ['controller' => 'Users', 'action' => 'login']);?>
                                        </li>
                                        <?php } ?>          
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- /Header -->
	<?php } ?>

    <?= $this->Flash->render() ?>
    
        <?= $this->fetch('content') ?>
        
    
<?php if($_SERVER['REQUEST_URI'] != '/users/login' && $_SERVER['REQUEST_URI'] != '/users/register'){?>
   <!-- Footer -->
	<footer id="footer" class="footer_2 secondary-bg">
		<div class="container">
			<div class="footer_widgets">
				<div class="footer_nav">
					<ul>
					<li>
                                  <a href="<?=$url?>/">Home</a>
                                </li>
                                <li >
                                    <?php
                                        echo $this->Html->link('Alberghi', ['controller' => 'Events', 'action' => 'category', 'Albergo']);
                                    ?>
                                </li>
                                <li>
                                    <?php
                                        echo $this->Html->link('Ristoranti', ['controller' => 'Events', 'action' => 'category', 'Ristorante']);
                                    ?>
                                </li>
                                <li>
                                    <?php
                                        echo $this->Html->link('Attrazioni', ['controller' => 'Events', 'action' => 'category', 'Attrazione']);
                                    ?>
                                </li>
					</ul>
				</div>
			</div>

		</div>

		<div class="footer_bottom">
			<div class="container">
				<div class="row">

					<div class="col-md-6">
						<p>Copyright &copy; 2020 Progetto Ingegneria del Software. All Rights Reserved</p>
					</div>

					<div class="col-md-6">
						<div class="follow_us">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>
	<?php } ?>


    <?php echo $this->Html->script('jquery.min') ?>
    <?php echo $this->Html->script('popper.min') ?>
    <?php echo $this->Html->script('bootstrap.min') ?>
    <!--Carousel-JS--> 
    <?php echo $this->Html->script('owl.carousel.min') ?>
    <!--Map-JS--> 
    <script src='http://maps.google.com/maps/api/js?key=AIzaSyAQsTHPE1hhsGg77C0BG8p5uIAIuFraE0w&#038;ver=5.3.2'></script>
    <?php echo $this->Html->script('infobox') ?>
    <?php echo $this->Html->script('maps') ?>
    <?php echo $this->Html->script('interface') ?>
	<?php echo $this->Html->script('switcher') ?>
	
	
<script>

$("#review").change(function(){ 
	i=1;
	$('#error').empty();
	j = 0;
    $('.review_score').each(function() {
	final = $('#'+i).children('.review_detail').children('.listing_rating').children('p').children('.review_score').html();
        if($('#review option:selected').val() != final && $('#review option:selected').val() != 0 ){
            $('.review_score').closest('#'+i).css('display', 'none');
        }
		else{
			j = 1;
			$('.review_score').closest('#'+i).css('display', 'block');
		}


      i++;

    });

	if(j == 0){
		$('#error').append('Non sono presenti strutture con questo filtro');
	}


});

</script>

</body>
</html>
