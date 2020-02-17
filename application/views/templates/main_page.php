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