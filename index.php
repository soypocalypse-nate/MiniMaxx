<!DOCTYPE html> <HTML> 

<!-- This bit of code checks if there is a CSS style_module, if so it uses it -->
<?php if (file_exists("style_module.css") == true):  ?><link rel="stylesheet" href="style_module.css"> <?php endif; ?>

<!-- If there is no CSS style_module, then this sets default colors -->
<?php if (file_exists("style_module.css") == false): ?>
<STYLE> 
    div.easy_css_style { background-color: #FFFFFF; }
	div { background-color: #E0E0E0; } 
</STYLE> <?php endif; ?>


<DIV class="easy_css_style"> <!-- This is for the style_module to set colors, or the default colors -->

<!-- This is where the moduals get loaded -->
<?php
	include("header_module.php");
	include("form_module.php");
	include("footer_module.php")
?>

</DIV>
</HTML>
