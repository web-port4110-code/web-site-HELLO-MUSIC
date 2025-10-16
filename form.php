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
        <title>チケット予約フォーム</title>
    </head>

    <body>
        <header>
            <?php
                require_once './php_mojure/header.php';
            ?>
        </header>

        <main>
            <div class="mainContainer">    

                <form method="post" action="http://localhost:8888/validation/check.php">
                    <fieldset>
                        <legend>
                            <span>お名前<span>必須</span></span>
                        </legend>
                        <div class="name-inputAria">
                            <div>
                                <label for="familyname" class="name-sublabel">性</label>
                                <input type="text" name="familyname" id="familyname" required>
                            </div>
                            <div>
                                <label for="firstname" class="name-sublabel">名</label>
                                <input type="text" name="firstname" id="firstname" required>
                            </div>
                        </div>
                    </fieldset>
                    <div class="email-input-mojure">
                        <label for="email">メールアドレス<span>必須</span></label>
                        <input type="text" name="email" id="email" placeholder="" required>
                    </div>
                    <div class="concert-input-mojure mask-element">
                        <fieldset>
                            <legend>
                                <span>予約する演奏会<span>必須</span></span>
                            </legend>
                            <div class="select-input-aria">
                                <label><input type="checkbox" name="concert[]" value="第7回">「ヴァイオリンの調べ」</label>
                                <label><input type="checkbox" name="concert[]" value="第2回">「学生コンサート」</label>
                                <label><input type="checkbox" name="concert[]" value="第6回">「モーツァルトの魅力」</label>
                                <label><input type="checkbox" name="concert[]" value="第4回">「作曲コンクール 本戦」</label>
                            </div>
                        </fieldset>
                    </div>
                    <button>送信</button>
                </form>

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
        </main>

        <footer>
            <?php
                require_once './php_mojure/footer.php';
            ?>
        </footer>
    </body>
</html>