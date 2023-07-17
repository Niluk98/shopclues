
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='2'>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        
        <?php
global $wpdb;
global $table_prefix;
$table=$table_prefix.'form_data';
$sql ="select * from $table";
$result=$wpdb->get_results($sql);
// print_r($result);
foreach($result as $rows){
    ?>
    <tr>
        <td><?php echo $rows->id;?></td>
        <td><?php echo $rows->name;?></td>
    </tr>



<?php
}
?>
       
    </table>
</body>
</html>

