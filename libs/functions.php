<?php
include('config.php');

function upload()
{
  if(is_uploaded_file($_FILES["upload"]["tmp_name"]))  
  {
    move_uploaded_file($_FILES["upload"]["tmp_name"], UPLOADDIR.$_FILES["upload"]["name"]);
    echo "<h3>Success</h3>";
  }
   else
    
  {
    echo "<h3>err</h3>";
  }
};
function printfile()
   {
	   function get_filesize($file)
{
  
    if(!file_exists($file)) return "Файл  не найден";
   
  $filesize = filesize($file);
   
   if($filesize > 1024)
   {
       $filesize = ($filesize/1024);
       
       if($filesize > 1024)
       {
            $filesize = ($filesize/1024);
        
           if($filesize > 1024)
           {
               $filesize = ($filesize/1024);
               $filesize = round($filesize, 1);
               return $filesize." ГБ";       
           }
           else
           {
               $filesize = round($filesize, 1);
               return $filesize." MБ";   
           }       
       }
       else
       {
           $filesize = round($filesize, 1);
           return $filesize." Кб";   
       }  
   }
   else
   {
       $filesize = round($filesize, 1);
       return $filesize." байт";   
   }
}


	$f = scandir(UPLOADDIR);
	if($f == false) printf("Каталог пуст");
else printf("<table  border=1px>
<thead>
    <tr>       
        <th>Назва файлу</th>
        <th>Розмір</th>
        <th>Видалити</th>
    </tr>
	
</thead>");
	foreach ($f as $file){
		
    if (!is_dir(UPLOADDIR.'/'.$file)){
		$size = get_filesize(UPLOADDIR.'/'.$file);
      printf('<tr><td>'.$file.'</td><td>'.$size.'</td><td><a href="index.php?name=' . $file . '">Delete</a></td></tr>');
	  //echo $file." ".$size."<br>";
    }
	
}

   };
function delfiles()
{
	
	//print_r($_GET);exit;
	 
   if(file_exists(UPLOADDIR . '/' . $_GET['name'])) {
      unlink(UPLOADDIR . '/' . $_GET['name']);
   }

};

?>
