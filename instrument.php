<!doctype html>
<html lang="ja">
    <?php
        require_once __DIR__.'/php_mojure/escape_value.php';
        $getParam = escapeValue(trim($_GET['slug']));
        try{
            require_once './php_mojure/connect_db.php';
            require_once './php_mojure/table_name.php';
            $db = getdb();
            $tableName = getTableName('instrument');
            $sql = "SELECT * FROM {$tableName} WHERE slug = :slug";
            $stt = $db->prepare($sql);
            $stt->bindValue(':slug', $getParam);
            $stt->execute();
            $row = $stt->fetch(PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            die("接続エラー：{$th->getMessage()}");
        }
    ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.css">
        <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
        <script src="jq/jquery-3.7.1.min.js"></script>
        <script src="jq/header.js"></script>
        <link rel="stylesheet" href="css/instrument.css">
        <link rel="stylesheet" href="css/modal.css">
        <title><?=$row['title'] ?></title>
        <!--font Awesome-->
        <script src="https://kit.fontawesome.com/98bfb8a6c1.js" crossorigin="anonymous"></script>
        <!--webフォント-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Allura&family=Cinzel:wght@400..900&family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <?php
                require_once __DIR__.'/php_mojure/header.php';
            ?>
        </header>

        <main>
            <div class="mainContainer">
                <div class="headerSpace"></div>
                <article>
                    <h1><?=$row['title'] ?></h1>
                    <figure class="instImg">
                        <div class="instImg__box">
                            <img src="<?=$row['img'] ?>" alt="<?=$row['alt'] ?>">
                        </div>
                    </figure>
                    <blockquote>
                        <div class="paragraph">
                            <h2>概要</h2>
                            <?=$row['para'] ?>
                        </div>
                        <div class="workList">
                            <h2>作品例</h2>
                            <div class="workList__flexContainer">
                                <ul>
                                    <?=$row['list'] ?>
                                </ul>
                            </div>
                        </div>
                    </blockquote>
                </article>
            </div>

            <!--モーダル-->
            <?php
                require_once __DIR__.'/php_mojure/modal.php';
            ?>
        </main>

        <footer>
            <?php
                require_once __DIR__.'/php_mojure/footer.php';
            ?>
        </footer>
    </body>
</html>