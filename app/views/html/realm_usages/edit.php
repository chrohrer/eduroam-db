<div class="help">
	<?php load_partial("menu"); ?>
	<?php load_partial("realm_usages_submenu"); ?>
</div>
<div id="realmusage">
	<form action="" method="post" onsubmit="this.updaterealmusage.disabled=true;">
		<input type="hidden" name="action" value="updaterealmusage" />
		<label for="realmid">ID of Representative Realm</label>
		<?php
			echo select_tag($rids, 'realmid', $realmd['realmid']);
                ?>
		<label for="national_sn">Number of Successfully Authenticated Sessions per Day (National level)</label>
			<input type="text" name="national_sn" value="<?php echo $realmd['national_sn'] ?>" />
		<label for="international_sn">Number of Successfully Authenticated Sessions per Day (International level)</label>
			<input type="text" name="international_sn" value="<?php echo $realmd['international_sn'] ?>" />
		<p>
			<input type="submit" name="updaterealmusage" value="Update">
		</p>
    </form>
</div>