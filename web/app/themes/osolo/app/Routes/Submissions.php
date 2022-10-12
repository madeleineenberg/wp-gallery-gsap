<?php
return function(){
$form_id = 1;
$values = [];
$notes = [];
$html = "";
	

	$submissions = Ninja_Forms()->form( $form_id )->get_subs();
if ( is_array( $submissions ) && count( $submissions ) > 0 ) {
    foreach($submissions as $submission) {
		$values[] = $submission->get_field_values();
    }
	
	$notes = array_slice($values, 0, 14);
	foreach($notes as $note){
		$html .= \Roots\view('partials.note-list-item', [
		'name' => $note['name'],
		'note' => $note['_field_3']
		 ]);

	}

}

return [
    'notes' => $notes,
	'html' => $html,
   ];
};