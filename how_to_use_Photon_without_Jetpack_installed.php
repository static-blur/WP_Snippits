add_filter( 'the_content', 'wpse39167_replace_image',9999 );
function wpse39167_replace_image( $content )
{
	$content = preg_replace_callback( "@<img.+?src=[\"'](.+?)[\"'].+?>@", 'wpse39167_maybe_replace_image', $content );
	return $content;
}

function wpse39167_maybe_replace_image($matches){
    if(!$matches[1])
		return $matches[0];

    $counter = wpse39167_static_counter( $matches[1] );
    $wp = 'http://i'.$counter.'.wp.com/';
	$url = str_replace(array('http://','https://'),$wp,$matches[1]);
	return str_replace($matches[1],$url,$matches[0]);
}

function wpse39167_static_counter( $url ) {
        srand( crc32( basename( $url ) ) );
        $static_counter = rand( 0, 2 );
        srand(); // this resets everything that relies on this, like array_rand() and shuffle()
        return $static_counter;

}
