<?php
    if (isset($_SESSION['status'])){
?>
    <h1>Привет <?=$_SESSION['status']?></h1>
    <button onclick="document.location='/user/logout'">Выход</button>
<?php } else { ?>
        <h1>Извените но вы не вошьли в учётную запись</h1>
<?php } ?>
