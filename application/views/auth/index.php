<!--
<div class="offset4">
	<form class="form-signin span3" style="width: 300px; margin: 0 auto;" method="post" action="<?=URL::base()?>auth">
		<h2 class="form-signin-heading">Palun logi sisse</h2>
		<input name="username" type="text" class="input-äleta mindblock-level" placeholder="Kasutajanimi">
		<input name="password" type="password" class="input-block-level" placeholder="Parool">
		<label class="checkbox">
			<input type="checkbox" value="remember-me"> Mäleta mind
		</label>
		<button class="btn btn-large btn-success" type="submit">Logi sisse</button>
	</form>
</div>
-->
<!-- Button to trigger modal -->
<div class="offset3">
	<a href="#myModal" role="button" class="btn btn-inverse span4" data-toggle="modal">Logi sisse</a>
</div>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Palun logi sisse</h3>
	</div>
	<div class="modal-body">
		<form class="form-signin" style="width: 300px; margin: 0 auto;" method="post" action="<?=URL::base()?>auth">

			<input name="username" type="text" class="input-äleta mindblock-level span2" placeholder="Kasutajanimi">
			<input name="password" type="password" class="input-block-level span2" placeholder="Parool">
			<label class="checkbox">
				<input type="checkbox" value="remember-me"> Mäleta mind
			</label>
			<button class="btn btn-large btn-success" type="submit">Logi sisse</button>
		</form>
	</div>

</div>