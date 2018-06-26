<?php
/*
Plugin name: Ripstech Zerdoday Hotfix
Description: See <a href='https://blog.ripstech.com/2018/wordpress-file-delete-to-code-execution/'>Ripstech blogpost</a> for details.
Author: Konrad Karpieszuk, but code creds go to Ripstech
Version: 0.1
*/

add_filter( 'wp_update_attachment_metadata', 'rips_unlink_tempfix' );

function rips_unlink_tempfix( $data ) {
    if( isset($data['thumb']) ) {
        $data['thumb'] = basename($data['thumb']);
    }

    return $data;
}