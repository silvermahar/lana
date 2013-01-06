<h2>Kasutaja <?=$user->name?></h2>
<p class="help-block">See kasutaja kuuluv järgmistesse gruppidesse</p>
<ul>
	<? foreach ($user->groups->find_all() as $group): ?>
	<li>
		<?=$group->name?>
	</li>
	<? endforeach ?>
</ul>