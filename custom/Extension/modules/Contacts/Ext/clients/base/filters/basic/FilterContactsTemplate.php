<?php
$viewdefs['Contacts']['base']['filter']['basic']['filters'][] = array(
	'id' => 'FilterContactsTemplate',
	'name' => 'LBL_FILTER_CONTACTS_TEMPLATE',
	'filter_definition' => array(
				array(
					'account_id'  => array(
					'$in' => array(),
				),
			),
		),
	'editable' => true,
	'is_template' => true,
);
?>
