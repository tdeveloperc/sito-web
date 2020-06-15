
<?php $this->Flash->render('message') ?>
<?= $this->Form->create() ?>
<section class="primary-bg">
	<div class="container">
    	<div id="login_signup">
            <div class="form_wrap_m">
            	<div class="white_box">
                	<h3>Benvenuto</h3>
	                <form action="" method="get">
                        <div class="form-group">
                        <?= $this->Form->control('username', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                        <?= $this->Form->control('password', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->button(__('Login'), array('class'=>'btn btn-info')); ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </form>
                    <p>Non hai un account?  <?php echo $this->Html->link('Registrati ora', ['controller' => 'Users', 'action' => 'register']);?>
                    <div class="back_home"><a href="<?=$url?>/cakephp" class="btn outline-btn btn-sm"><i class="fa fa-angle-double-left"></i> Back to Home</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
