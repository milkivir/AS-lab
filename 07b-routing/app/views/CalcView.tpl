
{extends file="main.tpl"}

{block name=footer}stopka...{/block}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">Wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator</legend>
	<fieldset>
		<table>
		<tr>
		<td>
		<div class="pure-control-group">
		<label for="x">Kwota kredytu: </label>
		</td>
		<td>
		<input id="x" type="text" placeholder="kwota kredytu" name="x"  value="{$form->x}"></div>
		</td>
		</tr>
		<tr>
		<td>
		<div class="pure-control-group">
		<label for="z">Ile lat spłaty: </label>
		</td>
		<td>
		<input id="z" type="text" placeholder="ilość lat spłaty" name="z" value="{$form->z}"></div>
		</td>
		</tr>
		<tr>
		<td>
		<div class="pure-control-group">
		<label for="y">Oprocentowanie: </label>
		</td>
		<td>
		<input id="y" type="text" placeholder="oprocentowanie" name="y" value="{$form->y}"></div>
		</td>
		</tr>
		<tr>
		<div class="pure-controls">
		<td align="center" colspan="2">
		<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/></div></td></tr>
		</table>
	</fieldset>
</form>

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

</div>


{/block}