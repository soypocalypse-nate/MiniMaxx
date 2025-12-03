<!-- form module ---------------------------------------------------------------------------------------------------------- -->

<BR>

<STYLE> 
	div.scroll { 
		background-color: #E0E0E0;
		overflow-x: hidden;
		overflow-y: auto;
		padding: 10px;
		height: 500px;
		} 
</STYLE>


<DIV class="scroll"> <PRE><?php

	//--Inputing user text ----------------------------------------------------------------------------------------------------
	
	//This checks if "text_input_box" is empty, if so it dose nothing. 
	if(empty($_POST["text_input_box"]) == false) {
	
		//This opens the database.txt in append mode and asigns it to the $database var
		$database = fopen("database.txt", "a"); 
		
		//This gets the text from "text_input_box" in the header, and cleans it.
		$filtered_text_input = filter_input(INPUT_POST, "text_input_box", FILTER_SANITIZE_SPECIAL_CHARS);
		
		//This takes the clean text, and adds some formating, and the date, then writes it to the var $txt_input
		$txt_input = "POST " . date("Y.m.d h:i:s") . "\n" . $filtered_text_input . "\n\n";
		
		//This takes the text from the var $txt_input and writes it to the file that $database points to.
		fwrite($database, $txt_input);
		
		//This closes the database file
		fclose($database);
		
	}
	
	else { }
	
	
	
	
	//--Displaying the text in the database -----------------------------------------------------------------------------------
	
	//This checks if database.txt exists, if it dose not it prints a message. 
	if(file_exists("database.txt") == true) {
	
		//This checks if database.txt is empty, if so do nothing.
		if(filesize("database.txt") != 0) {
		
			//This opens the database in read mode
			$database = fopen("database.txt", "r");
			
			//This takes the text from the database and writes it to the screen
			echo fread($database,filesize("database.txt"));
			
			//This closes the database again. 
			fclose($database);
		
		}
		
		else { }
	
	}

	else { echo "No database. Make a post to make one."; }
	
	
?> </PRE> </DIV>

<!-- form module ---------------------------------------------------------------------------------------------------------- -->
