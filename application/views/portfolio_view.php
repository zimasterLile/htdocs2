<h1>Портфолио</h1>
<p>
<table>
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
    <?php

//    foreach($data as $row)
//    {
//        echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
//    }

    while( $row = mysqli_fetch_assoc($data) ){
        //printf("%s (%s)\n", $row['id'], $row['year'], $row['site'], $row['description']);
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['year'].'</td><td>'.$row['site'].$row['description'].'</td></tr>';
    }

    ?>
</table>
</p>
