<h1><?php echo __('g.add'); ?></h1>
<p class="help-block"> <?php echo __('g.help'); ?></p>
<form action="<?=URL::base()?>groups/add" method="POST">
	<label for="txt-name"><?php echo __('g.name'); ?></label>
	<input type="text" placeholder="<?php echo __('g.name'); ?>" name="group[name]" id="txt-name">
	<input type="submit" class="btn btn-danger" name="add">
</form>