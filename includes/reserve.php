<div id="content">

<h1><?php print t('Reserve a Bikkes'); ?> 1/2</h1>

<form action="reserve_do1.php">

<h2><br><?php print t('Get it from...'); ?></h2>

<div class="field location">
	<select name="from_loc">
		<option><?php print t('Choose location...'); ?></option>
		<option><?php print t('Railway Station'); ?>, Elielinaukio</option>
		<option>Töölö, Mannerheimintie 82</option>
		<option>Punavuori: Kaivarin Kanuuna - Merikatu 3</option>
		<option>Kruununhaka: Wiedermeier - Vironkatu 10</option>
		<option>Kallio: Oivan Kirppis - Kolmas Linja 7</option>
		<option>Töölö: DoM Itsepalvelukirpputori - Mannerheimintie 29</option>
		<option><?php print t('Recycling center'); ?> Hietalahti, Lönnrotinkatu 45</option>
		<option><?php print t('Recycling center'); ?> Kyläsaari, Kyläsaarenkatu 8</option>

	</select>
</div>
<div class="field time">
	<label>
	<span><?php print t('At:'); ?></span>
	<input type="datetime-local" name="from_time" value="<?php print date("Y-m-d\TH:00:00"); ?>">
	</label>
</div>

<h2><br><?php print t('Return it to...'); ?></h2>
<div class="field location">
	<select name="to_loc">
		<option><?php print t('Choose location...'); ?></option>
		<option>Kamppi</option>
		<option>Ruoholahti</option>
		<option>???</option>
		
	</select>
</div>
<div class="field time">
	<label>
	<span><?php print t('At:'); ?></span>
	<input type="datetime-local" name="to_time" value="<?php print date("Y-m-d\TH:00:00"); ?>">
	</label>
</div>

<div>
<br>
<input type="checkbox"> <?php print t('I accept the <a href="#">lending terms</a>'); ?>
</div>
<br>

<input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;<?php print t('Pay'); ?>&nbsp;&nbsp;&nbsp;&nbsp;" class="btn btn-ok">
&nbsp;&nbsp;
<a href="index.php" class="btn btn-cancel"><?php print t('Cancel'); ?></a>

</form>

</div>