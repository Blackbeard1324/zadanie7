{extends file="main.tpl"}

{block name=content}
	<section id = "footer">
	<form action="{$conf->action_url}login" method="post">

		<div class="inner">
		<fieldset>
			<div class="fields">
				<h2>Zaloguj się do systemu</h2>
				<div class="field">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
			<div>
				<label for="id_pass">haslo: </label>
				<input id="id_pass" type="password" name="pass" /><br />
			</div>
					<div class="field">
			<div class="pure-controls">
				<button type="submit" class="pure-button pure-button-primary">Zaloguj</button>
			</div>
		</fieldset>
		</div>
	</form>
	</section>


{/block}
