<h1>Rühmade nimekiri</h1>
<table class="table table-striped table-bordered span5">
	<thead>
	<tr>
		<td><?php echo __('g.id'); ?></td>
		<td><?php echo __('g.name'); ?></td>
	</tr>
	</thead>
	<tbody>
	<?foreach ($groups as $group): ?>
	<tr>
		<td><?=$group->id; ?></td>
		<td><a href="<?=URL::base()?>groups/view/<?=$group->id; ?>"><?=$group->name; ?></a></td>
	</tr>
		<? endforeach?>
	</tbody>

</table>
<a class="btn btn-warning" style="margin-left: 20px" href="<?URL::base()?>groups/add"><?php echo __('g.add'); ?></a>