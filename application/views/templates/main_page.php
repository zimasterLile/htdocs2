<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
                                    initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>FirstProjectMVC</title>
</head>

<body>
    <div class="scale">
        <div class="main-wrapper">
            <div class="header">
                <div>
                    <h3>Здравствуй, пользователь</h3>
                </div>

                <form id="form-buttons" method="post" action="/main">
                    <input type="submit" value="Главная">
                </form>

                <form id="form-buttons" method="post" action="/service">
                    <input type="submit" value="Услуги">
                </form>

                <form id="form-buttons" method="post" action="/portfolio">
                <input type="submit" value="Портфолио">
                </form>

                <form id="form-buttons" method="post" action="/contacts">
                <input type="submit" value="Контакты">
                </form>

            </div>
            <div class="main-template">
                <?php include "application/views/templates/".$content_view; ?>
            </div>
            <div class="footer">
                <h5>Выполнил, гений - Алексей Ларионов</h5>
            </div>
        </div>
    </div>
</body>

</html>