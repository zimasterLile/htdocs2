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
            <td><?= $row['year'] ?></td>
            <td><?= $row['site'] ?></td>
            <td><?= $row['description'] ?><?= $row['description'] ?>
            </td>
        </tr>
        <?php
    }

    ?>
    <?php if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin') { ?>
        <form action="/portfolio/del_data" method="POST">
            <input style="display: inline;" type='text' name='pole1' size='2' maxlength='5' value='1'>
            <input style="cursor:pointer;display: inline;" type="submit" name="button_id" value="X"/>
        </form>
    <?php } ?>
</table>
</p>

<style>
    table {
        border: 1px solid black;
    }

    td {
        border: 1px solid black;
    }

    tr {
        border: 1px solid black;
    }
</style>