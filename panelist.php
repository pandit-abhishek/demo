<?php

	$con = new MongoClient();
	$db = $con->selectDB("test");
	$collection = $db->selectCollection("panelist");
	
	
	$status = [1,0];
	$bounceEmail = [1,0];
	$panelId = "56be127a1d025cd75b8b4567";
	$emailVerified = [1,0];
	$statusEmail = [true,false];
	$hispanicOption = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
	$maleOption = [1,2];
	$ethinicityOption  = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
	$ageOption  = [25,18,30,32,52,15,16,19,20,21,22,23,24,31,32,33,34,85,96,98,52,65,61,84,81];
	$eduOption = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
	// $lastactionDate = Date('Y-m-d',strtotime('-60 Days'));

	for($i = 1;$i <= 1000;$i++){
		$record = [
			"panel_id" => new \MongoId($panelId),
			"status" => 1,
			"bounce_email" => 0,
			"status_email" => 1,
			"meta" => [
				"email_verified" => 10,
			],
			"profile" => [
				"address"=>[
					"country" => "United States"
				],
				"answers" => [
					[
						"question_id" => 16,
						"question_key" => "HISPANIC",
						"question_text" => "Are you of Hispanic, Latino or Spanish origin?",
						"question_type" => "Single Punch",
						"category_id" => 3,
						"category_text" => "Basic Profiling",
						"options" =>[
							[
								"option_text" => "No, not of Hispanic, Latino or Spanish origin",
								"option_id" => array_rand($hispanicOption)
							]
						]
						
					],
					[
						
						"question_id" => 4,
						"question_key" => "ETHNICITY",
						"question_text" => "Which of the following best describes your race?",
						"question_type" => "Single Punch",
						"category_id" => 1,
						"category_text" => "Demographic",
						"options" =>[
							[
								"option_text" => "White",
								"option_id" => array_rand($ethinicityOption)
							]
						]
					],
					[
						
						"question_id" => 5,
						"question_key" => "EDUCATION",
						"question_text" => "What is the highest level of education you have completed?",
						"question_type" => "Single Punch",
						"category_id" => 1,
						"category_text" => "Demographic",
						"options" =>[
							[
								"option_text" => "High school graduate",
								"option_id" => array_rand($eduOption)
							]
						]
					],
					[
						"question_id" => 2,
						"question_key" => "GENDER",
						"question_text" => "What is your gender?",
						"question_type" => "Single Punch",
						"category_id" => 1,
						"category_text" => "Demographic",
						"options" =>[
							[
								"option_text" => "Male",
								"option_id" => array_rand($maleOption)
							]
						]
					],
					[
						"question_id" => 1,
						"question_key" => "AGE",
						"question_text" => "What is your age?",
						"question_type" => "Numeric Open Ended",
						"category_id" => 1,
						"category_text" => "Demographic",
						"options" =>[
							[
								"option_text" => array_rand($ageOption)
							]	
							
						]
					],
					[
						"question_id" => 1,
						"question_key" => "STANDARD_ELECTRONICS",
						"question_text" => "Which of the following electronic products do you own?",
						"question_type" => "Multipunch",
						"category_id" => 1,
						"category_text" => "Demographic",
						"options" =>[
							[
								"option_text" => array_rand($ageOption)
							]	
							
						]
					]
				]
			],


		];

		// echo"<pre>";print_r($record);die;
		$collection->insert($record);
	}	
echo 'here';die;