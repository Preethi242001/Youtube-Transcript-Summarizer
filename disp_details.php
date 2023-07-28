<?php
	header('Content-Type: text/html; charset=utf-8');

   
   echo "<textarea name='mydata' rows='200' cols='200 ' spellcheck='false' >\n";
   $video_url= $_REQUEST["video_url"];
   $tlang = $_REQUEST["language"];

   echo "php code:arguments received video_url as : [$video_url]";
   echo "<br>";
  
   echo "php code:arguments received language code as : [$tlang]";
   echo "<br>";

  
   $pgm = 'C:\xampp\htdocs\TESTING\yts.py';
   # passing arguments to python program with space as separator
   $pgm = $pgm .  " ". $video_url. " " . $tlang. " " .  "FALSE";
   
   echo " in php: Through shell_exec() python program execution started: [$pgm]";
   echo "<br>";
  
   
   $command_exec = escapeshellcmd($pgm);
   echo $command_exec;
   $str_output = shell_exec($command_exec);
   
   
   echo utf8_encode($str_output);
   #$echo $str_output;
   #echo htmlspecialchars($str_output)."\n";
  
 
   echo " in php: Through shell_exec() python program execution completed ....";
   echo "</textarea >";
  
?>


<html>
<head>
</head>
<body>

	
	<p style="font-size:30px">
	 
	<br>
	<br>
	<a href="transcript.txt"> View Transcript text file </a>
	<br>
	<br>
	<a href="summary.txt"> View Summary text file </a>
	<br>
	<br>
	
	<a href="transcript.pdf"> View Transcript PDF file </a>
	<br>
	<br>
	<a href="summary.pdf"> View Summary PDF file </a>
	<br>
	<br>

</body>	
</html>






  

  
  



