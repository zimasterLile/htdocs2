<h1>Админ панель</h1>

<button onclick="document.location='/admin/logout'">Выход</button>

<?php if(isset($_SESSION['status']) && $_SESSION['status'] == $_SESSION['login'] . '_admin') { ?>
        <div class="container mt-4 background_color_admin" >
            <form action="/admin/del_data" method="POST">
                <h3>Удаление записи из портфолио</h3>
                <input type='text' name='pole1' size='2' placeholder="id элемента" class="form-control"></br>
                <input type="submit" name="button_del_portfolio" value="X" class="btn btn-success"/>
            </form>
        </div>
        </br>

        <div class="container mt-4 background_color_admin" >
            <form action="/admin/adding_data" method="POST">
                <h3>Добавление записи в портфолио</h3>
                <input type='text' name='year_portfolio_input' placeholder="год" class="form-control"></br>
                <input type='text' name='site_portfolio_input' placeholder="сайт" class="form-control"></br>
                <input type='text' name='description_portfolio_input' placeholder="описание" class="form-control"></br>
                <input type="submit" name="button_adding_portfolio" value="Добавить" class="btn btn-success"/>
            </form>
        </div>
        </br>

        <div class="container mt-4 background_color_admin" >
            <form action="/admin/redact_data" method="POST">
                <h3>Изменить запись в портфолио</h3>
                <input type='text' name='id_portfolio_redact' placeholder="id" class="form-control"></br>
                <input type='text' name='year_portfolio_redact' placeholder="год" class="form-control"></br>
                <input type='text' name='site_portfolio_redact' placeholder="сайт" class="form-control"></br>
                <input type='text' name='description_portfolio_redact' placeholder="описание" class="form-control"></br>
                <input type="submit" name="button_redact_portfolio" value="Изменить" class="btn btn-success"/>
            </form>
        </div>

<!--    //News------------------------------------------------------------------------------------------->
        <div class="container mt-4 background_color_admin" >
            <form action="/admin/del_news_data" method="POST">
                <h3>Удаление записи Новостей</h3>
                <input type='text' name='delete_news' size='2' placeholder="id элемента" class="form-control"></br>
                <input type="submit" name="button_del_news" value="X" class="btn btn-success"/>
            </form>
        </div>
        </br>

        <div class="container mt-4 background_color_admin" >
            <form action="/admin/adding_news_data" method="POST">
                <h3>Добавление записи Новостей</h3>
                <input type='text' name='date_news_input' placeholder="дата" class="form-control"></br>
                <input type='text' name='title_news_input' placeholder="загаловок" class="form-control"></br>
                <input type='text' name='content_news_input' placeholder="описание" class="form-control"></br>
                <input type="submit" name="button_adding_news" value="Добавить" class="btn btn-success"/>
            </form>
        </div>
        </br>

        <div class="container mt-4 background_color_admin" >
            <form action="/admin/redact_news_data" method="POST">
                <h3>Изменить запись Новостей</h3>
                <input type='text' name='id_news_redact' placeholder="id" class="form-control"></br>
                <input type='text' name='date_news_redact' placeholder="дата" class="form-control"></br>
                <input type='text' name='title_news_redact' placeholder="загаловок" class="form-control"></br>
                <input type='text' name='content_news_redact' placeholder="описание" class="form-control"></br>
                <input type="submit" name="button_redact_news" value="Изменить" class="btn btn-success"/>
            </form>
        </div>
<?php } else{ ?>

    <form action="/admin/admin_start" method="POST">
        <input type='text' name='loginAdmin'>
        <input type='text' name='passwordAdmin'>
        <input type="submit" name="button_admin" value="войти" class="btn btn-success"/>
    </form>

<?php } ?>
