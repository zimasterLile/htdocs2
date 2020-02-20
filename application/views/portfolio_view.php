<h1>Портфолио</h1>
<p>
<table>
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
    <?php

    while( $row = mysqli_fetch_assoc($data) ){
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['year'].'</td><td>'.$row['site'].$row['description'].'</td></tr>';
    }

    ?>

<!--    <form action="/portfolio/del_data" method="post">-->
<!--        <button>x</button>-->
<!--    </form>-->
    <a href="/portfolio/del_data">X</a>
</table>
</p>
