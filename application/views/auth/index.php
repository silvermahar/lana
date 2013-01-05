<div class="offset4">
	<form class="form-signin span3" style="width: 300px; margin: 0 auto;" method="post" action="<?=URL::base()?>auth">
		<h2 class="form-signin-heading">Please sign in</h2>
		<input name="username" type="text" class="input-block-level" placeholder="Username">
		<input name="password" type="password" class="input-block-level" placeholder="Password">
		<label class="checkbox">
			<input type="checkbox" value="remember-me"> Remember me
		</label>
		<button class="btn btn-large btn-primary" type="submit">Sign in</button>
	</form>
</div>