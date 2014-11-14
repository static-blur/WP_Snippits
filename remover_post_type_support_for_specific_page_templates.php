<?php
/**
 * Hide editor for specific page templates.
 *
 */

add_action( 'admin_init', 'hide_editor' );

function hide_editor() {

        // Get the Post ID.
        if ( isset ( $_GET['post'] ) )
        $post_id = $_GET['post'];
        else if ( isset ( $_POST['post_ID'] ) )
        $post_id = $_POST['post_ID'];

    if( !isset ( $post_id ) || empty ( $post_id ) )
        return;

    // Get the name of the Page Template file.
    $template_file = get_post_meta($post_id, '_wp_page_template', true);

    if($template_file == 'add_template_name_here'){ // edit the template name
    /*uncomment which post type support you need*/
      // remove_post_type_support('page', 'editor');
    	//remove_post_type_support('page', 'excerpt');
    	//remove_post_type_support('page', 'thumbnail');
    }

}
?>
