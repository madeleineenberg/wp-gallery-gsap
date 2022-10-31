<?php
return function(){
$form_id = 1;
$values = [];
$notes = [];
$html = "";

function is_html($string)
{
	if(preg_match("/<[^<]+>/",$string,$m) != 0){
		return true;

	}
	elseif(preg_match_all('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#',$string,$m) != 0){
		return true;
	}
	elseif(preg_match_all("/<script\b[^>]*>([\s\S]*?)<\/script>/gm", $string, $m) != 0){ 
		return true;
	}
}
	

	$submissions = Ninja_Forms()->form( $form_id )->get_subs();
if ( is_array( $submissions ) && count( $submissions ) > 0 ) {
    foreach($submissions as $submission) {
		$values[] = $submission->get_field_values();
    }
	
	$notes = array_slice($values, 0, 14);
	foreach($notes as $note){
		$html .= \Roots\view('partials.note-list-item', [
		'name' => $note['name'],
		'note' => is_html($note['_field_3']) ? '<s>censored</s>' : htmlspecialchars($note['_field_3'])
		
		]);

	}

}



return [
    'notes' => $notes,
	'html' => $html,
	'values' => $values
   ];
};