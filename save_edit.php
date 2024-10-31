<?php

/**
 * @author vania111
 * @copyright 2012
 */
$wp_root = '../../..';
if (file_exists($wp_root.'/wp-load.php')) {
	require_once($wp_root.'/wp-load.php');
} else {
	require_once($wp_root.'/wp-config.php');
}
$control = $_POST['control'];

if(!mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)) 
     die('Ошибка подключения к серверу БД');
    mysql_select_db(DB_NAME);
    
if($control == "edit"){
    
    $name = $_POST['name'];
    $href = $_POST['href'];
    $id = $_POST['ident'];
    $description = $_POST['description'];
    
    mysql_query("SET NAMES 'utf8';"); 
    mysql_query("SET CHARACTER SET 'utf8';"); 
    mysql_query("SET SESSION collation_connection = 'utf8_general_ci';");
    
    mysql_query("UPDATE radio_puls SET options='$href', name='$name', description='$description'
    WHERE id='$id'");
    echo "OK";
/*    
    $r2 = mysql_query('
        SELECT `id`, `options`, `name`, `description`
        FROM  `radio_puls`
        WHERE name_options = "link_radio"
    ');
    while($myrow = mysql_fetch_array($r2, MYSQL_ASSOC)){
        echo <<<HERE
        <li><a href="$myrow3[options]" ident="$myrow3[id]" title="$myrow3[name] $myrow[description]" description="$myrow[description]" onclick="return false; radio_list()">$myrow3[name]</a></li>
HERE;

    };*/
}elseif($control == "delete"){
    $id = $_POST['ident'];
    mysql_query("DELETE FROM radio_puls
    WHERE id='$id'");
    echo "Deletet";
}elseif($control == "add"){
    $name = $_POST['name'];
    $href = $_POST['href'];
    $description = $_POST['description'];
    mysql_query("INSERT INTO radio_puls ( name_options, options, name, description) 
    VALUES ('link_radio', '$href', '$name', '$description');");
    echo "Add";
}elseif(!empty($_POST['massiv'])){
    $i=1;
    foreach($_POST['massiv'] as $massiv){
        mysql_query("UPDATE `radio_puls` SET `positions`='$i' WHERE `id`='$massiv'");
        $i++;
    }
}
?>