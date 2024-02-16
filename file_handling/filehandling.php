 <?php
 
 #openfile
 //$myfile=fopen("myfile.txt","rw");
 
 #readfile
 //echo fgets($myfile);
 
 #add content
 $myfile=fopen("myfile.txt","rw");
 $add="hello user...!";
 fwrite($myfile,$add);
 echo fgets($myfile);
 
 #append content
 //$add="i append my content";
 //file_put_contents("myfile.txt",$add,FILE_APPEND);
 
 #file exits
 if(file_exists("myfile.txt"))
 {
	 echo "this file is exits";
 }
else
{
     echo "this file is not exits";
}	 
 
 #to close file
 fclose($myfile);
 
 
?>
