<?php 

	admin_gatekeeper();
	
	$guid = get_input("guid");
	
	if(!empty($guid)){
		if($item = get_entity($guid)){
			if($item->getSubtype() == MENU_BUILDER_SUBTYPE){
				if($item->delete()){
					system_message(elgg_echo("menu_builder:actions:delete:success"));
				} else {
					register_error(elgg_echo("menu_builder:actions:delete:error:delete"));
				}
			} else {
				register_error(elgg_echo("menu_builder:actions:delete:error:subtype"));
			}
		} else {
			register_error(elgg_echo("menu_builder:actions:delete:error:entity"));
		}
	} else {
		register_error(elgg_echo("menu_builder:actions:delete:error:input"));
	}

	forward(REFERER);

?>