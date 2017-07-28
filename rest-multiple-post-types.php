<?php
/*
 Plugin Name: REST API Multiple Post Types
  Plugin URI: http://calderalabs.org
  Description: Query for multiple post types on the default post route
  Author: Caldera Labs
  Version: 0.1.0
  Author URI: http://CalderaLabs.org
 */



add_action( 'rest_post_query', 'cwp_rest_multiple_query_args', 10, 2 );
add_action( 'rest_endpoints', 'cwp_rest_multiple_add_endpoint_args', 15 );

/**
 * Allows for multiple post types in /wp/v2/posts query
 *
 * @since 0.1.0
 *
 * @uses "rest_post_query" filter
 *
 * @param array $args WP_Query args
 * @param $request WP_REST_Request
 *
 * @return array
 */
function cwp_rest_multiple_query_args ( $args, $request ){
	$post_types = $request->get_param( 'type' );
	if( ! empty( $post_types ) ){
		if( is_string( $post_types ) ){
			$post_types = array( $post_types );
			foreach ( $post_types as $i => $post_type ){
				$object=  get_post_type_object( $post_type );
				if( ! $object || ! $object->show_in_rest   ){
					unset( $post_types[ $i ] );
				}
			}


		}
		$post_types[] = $args[ 'post_type' ];
		$args[ 'post_type' ] = $post_types;
	}

	return $args;
}


/**
 * Add query argument for wp/v2/posts
 *
 * @since 0.1.0
 *
 * @uses "rest_endpoints" filter
 *
 * @param array $endpoints
 *
 * @return array
 */
function cwp_rest_multiple_add_endpoint_args( $endpoints ){

	if ( isset( $endpoints[ 'wp/v2/posts' ] ) ) {
		foreach ( $endpoints[ 'wp/v2/posts' ] as &$post_endpoint ) {
			if ( 'GET' == $post_endpoint[ 'METHOD' ] ) {
				$post_endpoint[ 'args' ][ 'type' ] = array(
					'description' => 'Post types',
					'type'        => 'array',
					'required'    => false,
					'default'     => 'post'
				);
			}
		}
	}

	return $endpoints;

}

