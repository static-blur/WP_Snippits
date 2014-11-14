<?php
///reordering menus
function custom_menu_order($menu_ord) {  
    if (!$menu_ord) return true;  
    return array(  
        'index.php', // Dashboard  
        'separator1', // First separator  
		 'edit.php?post_type=slide', // Pages  
        'edit.php', // Posts  
        'edit.php?post_type=page', // Pages  
        'edit-comments.php', // Comments  
		 'edit.php?post_type=roomone', // Pages 
		 'edit.php?post_type=roomtwo', // Pages 
		 'edit.php?post_type=roomthree', // Pages 
		 'edit.php?post_type=roomfour', // Pages 
		 'edit.php?post_type=roomfive', // Pages 
		 'edit.php?post_type=roomsix', // Pages 
		  'edit.php?post_type=roomseven', // Pages 
		  'edit.php?post_type=roomeight', // Pages 
		  'edit.php?post_type=roomnine', // Pages 
		  'edit.php?post_type=roomten', // Pages 
		  'edit.php?post_type=roomeleven', // Pages 
		   'edit.php?post_type=roomtwelve', // Pages 
		   'edit.php?post_type=roomthirteen', // Pages   
		'edit.php?post_type=roomfourteen', // Pages  
		  'edit.php?post_type=library', // Pages  
		  'edit.php?post_type=wn_events', // Pages 
		  
		   'upload.php', // Media  
         'link-manager.php', // Links  
		 'separator2', // Second separator  
        'themes.php', // Appearance  
        'plugins.php', // Plugins  
        'users.php', // Users  
        'tools.php', // Tools  
        'options-general.php', // Settings  
        'separator-last', // Last separator  
    );  
}  
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order  
add_filter('menu_order', 'custom_menu_order');
?>
