<div class="users form">
<?php 
	echo $this->Flash->render('auth');
	echo $this->Form->create('User');
?>
	<fieldset>
		<legend>
			<?php echo __('Please enter your username and password'); ?>
		</legend>
		<?php 
			echo $this->Form->input('username');
			echo $this->Form->input('password');
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Log in')); ?>
</div>