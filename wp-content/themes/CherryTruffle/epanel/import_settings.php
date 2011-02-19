<?php 
add_action( 'admin_enqueue_scripts', 'import_epanel_javascript' );
function import_epanel_javascript( $hook_suffix ) {
	if ( 'admin.php' == $hook_suffix && 'wordpress' == $_GET['import'] && '1' == $_GET['step'] )
		add_action( 'admin_head', 'admin_headhook' );
}

function admin_headhook(){ ?>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$("p.submit").before("<p><input type='checkbox' id='importepanel' name='importepanel' value='1' style='margin-right: 5px;'><label for='importepanel'>Replace ePanel settings with sample data values</label></p>");
		});
	</script>
<?php }

add_action('import_end','importend');
function importend(){
	if ( !isset($_POST['importepanel']) )
		return;
	
	$importOptions = 'YToxMDk6e3M6MDoiIjtOO3M6MTg6ImNoZXJyeXRydWZmbGVfbG9nbyI7czowOiIiO3M6MjE6ImNoZXJyeXRydWZmbGVfZmF2aWNvbiI7czowOiIiO3M6MjY6ImNoZXJyeXRydWZmbGVfY29sb3Jfc2NoZW1lIjtzOjc6IkRlZmF1bHQiO3M6MjQ6ImNoZXJyeXRydWZmbGVfYmxvZ19zdHlsZSI7TjtzOjI0OiJjaGVycnl0cnVmZmxlX2dyYWJfaW1hZ2UiO047czoyNToiY2hlcnJ5dHJ1ZmZsZV9kYXRlX2Zvcm1hdCI7czo2OiJNIGosIFkiO3M6MjY6ImNoZXJyeXRydWZmbGVfY2F0bnVtX3Bvc3RzIjtzOjE6IjUiO3M6MzA6ImNoZXJyeXRydWZmbGVfYXJjaGl2ZW51bV9wb3N0cyI7czoxOiI1IjtzOjI5OiJjaGVycnl0cnVmZmxlX3NlYXJjaG51bV9wb3N0cyI7czoxOiI1IjtzOjI2OiJjaGVycnl0cnVmZmxlX3RhZ251bV9wb3N0cyI7czoxOiI1IjtzOjI1OiJjaGVycnl0cnVmZmxlX3VzZV9leGNlcnB0IjtOO3M6Mjg6ImNoZXJyeXRydWZmbGVfaG9tZXBhZ2VfcG9zdHMiO3M6MToiNyI7czoyODoiY2hlcnJ5dHJ1ZmZsZV9leGxjYXRzX3JlY2VudCI7TjtzOjIzOiJjaGVycnl0cnVmZmxlX21lbnVwYWdlcyI7TjtzOjMwOiJjaGVycnl0cnVmZmxlX2VuYWJsZV9kcm9wZG93bnMiO3M6Mjoib24iO3M6MjM6ImNoZXJyeXRydWZmbGVfaG9tZV9saW5rIjtzOjI6Im9uIjtzOjI0OiJjaGVycnl0cnVmZmxlX29yZGVyX3BhZ2UiO3M6MzoiYXNjIjtzOjI0OiJjaGVycnl0cnVmZmxlX3NvcnRfcGFnZXMiO3M6MTA6InBvc3RfdGl0bGUiO3M6MzE6ImNoZXJyeXRydWZmbGVfdGllcnNfc2hvd25fcGFnZXMiO3M6MToiMyI7czoyMjoiY2hlcnJ5dHJ1ZmZsZV9tZW51Y2F0cyI7TjtzOjQxOiJjaGVycnl0cnVmZmxlX2VuYWJsZV9kcm9wZG93bnNfY2F0ZWdvcmllcyI7czoyOiJvbiI7czozMDoiY2hlcnJ5dHJ1ZmZsZV9jYXRlZ29yaWVzX2VtcHR5IjtzOjI6Im9uIjtzOjM2OiJjaGVycnl0cnVmZmxlX3RpZXJzX3Nob3duX2NhdGVnb3JpZXMiO3M6MToiMyI7czoyMjoiY2hlcnJ5dHJ1ZmZsZV9zb3J0X2NhdCI7czo0OiJuYW1lIjtzOjIzOiJjaGVycnl0cnVmZmxlX29yZGVyX2NhdCI7czozOiJhc2MiO3M6MjU6ImNoZXJyeXRydWZmbGVfc3dhcF9uYXZiYXIiO047czoyOToiY2hlcnJ5dHJ1ZmZsZV9kaXNhYmxlX3RvcHRpZXIiO047czozNDoiY2hlcnJ5dHJ1ZmZsZV9pY29uX3R3aXR0ZXJfZGlzcGxheSI7czoyOiJvbiI7czozNToiY2hlcnJ5dHJ1ZmZsZV9pY29uX2ZhY2Vib29rX2Rpc3BsYXkiO3M6Mjoib24iO3M6MzQ6ImNoZXJyeXRydWZmbGVfaWNvbl9teXNwYWNlX2Rpc3BsYXkiO3M6Mjoib24iO3M6MzA6ImNoZXJyeXRydWZmbGVfaWNvbl9yc3NfZGlzcGxheSI7czoyOiJvbiI7czozNToiY2hlcnJ5dHJ1ZmZsZV9pY29uX2xpbmtlZGluX2Rpc3BsYXkiO3M6Mjoib24iO3M6MzQ6ImNoZXJyeXRydWZmbGVfaWNvbl9zdHVtYmxlX2Rpc3BsYXkiO3M6Mjoib24iO3M6MzQ6ImNoZXJyeXRydWZmbGVfaWNvbl95b3V0dWJlX2Rpc3BsYXkiO3M6Mjoib24iO3M6MjU6ImNoZXJyeXRydWZmbGVfdHdpdHRlcl91cmwiO3M6MToiIyI7czoyNjoiY2hlcnJ5dHJ1ZmZsZV9mYWNlYm9va191cmwiO3M6MToiIyI7czoyNToiY2hlcnJ5dHJ1ZmZsZV9teXNwYWNlX3VybCI7czoxOiIjIjtzOjIxOiJjaGVycnl0cnVmZmxlX3Jzc191cmwiO3M6MToiIyI7czoyNToiY2hlcnJ5dHJ1ZmZsZV9zdHVtYmxlX3VybCI7czoxOiIjIjtzOjI2OiJjaGVycnl0cnVmZmxlX2xpbmtlZGluX3VybCI7czoxOiIjIjtzOjI1OiJjaGVycnl0cnVmZmxlX3lvdXR1YmVfdXJsIjtzOjE6IiMiO3M6MjI6ImNoZXJyeXRydWZmbGVfcG9zdGluZm8iO2E6NDp7aTowO3M6NjoiYXV0aG9yIjtpOjE7czo0OiJkYXRlIjtpOjI7czoxMDoiY2F0ZWdvcmllcyI7aTozO3M6ODoiY29tbWVudHMiO31zOjI0OiJjaGVycnl0cnVmZmxlX3RodW1ibmFpbHMiO3M6Mjoib24iO3M6MzE6ImNoZXJyeXRydWZmbGVfc2hvd19wb3N0Y29tbWVudHMiO3M6Mjoib24iO3M6MzU6ImNoZXJyeXRydWZmbGVfdGh1bWJuYWlsX3dpZHRoX3Bvc3RzIjtzOjM6IjIwMCI7czozNjoiY2hlcnJ5dHJ1ZmZsZV90aHVtYm5haWxfaGVpZ2h0X3Bvc3RzIjtzOjM6IjIwMCI7czoyOToiY2hlcnJ5dHJ1ZmZsZV9wYWdlX3RodW1ibmFpbHMiO047czozMjoiY2hlcnJ5dHJ1ZmZsZV9zaG93X3BhZ2VzY29tbWVudHMiO047czozNToiY2hlcnJ5dHJ1ZmZsZV90aHVtYm5haWxfd2lkdGhfcGFnZXMiO3M6MzoiMjAwIjtzOjM2OiJjaGVycnl0cnVmZmxlX3RodW1ibmFpbF9oZWlnaHRfcGFnZXMiO3M6MzoiMjAwIjtzOjMwOiJjaGVycnl0cnVmZmxlX3RodW1ibmFpbHNfaW5kZXgiO3M6Mjoib24iO3M6MjQ6ImNoZXJyeXRydWZmbGVfaW5kZXhfaW5mbyI7czoyOiJvbiI7czozNToiY2hlcnJ5dHJ1ZmZsZV90aHVtYm5haWxfd2lkdGhfaW5kZXgiO3M6MzoiMjAwIjtzOjM2OiJjaGVycnl0cnVmZmxlX3RodW1ibmFpbF9oZWlnaHRfaW5kZXgiO3M6MzoiMjAwIjtzOjI4OiJjaGVycnl0cnVmZmxlX2Rpc3BsYXlfc29jaWFsIjtzOjI6Im9uIjtzOjI4OiJjaGVycnl0cnVmZmxlX2Rpc3BsYXlfc2VhcmNoIjtzOjI6Im9uIjtzOjI4OiJjaGVycnl0cnVmZmxlX2Rpc3BsYXlfZm9vdGVyIjtzOjI6Im9uIjtzOjI3OiJjaGVycnl0cnVmZmxlX2N1c3RvbV9jb2xvcnMiO047czoyMzoiY2hlcnJ5dHJ1ZmZsZV9jaGlsZF9jc3MiO047czoyNjoiY2hlcnJ5dHJ1ZmZsZV9jaGlsZF9jc3N1cmwiO3M6MDoiIjtzOjI4OiJjaGVycnl0cnVmZmxlX2NvbG9yX21haW5mb250IjtzOjA6IiI7czoyODoiY2hlcnJ5dHJ1ZmZsZV9jb2xvcl9tYWlubGluayI7czowOiIiO3M6Mjg6ImNoZXJyeXRydWZmbGVfY29sb3JfcGFnZWxpbmsiO3M6MDoiIjtzOjM0OiJjaGVycnl0cnVmZmxlX2NvbG9yX3BhZ2VsaW5rX2hvdmVyIjtzOjA6IiI7czoyNzoiY2hlcnJ5dHJ1ZmZsZV9jb2xvcl9jYXRsaW5rIjtzOjA6IiI7czozMzoiY2hlcnJ5dHJ1ZmZsZV9jb2xvcl9jYXRsaW5rX2hvdmVyIjtzOjA6IiI7czozNDoiY2hlcnJ5dHJ1ZmZsZV9jb2xvcl9yZWNlbnRoZWFkaW5ncyI7czowOiIiO3M6MzQ6ImNoZXJyeXRydWZmbGVfY29sb3Jfc2lkZWJhcl90aXRsZXMiO3M6MDoiIjtzOjMzOiJjaGVycnl0cnVmZmxlX2NvbG9yX2Zvb3Rlcl90aXRsZXMiO3M6MDoiIjtzOjMzOiJjaGVycnl0cnVmZmxlX2NvbG9yX3NpZGViYXJfbGlua3MiO3M6MDoiIjtzOjMxOiJjaGVycnl0cnVmZmxlX2NvbG9yX2Zvb3Rlcl9saW5rIjtzOjA6IiI7czoyNjoiY2hlcnJ5dHJ1ZmZsZV9jb2xvcl9zbG9nYW4iO3M6MDoiIjtzOjI4OiJjaGVycnl0cnVmZmxlX3Nlb19ob21lX3RpdGxlIjtOO3M6MzQ6ImNoZXJyeXRydWZmbGVfc2VvX2hvbWVfZGVzY3JpcHRpb24iO047czozMToiY2hlcnJ5dHJ1ZmZsZV9zZW9faG9tZV9rZXl3b3JkcyI7TjtzOjMyOiJjaGVycnl0cnVmZmxlX3Nlb19ob21lX2Nhbm9uaWNhbCI7TjtzOjMyOiJjaGVycnl0cnVmZmxlX3Nlb19ob21lX3RpdGxldGV4dCI7czowOiIiO3M6Mzg6ImNoZXJyeXRydWZmbGVfc2VvX2hvbWVfZGVzY3JpcHRpb250ZXh0IjtzOjA6IiI7czozNToiY2hlcnJ5dHJ1ZmZsZV9zZW9faG9tZV9rZXl3b3Jkc3RleHQiO3M6MDoiIjtzOjI3OiJjaGVycnl0cnVmZmxlX3Nlb19ob21lX3R5cGUiO3M6Mjc6IkJsb2dOYW1lIHwgQmxvZyBkZXNjcmlwdGlvbiI7czozMToiY2hlcnJ5dHJ1ZmZsZV9zZW9faG9tZV9zZXBhcmF0ZSI7czozOiIgfCAiO3M6MzA6ImNoZXJyeXRydWZmbGVfc2VvX3NpbmdsZV90aXRsZSI7TjtzOjM2OiJjaGVycnl0cnVmZmxlX3Nlb19zaW5nbGVfZGVzY3JpcHRpb24iO047czozMzoiY2hlcnJ5dHJ1ZmZsZV9zZW9fc2luZ2xlX2tleXdvcmRzIjtOO3M6MzQ6ImNoZXJyeXRydWZmbGVfc2VvX3NpbmdsZV9jYW5vbmljYWwiO047czozNjoiY2hlcnJ5dHJ1ZmZsZV9zZW9fc2luZ2xlX2ZpZWxkX3RpdGxlIjtzOjk6InNlb190aXRsZSI7czo0MjoiY2hlcnJ5dHJ1ZmZsZV9zZW9fc2luZ2xlX2ZpZWxkX2Rlc2NyaXB0aW9uIjtzOjE1OiJzZW9fZGVzY3JpcHRpb24iO3M6Mzk6ImNoZXJyeXRydWZmbGVfc2VvX3NpbmdsZV9maWVsZF9rZXl3b3JkcyI7czoxMjoic2VvX2tleXdvcmRzIjtzOjI5OiJjaGVycnl0cnVmZmxlX3Nlb19zaW5nbGVfdHlwZSI7czoyMToiUG9zdCB0aXRsZSB8IEJsb2dOYW1lIjtzOjMzOiJjaGVycnl0cnVmZmxlX3Nlb19zaW5nbGVfc2VwYXJhdGUiO3M6MzoiIHwgIjtzOjMzOiJjaGVycnl0cnVmZmxlX3Nlb19pbmRleF9jYW5vbmljYWwiO047czozNToiY2hlcnJ5dHJ1ZmZsZV9zZW9faW5kZXhfZGVzY3JpcHRpb24iO047czoyODoiY2hlcnJ5dHJ1ZmZsZV9zZW9faW5kZXhfdHlwZSI7czoyNDoiQ2F0ZWdvcnkgbmFtZSB8IEJsb2dOYW1lIjtzOjMyOiJjaGVycnl0cnVmZmxlX3Nlb19pbmRleF9zZXBhcmF0ZSI7czozOiIgfCAiO3M6Mzc6ImNoZXJyeXRydWZmbGVfaW50ZWdyYXRlX2hlYWRlcl9lbmFibGUiO3M6Mjoib24iO3M6MzU6ImNoZXJyeXRydWZmbGVfaW50ZWdyYXRlX2JvZHlfZW5hYmxlIjtzOjI6Im9uIjtzOjQwOiJjaGVycnl0cnVmZmxlX2ludGVncmF0ZV9zaW5nbGV0b3BfZW5hYmxlIjtzOjI6Im9uIjtzOjQzOiJjaGVycnl0cnVmZmxlX2ludGVncmF0ZV9zaW5nbGVib3R0b21fZW5hYmxlIjtzOjI6Im9uIjtzOjMwOiJjaGVycnl0cnVmZmxlX2ludGVncmF0aW9uX2hlYWQiO3M6MDoiIjtzOjMwOiJjaGVycnl0cnVmZmxlX2ludGVncmF0aW9uX2JvZHkiO3M6MDoiIjtzOjM2OiJjaGVycnl0cnVmZmxlX2ludGVncmF0aW9uX3NpbmdsZV90b3AiO3M6MDoiIjtzOjM5OiJjaGVycnl0cnVmZmxlX2ludGVncmF0aW9uX3NpbmdsZV9ib3R0b20iO3M6MDoiIjtzOjI3OiJjaGVycnl0cnVmZmxlX2xlYWRlcl9lbmFibGUiO047czoyNDoiY2hlcnJ5dHJ1ZmZsZV80NjhfZW5hYmxlIjtOO3M6MjY6ImNoZXJyeXRydWZmbGVfbGVhZGVyX2ltYWdlIjtzOjA6IiI7czoyNDoiY2hlcnJ5dHJ1ZmZsZV9sZWFkZXJfdXJsIjtzOjA6IiI7czoyMzoiY2hlcnJ5dHJ1ZmZsZV80NjhfaW1hZ2UiO3M6MDoiIjtzOjIxOiJjaGVycnl0cnVmZmxlXzQ2OF91cmwiO3M6MDoiIjt9';
	
	global $options;
	
	foreach ($options as $value) {
		if( isset( $value['id'] ) ) { 
			update_option( $value['id'], $value['std'] );
		}
	}
	
	$importedOptions = unserialize(base64_decode($importOptions));
	
	foreach ($importedOptions as $key=>$value) {
		if ($value != '') update_option( $key, $value );
	}
} ?>