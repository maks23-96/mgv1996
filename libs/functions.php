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
	$f = scandir(UPLOADDIR);
	if($f == false) printf("Каталог пуст");
else printf("<table  border=1px>
<thead>
    <tr>       
        <th>Название файла</th>
        <th>Размер</th>
        <th>Удалить</th>
    </tr>
	
</thead>");
/*foreach ($f as $file){
	if (!is_dir(UPLOADDIR.'/'.$file)){
	$size = filesize(UPLOADDIR.'/'.$file);
	printf('<tr><td></td><td>'.$size.'</td><td></td></tr>');
}}*/
	foreach ($f as $file){
		
    if (!is_dir(UPLOADDIR.'/'.$file)){
		$size = filesize(UPLOADDIR.'/'.$file);
      printf('<tr><td>'.$file.'</td><td>'.$size.' B</td><td><input type="button" value="Del"/></td></tr>');
    }
	
}

   };
function delfiles()
{

};

?>
