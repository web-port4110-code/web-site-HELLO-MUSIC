<!doctype html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.css">
        <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
        <script src="jq/jquery-3.7.1.min.js"></script>
        <script src="jq/header.js"></script>
        <link rel="stylesheet" href="css/instrument.css">
        <title>チケット予約フォーム</title>
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
                require_once './php_mojure/header.php';
            ?>
        </header>

        <main>
            <div class="mainContainer">
                <div class="headerSpace"></div>
                <article>
                    <h1>フルートってどんな楽器？</h1>
                    <figure class="instImg">
                        <img src="images/flute.png" alt="フルートの画像">
                    </figure>
                    <blockquote>
                        <div class="paragraph">
                            <h2>概要</h2>
                            <p>
                                フルートは、木管楽器の一種で、
                                リードを使わないエアリード（無簧）式の横笛である.
                            </p>
                            <p>
                                現代のフルート（モダン・フルート）は、バス・フルートなどの同属楽器と区別する場合、
                                グランド・フルートまたはコンサート・フルートとも呼ばれる、
                            </p>
                        </div>
                        <div class="workList">
                            <h2>作品例</h2>
                            <ul>
                                <li>ヴォルフガング・アマデウス・モーツァルト：フルート四重奏曲</li>
                                <li>セルゲイ・プロコフィエフ：フルートとピアノのためのソナタ</li>
                                <li>フランシス・プーランク：フルートとピアノのためのソナタ</li>
                            </ul>
                        </div>
                    </blockquote>
                </article>
            </div>
        </main>

        <footer>
            <?php
                require_once './php_mojure/footer.php';
            ?>
        </footer>
    </body>
</html>