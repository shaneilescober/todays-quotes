<form name = "todaysquotes_form" class = "todaysquotes_form">
	<input type = "hidden" name = "seq" value = "<?php echo $seq; ?>" />
	<input type="hidden" name="return_url" value="<?php echo $sUrl; ?>" />
	<table class = "todaysquotes_tbl">
		<tr>
			<td class = "label">Title : </td>
			<td class = "options"><input type = "text" name = "title" value = "" class = "display_title" fw-filter = "isFill" maxlength = "20" /></td>
		</tr>
		<tr>
			<td class = "label">Display :</td>
			<td class = "options">
				<div class = "display_opt1">
					<input type = "radio" name = "display_opt" value = "single" class = "display_opt" checked />&nbsp;One quote per day<br />
					<img src = "/_sdk/img/todaysquotes/single.jpg" />
				</div>
				<div class = "display_opt2">
					<input type = "radio" name = "display_opt" value = "more" class = "display_opt" />&nbsp;More than one quote per day<br />
					<img src = "/_sdk/img/todaysquotes/more.jpg" />
				</div>
			</td>
		</tr>
	</table>
	<a class="btn_apply" title="Save changes" href="#" onclick = "adminTodaysQuotes.save()">Save</a>
	<a class="add_link" title="Reset to default" href="#" onclick = "adminTodaysQuotes.reset()">Reset to Default</a>
	<?php if ($bExtensionView === 1){ ?>
            <?php echo '<a href="/admin/sub/?module=ExtensionPageManage&code=' . ucfirst(APP_ID) . '&etype=MODULE" class="add_link" title="Return to Manage Today\'s Quotes">Return to Manage Today\'s Quotes</a>
            <a href="/admin/sub/?module=ExtensionPageMyextensions" class="add_link" title="Return to My Extensions">Return to My Extensions</a>'; ?>
        <?php } ?>
</form>