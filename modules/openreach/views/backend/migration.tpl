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
				<a href="#" id="toggle-login-forms">{__ t='Starting migration'}</a>
			</h2>
			<div class="block" id="login-forms">
				<a href="/migrate/start">{__ t='Click here to (re)start migration'}</a>
				{if $message ne ""}
					{$message}
				{/if}
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>