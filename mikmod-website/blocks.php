<?php
function block_before ()
{
	echo '<table border=0 bgcolor="#ffffef" cellspacing=0 width="100%">';
	echo "\n";
	echo "<tr>\n";
	echo "<td>";
}

function block_after ()
{
	echo "</td>\n";
	echo "</tr>\n";
	echo "</table>\n";
}

?>


