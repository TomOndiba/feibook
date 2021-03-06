<?php 
	/**
	* ElggChat - Pure Elgg-based chat/IM
	* 
	* Definition of the user settings
	* 
	* @package elggchat
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	* @version 0.4
	*/

	$enable_chat = $vars["entity"]->enableChat;
	$allow_contact_from = $vars["entity"]->allow_contact_from;
	$show_offline_user= $vars["entity"]->show_offline_user;
	set_plugin_usersetting("show_offline_user",$show_offline_user,'elggchat');
	
?>
<p>
	<?php echo elgg_echo("elggchat:usersettings:enable_chat"); ?>
	<select name="params[enableChat]">
		<option value="yes" <?php if($enable_chat == "yes" || empty($enable_chat)) echo "selected='yes'"; ?>><?php echo elgg_echo("option:yes"); ?></option>
		<option value="no"<?php if($enable_chat == "no") echo "selected='yes'"; ?>><?php echo elgg_echo("option:no"); ?></option>
	</select>
	
	<br />
	
	<?php echo elgg_echo("elggchat:usersettings:allow_contact_from"); ?>
	<select name="params[allow_contact_from]">
		<option value="all" <?php if($allow_contact_from == "all" || empty($enable_chat)) echo "selected='yes'"; ?>><?php echo elgg_echo("elggchat:usersettings:allow_contact_from:all"); ?></option>
		<option value="friends"<?php if($allow_contact_from == "friends") echo "selected='yes'"; ?>><?php echo elgg_echo("elggchat:usersettings:allow_contact_from:friends"); ?></option>
		<option value="none"<?php if($allow_contact_from == "none") echo "selected='yes'"; ?>><?php echo elgg_echo("elggchat:usersettings:allow_contact_from:none"); ?></option>
	</select>
	<br/>	
	<?php echo elgg_echo("elggchat:usersettings:show_offline_user"); ?>
	<select name="params[show_offline_user]">
		<option value="yes" <?php if($show_offline_user== "yes" || empty($show_offline_user)) echo "selected='yes'"; ?>><?php echo elgg_echo("option:yes"); ?></option>
		<option value="no"<?php if($show_offline_user== "no") echo "selected='yes'"; ?>><?php echo elgg_echo("option:no"); ?></option>
	</select>
</p>
