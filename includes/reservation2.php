<div id="content">
<h1><?php print t('Reserve a Bikkes'); ?> 2/2</h1>

<div class="field">
<?php print t('Credit card:'); ?>

<input type="text" size=20 value="XXXX XXXX XXXX XXXX">
</div>

<div clas="field">
<?php print t('Expires:'); ?>

<input type="text" value="XX" size=2> / <input type="text" value="XX" size=2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php print t('CCV:'); ?>

<input type="text" value="XXX" size=3>
</div>


<p><br>
<?php print t('The reservation must be cancelled at least three hours before the start or the fee will be charged.'); ?>

<?php print t('Damages and fines from late returns are automatically charged from your credit card.'); ?>

<?php print t('See <a href="#">pricing</a> for details.'); ?>
</p>

<br>


<a href="index.php?func=reservation_confirm" class="btn btn-ok"><?php print t('Confirm reservation'); ?></a>
<a href="index.php" class="btn btn-cancel"><?php print t('Cancel'); ?></a>

</div>