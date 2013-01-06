<h1><?=$group->name; ?></h1>
<table class="table table-striped table-bordered span5">
	<thead>
	<tr>
		<td>inimese kood</td>
		<td>inimese nimi</td>
	</tr>
	</thead>
	<tbody>
	<?foreach ($group->members->find_all() as $user): ?>
	<tr>
		<td><?=$user->id; ?></td>
		<td><a href="<?=URL::base()?>users/view/<?=$user->id; ?>"><?=$user->name; ?></a></td>
	</tr>
		<? endforeach?>
	</tbody>

</table>