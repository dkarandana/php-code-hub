<?php

	/**
	 * 
	 * @see : http://php.net/manual/en/function.array-search.php
	 * @see : http://php.net/manual/en/function.array-column.php
	 * @see : http://php.net/manual/en/function.count.php
	 * @see : http://php.net/manual/en/function.array-intersect-key.php
	 *
	 * @author dkarandana <https://github.com/dkarandana>
	 * 
	 */

	$data = array(
	    array(
	        'id' => 2135,
	        'first_name' => 'John',
	        'last_name' => 'Doe',
	    ),
	    array(
	        'id' => 3245,
	        'first_name' => 'Sally',
	        'last_name' => 'Smith',
	    ),
	    array(
	        'id' => 5342,
	        'first_name' => 'Jane',
	        'last_name' => 'Jones',
	    ),
	    array(
	        'id' => 5623,
	        'first_name' => 'Peter',
	        'last_name' => 'Doe',
	    ),
	    array(
	        'id' => 2135,
	        'first_name' => 'John',
	        'last_name' => 'Cale',
	    )
	);

echo "<pre>";

	/* Search Sally's Details */

	$find = 'Sally';
	$index = array_search( $find , array_column( $data, "first_name")  );

	if( $index ){
		print_r( $data[ $index ]);
	}


	/* Search John's Details - Multiple matches */
	
echo "<hr>";

	$find = 'John';

	$matches = array_keys(array_column( $data, "first_name"), $find, true );

	print_r( "Matches ". count( $matches ) ."\n" );

	print_r( array_intersect_key( $data, array_flip( $matches ) ));

?>