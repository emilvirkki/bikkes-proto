<div id="content">
<h1><?php print t('My Reservations'); ?></h1>
<br>
<?php if(true): ?>

	<h2><?php print t('Today'); ?></h2>
	<?php if($_SESSION['state'] == 'open'): ?>
		<?php show_reservation(FALSE); ?>
		<p><?php print t('Problems? Call 050 3398627.'); ?></p>
		<a href="state.php?state=closed" class="btn btn-ok"><?php print t('Close lock'); ?></a>
	<?php elseif($_SESSION['state'] == 'closed'): ?>
		<div class="message success"><?php print t('Bike locked. Thanks for using Bikkes!'); ?></div>
	<?php elseif($_SESSION['state'] == 'cancelled'): ?>
		<!-- empty -->
	<?php else: ?>
		<?php show_reservation(); ?>
		<p><?php print t('You can open the lock with the button below or with the code <strong>789294</strong>. You can choose any of the bikes present at the pit stop.'); ?></p>
		<p><?php print t('Is the bike damaged or missing? Call 050 3398627.'); ?></p>
		<a href="state.php?state=open" class="btn btn-ok"><?php print t('Open lock'); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="state.php?state=cancelled" onclick="return confirm('<?php print t('Are you sure you want to cancel?'); ?>');" class="btn btn-cancel"><?php print t('Cancel reservation'); ?></a>
		<br><br><hr>
	<?php endif; ?>
<?php endif; ?>

</div>