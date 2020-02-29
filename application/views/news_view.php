<h1>Новости</h1>
<div>
    <?php
        for ($news_row = array(); $row = $data[0]->fetch_assoc(); $news_row[] = $row) ;
        for ($news_com = array(); $row = $data[1]->fetch_assoc(); $news_com[] = $row) ;
    ?>

    <?php for ($i = 0; $i < count($news_row); ++$i) { ?>
        <div class="news-block">
            <h1><?= $news_row[$i]['title']; ?></h1>
            <p><?= $news_row[$i]['date']; ?></p>
            <h4><?= $news_row[$i]['content']; ?></h4>

            <hr>
            <p>Коментарии</p>

            <?php if (isset($_SESSION['status'])) { ?>
                <form action="/news/new_comment" method="POST">
                    <input type='hidden' name='id_news_input' value="<?= $news_row[$i]['id']; ?>">
                    <input type='hidden' name='id_user_input' value="<?= $_SESSION['user_id'] ?>">
                    <input type='text' name='comment_news_input' placeholder="Введите коментарий">
                    <input type="submit" name="button_news_adding" value="Добавить"/>
                </form>
            <?php } ?>

            <div>
                <?php
                for ($j = 0; $j < count($news_com); ++$j) {
                    if($news_row[$i]['id'] == $news_com[$j]['id_news']){
                ?>
                        <p><?= $news_com[$j]['content'] ?></p>
                        <?php
                        if ((isset($_SESSION['user_id']) && $_SESSION['user_id'] == $news_com[$j]['id_user']) ||
                            isset($_SESSION['status']) && $_SESSION['status']  == $_SESSION['login'] . '_admin'){
                            ?>
                            <form action="/news/del_comment" method="POST">
                                <input type='hidden' name='id_comments_input' value="<?= $news_com[$j]['id_comments'] ?>">
                                <input type="submit" name="button_comments_del" value="X" />
                            </form>
                            <?php
                        }
                    }
                }
                ?>
            </div>

        </div>
    <?php } ?>
</div>