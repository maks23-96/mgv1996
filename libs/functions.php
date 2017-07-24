<?php
include('config.php');
function upload()
{
  if(is_uploaded_file($_FILES["upload"]["tmp_name"]))  
  {
    move_uploaded_file($_FILES["upload"]["tmp_name"], uploaddir.$_FILES["upload"]["name"]);
    echo "<h3>Success</h3>";
  }
   else
    
  {
    echo "<h3>err</h3>";
  }
};
function printfile()
   {

   };
function delfiles()
{

};

?>
