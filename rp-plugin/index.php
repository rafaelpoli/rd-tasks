<?php 
/*
    Plugin Name: RP Plugin - HTTP POST JSON
    Description: This plugin will automatically send HTTP POST requests with JSON content.
    Author: Rafael Poli
    Version: 1.0
*/

//HTTP POST JSON
function rp_http_post($body = null) {
    $url = 'https://webhook.site/e847511c-bf62-407b-bb60-ac2e9ad6cf0f';
    $response = wp_remote_post( $url, array(
        'method'      => 'POST',
        'body'        => $body
    ));
}

//ADD BODY
function set_body($post_id, $action){
    $body[] = array(
        'action' => $post_id,
        'pageid' => $action
    );
    return $body;
}

//DE-BOUNCE
function published_modified_date($post_id) {
 
    // UNIX published and modified date
    $unix_published_date = get_post_timestamp( $post_id, 'date' );
    $unix_modified_date = get_post_timestamp( $post_id, 'modified' );
    
    // SET INTERVAL OF EACH REQUEST (IN SECONDS)
    $interval = 30;    
    if ( current_time( 'timestamp', 'local' ) > $unix_modified_date + $interval )
        return true;
    else{
        if( $unix_modified_date > $unix_published_date + $interval )
            return true;
    }
}

//CREATE OR MODIFY A PAGE
add_action( 'save_post_page', 'rp_http_post_create_update',10,3);
function rp_http_post_create_update($post_id, $post, $update) {
    if($update)
        (published_modified_date($post_id) && 'trash' !== $post->post_status) ? rp_http_post(set_body($post_id, 'Modified')) : '';
    else
        rp_http_post(set_body($post_id, 'Created'));
}

//DELETE A PAGE
add_action( 'before_delete_post', 'rp_http_post_delete',99,2);
function rp_http_post_delete($post_id, $post) {
    if ( 'page' === $post->post_type )
        rp_http_post(set_body($post_id, 'Deleted'));
}



