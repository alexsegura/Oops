<h2>Modify module configuration</h2>

<div>
	<a class="button" href="<?php echo $this->url(array('controller' => 'index')) ?>">BACK</a> 
</div>

<hr />

<?php if ($this->message) : ?>
	<div class="conf">
		<p><?php echo $this->message ?></p>
	</div>
<?php endif; ?>

<?php echo $this->form ?>