<h1>Админ панель</h1>

<form action="/admin/admin_start" method="POST">
    <input type='text' name='loginAdmin'>
    <input type='text' name='passwordAdmin'>
    <input type="submit" name="button_admin" value="войти"/>
</form>

<!--<a href="controlller"></a>-->
<button onclick="document.location='admin/logout'">Выход</button>