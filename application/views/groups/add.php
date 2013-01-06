<h1><?php echo __('g.add'); ?></h1>
<p class="help-block"> Selle vormi abil saad lisada meie andmebaasi uue õppegrupi</p>
<form action="<?=URL::base()?>groups/add" method="POST">
	<label for="txt-name"><?php echo __('g.name'); ?></label>
	<input type="text" placeholder="Grupi nimi" name="group[name]" id="txt-name">
	<input type="submit" class="btn btn-danger" name="add">
</form>