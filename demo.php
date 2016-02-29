<?php
/* Simple format to create Dynamic dropdown and its Data Values
* debugger@hotmail.co.uk
*/
$result = array('pm_format' =>
							array('attr_id' => 'pm_format',
								  'attr_name' => 'Format',
								  'attr_parent'	=> false,
								  'attr_value' => array(array('aid' => 1,'aname' => '297 x 420 mm A3'), array('aid' => 2,'aname' => '300 x 120 mm A4')),
								  'attr_val_sel' => array('aid' => 1,	'aname' => '297 x 420 mm A3')
								),
				'pm_page_orientation' => array('attr_id' => 'pm_page_orientation',
						            'attr_name' => 'Page Orientation',
						            'attr_parent' => false,
						            'attr_value' => array(array('aid' => 5,'aname' => 'Landscape'),array('aid' => 7,'aname' => 'Portraite')),
									'attr_val_sel' => array('aid' => 2,'aname' => 'Landscape')
								),
				 'pm_country' => array('attr_id' => 'pm_country',
						            'attr_name' => 'Country',
						            'attr_parent'	=> true,
						            'attr_value' => array(array('aid' => 77, 'aname' => 'UAE','achild' => 
						            							array('pm_lang' => array('attr_id' => 'pm_lang',
																			            'attr_name' => 'Languages',
																			            'attr_parent' => false,
																			            'attr_value' => array(array('aid' => 11,'aname' => 'Arabic'), array('aid' => 41,'aname' => 'Hindi')),
																						'attr_val_sel' => array()),
																	'pm_states' => array('attr_id' => 'pm_states',
																			            'attr_name' => 'States',
																			            'attr_parent' => true,
																			            'attr_value' => array(array('aid' => 10,'aname' => 'Al Fujera'),
																			             array('aid' => 40,'aname' => 'Dubai','achild' => 
																			            	array('city' => array('attr_id' => 'city',
																								            'attr_name' => 'Cities',
																								            'attr_parent' => false,
																								            'attr_value' => array(array('aid' => 101,'aname' => 'Jumeira Lakh'), array('aid' => 141,'aname' => 'Al Rasheedia'), array('aid' => 123,'aname' => 'Al Kharama')),
																											'attr_val_sel' => array())
																			            		))),
																						'attr_val_sel' => array())
																	)
						            							),
														array('aid' => 82,'aname' => 'Iran', 'achild' => 
																array('pm_lang' => array('attr_id' => 'pm_lang',
														            'attr_name' => 'Language',
														            'attr_parent' => false,
														            'attr_value' => array(array('aid' => 12,'aname' => 'Arabic'), array('aid' => 63,'aname' => 'Iranian')),
																	'attr_val_sel' => array())
																	)
															),
														array('aid' => 97,'aname' => 'Oman', 'achild' => array())),
						            'attr_val_sel' => array('aid' => 97,'aname' => 'Oman')

        						)
			);
echo json_encode($result);          
?>