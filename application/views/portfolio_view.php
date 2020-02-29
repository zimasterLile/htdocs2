<h1>Портфолио</h1>
<p>
<table>
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr>
        <td>Год</td>
        <td>Проект</td>
        <td>Описание</td>
    </tr>
    <?php

        while ($row = mysqli_fetch_assoc($data)) {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['year'] ?></td>
                <td><?= $row['site'] ?><?= $row['description'] ?>
                </td>
            </tr>
            <?php
        }

    ?>

    <!--    INSERT INTO `portfolio`(`year`, `site`, `description`) VALUES ('2222','frefrevg','grebvgrevg')-->
    <!--    <a href="/portfolio/del_data">X</a>-->
    <!--    <a href="/portfolio/del_data/del=ok&?id=--><? //= $row['id']; ?><!--">Удалить</a>-->
</table>
</p>
