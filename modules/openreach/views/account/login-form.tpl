<div class="container_16">
	<div class="grid_16">
		<h1 id="branding">
			{__ t='OpenReach communication platform'}
		</h1>
	</div>
	<div class="clear"></div>

	<div class="grid_16">
		<h2 id="page-heading">{__ t='Signing in to your account'}</h2>
	</div>
	
	<div class="grid_6 prefix_5 suffix_5">
		<div class="box">
			<h2>
				<a href="#" id="toggle-login-forms">{__ t='Login'}</a>
			</h2>
			<div class="block" id="login-forms">
				<form action="" method="post">
					<fieldset class="login">
						<legend>Login</legend>
						<p class="notice">{__ t='Login to your account'}</p>
						<p>
							<label>{__ t='Username'} </label>

							<input type="text" name="username" />
						</p>
						<p>
							<label>{__ t='Password'}</label>
							<input type="password" name="password" />
						</p>
						<input class="login button" type="submit" value="{__ t='Login'}" />
					</fieldset>

				</form>
				<form action="">
					<fieldset>
						<legend>{__ t='Register'}</legend>
						<p>{__ t='If you do not already have an account, please create a new account to register.'}</p>

						<input type="submit" value="{__ t='Create account'}" />
					</fieldset>
				</form>

			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>