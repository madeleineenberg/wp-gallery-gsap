<?php
return function(){
$form_id = 1;


	$form_fields = Ninja_Forms()->form( $form_id )->get_fields();


	
	$key_to_fieldname = array();
	foreach ( $form_fields as $form_field ) {
        if($form_field->get_setting( 'label' ) === 'Message'){
            $key_to_fieldname[ $form_field->get_setting( 'key' ) ] = $form_field->get_setting( 'label' );

        }
	}

	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'nf_sub',
		'order' => 'ASC',
		'meta_query' => array(
			array(
				'key' => '_form_id',
				'value' => $form_id,
			),
		),
		'fields' => 'ids', 
	);

	$submissions = [];
    $values = [];
	$submissions = get_posts( $args );

	if ( $submissions ) {

		foreach ( $submissions as $submission_id ) {
			$submission = Ninja_Forms()->form()->get_sub( $submission_id );
		
			foreach ( $form_fields as $field ) {
				$field_key = $field->get_setting( 'key' );

				if ( !array_key_exists( $field_key, $key_to_fieldname ) ) {
					continue;
				}
                $values[] = $submission->get_field_value( $field->get_id() );
                
			};
		}
    }

return [
    'notes' => $values
   ];
};