<?php include 'header.php';

if(isset($_POST['name']) && isset($_POST['tel'])) 
{
    $name = htmlentities($_POST['name']);
    $tel = htmlentities($_POST['tel']);
    $output ="
    Имя: $name<br />
    Контакты: $tel<br />";
    echo $output;
}
else
{   
    echo "Вы не ввели данные";
}

$fh = fopen( 'file.txt', 'a' );
fwrite( $fh,"Имя:$name,Контакты:$tel \n");
fclose( $fh );
?>


    <h1>Контакты</h1>
<ul>
    <li>+7 235 06 23 </li>
    <li>+7 235 12 23</li>
</ul>
<button><a href="http:/home.php">Назад</a></button>

