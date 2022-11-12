{extends file="main.tpl"}

{block name=footer}stopka...{/block}

{block name=content}

<h2>Kalkulator kredytowy</h2>

<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
<fieldset>
		<table>
		<tr>
		<td>
		<label for="x">Kwota kredytu: </label>
		</td>
		<td>
		<input id="x" type="text" placeholder="kwota kredytu" name="x"  value="{$form->x}">
		</td>
		</tr>
		<tr>
		<td>
		<label for="z">Ile lat spłaty: </label>
		</td>
		<td>
		<input id="z" type="text" placeholder="ilość lat spłaty" name="z" value="{$form->z}">
		</td>
		</tr>
		<tr>
		<td>
		<label for="y">Oprocentowanie: </label>
		</td>
		<td>
		<input id="y" type="text" placeholder="oprocentowanie" name="y" value="{$form->y}">
		</td>
		</tr>
		<tr>
		</fieldset>
		<td align="center" colspan="2">
		<button type="submit" class="pure-button">Oblicz</button></td></tr>
		</table>
		
</form>


<div class="messages">

{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>


{/block}