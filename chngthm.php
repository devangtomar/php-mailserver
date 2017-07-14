<?php
$od=opendir("theme");
while($file=readdir($od))
{	
	if($file!='.' && $file!='..')
	{
	
		echo "<a href='HomePage.php?conTheme=$file'>
			
				<img src='theme/$file' height='100' width='100'> 
			</a>";
	}
}

?>