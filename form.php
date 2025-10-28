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
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/modal.css">
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
                <div class="formTitle">
                    <h1>チケット予約フォーム</h1>
                </div>
                <section class="inputMojure">
                    <form method="post" action="http://localhost:8888/web-site-HELLO-MUSIC/check.php">
                        <div class="inputMojure--name">
                            <p>
                                <span>1. お名前<span class="requireMark">必須</span></span>
                            </p>
                            <div class="inputMojure--name__aria">
                                <div class="mb-3">
                                    <label for="familyname" class="form-label">性</label>
                                    <input type="text" class="form-control" name="familyname" id="familyname" placeholder="例)山田" required>
                                </div>
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">名</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="例)太郎" required>
                                </div>
                            </div>
                        </div>
                        <div class="inputMojure--email mb-3">
                            <p>
                                <span>2. メールアドレス<span class="requireMark">必須</span></span>
                            </p>
                            <div class="inputMojure--email__aria">
                                <input type="text" class="form-control" name="email" id="email" placeholder="例)abc@gmail.com" required>
                            </div>
                        </div>
                        <div class="inputMojure--concert">
                            
                            <p>
                                <span>3. 予約する演奏会<span class="requireMark">必須</span></span>
                            </p>
                            <div class="inputMojure--concert__aria">
                                <div class="form-check">
                                    <label class="form-check-label" for="concert1">「ヴァイオリンの調べ」</label>
                                    <input type="checkbox" id="concert1" name="concert[]" value="第7回" class="form-check-input">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="concert2">「学生コンサート」</label>
                                    <input type="checkbox" id="concert2" name="concert[]" value="第2回" class="form-check-input">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="concert3">「モーツァルトの魅力」</label>
                                    <input type="checkbox" id="concert3" name="concert[]" value="第6回" class="form-check-input">
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="concert4">「作曲コンクール 本戦」</label>
                                    <input type="checkbox" id="concert4" name="concert[]" value="第4回" class="form-check-input">
                                </div>
                            </div>
                        </div>
                        <div class="inputMojure--button">
                            <button>送信する</button>
                        </div>
                    </form>
                </section>

                <h1 class="title-name">音楽祭「Hello Sound」</h1>
                <p class="text-primary">2007.08.22(sat)~23(sun)</p>
                <p>sansanwasenwa.narinari.1111@gmail.com</p>
                <p>@gmail.com</p>
                <p>sansanwasenwa.narinari.1111@com</p>
                <p>sansanwasenwa.narinari.1111@gmail.</p>
                <p>sansanwasenwa.narinari.1111gmail.com</p>
                <p>どんぶりどうもありがとうございますようこそいらっしゃいました</p>
                <p>どんぶりこどうもありがとうございますようこそいらっしゃいました</p>
            </div>

            <!--モーダル-->
            <?php
                require_once __DIR__.'/php_mojure/modal.php';
            ?>
        </main>

        <footer>
            <?php
                require_once './php_mojure/footer.php';
            ?>
        </footer>
    </body>
</html>