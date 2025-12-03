<!DOCTYPE html> <HTML> 

<HEAD>

<title> MiniMaxx </title>

<!-- this is the setup for the <DIV> that lets you scroll (CSS) -->
<style> div.scroll { background-color: #E0E0E0; width: 95%; height: 500px; overflow-x: hidden; overflow-y: auto; padding: 20px; } </style>

</HEAD>




<BODY>

<I> MiniMaxx Text board </I>

<CENTER> 
	<form action="" method="post"> <!-- this tells the forum what function to use for posting -->
	
	<PRE>
		Text input: <input type="text" name="text_input_box"> <!-- this gives you a text box with the name text_input_box -->
	</PRE>
	
	<input type="submit"> <!-- this gives you a submit button. --> 

	</form>
</CENTER>

<BR>






<div class="scroll">
<PRE> <?php




$database = fopen("database.txt", "a"); 

$filtered_text_input = filter_input(INPUT_POST, "text_input_box", FILTER_SANITIZE_SPECIAL_CHARS);

$txt_input = "\n" . "POST " . date("Y.m.d h:i:s") . "\n" . $filtered_text_input . "\n"; 

fwrite($database, $txt_input);

fclose($database);










$database = fopen("database.txt", "r") or die("Unable to open database.txt");
echo fread($database,filesize("database.txt"));
fclose($database);

?> </PRE>
</div>

<CENTER> <H5> MiniMaxx CC0 v000</H5> </CENTER>

</BODY> </HTML>
