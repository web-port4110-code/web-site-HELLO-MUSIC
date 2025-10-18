<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.css">
        <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
        <script src="jq/jquery-3.7.1.min.js"></script>
        <script src="jq/header.js"></script>
        <link rel="stylesheet" href="css/form.css">
        <title>フォーム入力結果</title>
    </head>
    <body>
        <header>
            <?php
                require_once './php_mojure/header.php';
            ?>
        </header>
        <main>
        <?php
        require_once './php_mojure/validation.php';
        require_once './php_mojure/print_checked_attr.php';
        require_once './php_mojure/escape_value.php';
        
        $familyname = escapeValue(trim($_POST['familyname']));
        $firstname = escapeValue(trim($_POST['firstname']));
        $email = escapeValue(trim($_POST['email']));
        $concert = $_POST['concert'];
        $errorArray = [];

        const FAMILY_CHECK_INFO = ['limit' => 30, 'label' => '性'];
        const FIRST_CHECK_INFO = ['limit' => 30, 'label' => '名'];
        const EMAIL_CHECK_INFO = ['limit' => 356, 'label' => 'メールアドレス'];
        
        checkLength($familyname, FAMILY_CHECK_INFO);
        checkLength($firstname, FIRST_CHECK_INFO);
        checkLength($email, EMAIL_CHECK_INFO);
        checkFormat($email);
        checkConcertName($concert);

        if (count($errorArray) === 0) {
        ?>
            <p>
                正常に入力されていました。<br>
                なお、入力されたデータは保存されません。
            </p>
            <p><a href="index.php">ホームへ戻る</a></p>
        <?php
        } else {
        ?>
            <div class="mainContainer">
                <div class="headerSpace"></div>
                <div class="formTitle">
                    <h1>チケット予約フォーム</h1>
                </div>
                <section class="inputMojure">
                    <div class="errorBox">
                        <p>入力されたデータにエラーがありました！</p>
                        <ul>
                            <?php
                            foreach ($errorArray as $error) {
                            ?>
                                <li><?=$error ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <form method="post" action="http://localhost:8888/web-site-HELLO-MUSIC/check.php">
                        <div class="inputMojure--name">
                            <p>
                                <span>1. お名前<span class="requireMark">必須</span></span>
                            </p>
                            <div class="inputMojure--name__aria">
                                <div class="mb-3">
                                    <label for="familyname" class="form-label">性</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        name="familyname" 
                                        id="familyname" 
                                        value="<?=$familyname ?>" 
                                        required
                                    >
                                </div>
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">名</label>
                                    <input 
                                        type="text" 
                                        class="form-control" 
                                        name="firstname" 
                                        id="firstname" 
                                        value="<?=$firstname ?>" 
                                        required
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="inputMojure--email mb-3">
                            <p>
                                <span>2. メールアドレス<span class="requireMark">必須</span></span>
                            </p>
                            <div class="inputMojure--email__aria">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="email" 
                                    id="email" 
                                    placeholder="" 
                                    value="<?=$email ?>" 
                                    required
                                >
                            </div>
                        </div>
                        <div class="inputMojure--concert">
                            
                            <p>
                                <span>3. 予約する演奏会<span class="requireMark">必須</span></span>
                            </p>
                            <div class="inputMojure--concert__aria">
                                <div class="form-check">
                                    <label class="form-check-label" for="concert1">「ヴァイオリンの調べ」</label>
                                    <input 
                                        type="checkbox" 
                                        id="concert1" 
                                        name="concert[]" 
                                        value="第7回" 
                                        class="form-check-input"
                                        <?php printCheckedAttr($concert, '第1回'); ?>
                                    >
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="concert2">「学生コンサート」</label>
                                    <input 
                                        type="checkbox" 
                                        id="concert2" 
                                        name="concert[]" 
                                        value="第2回" 
                                        class="form-check-input" 
                                        <?php printCheckedAttr($concert, '第2回'); ?>
                                    >
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="concert3">「モーツァルトの魅力」</label>
                                    <input 
                                        type="checkbox" 
                                        id="concert3" 
                                        name="concert[]" 
                                        value="第6回" 
                                        class="form-check-input" 
                                        <?php printCheckedAttr($concert, '第3回'); ?>
                                    >
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="concert4">「作曲コンクール 本戦」</label>
                                    <input 
                                        type="checkbox" 
                                        id="concert4" 
                                        name="concert[]" 
                                        value="第4回" 
                                        class="form-check-input" 
                                        <?php printCheckedAttr($concert, '第4回'); ?>
                                    >
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
        <?php
        }
        ?>
        </main>
        <p><a href="form.php">戻る</a></p>
        <footer>
            <?php
                require_once './php_mojure/footer.php';
            ?>
        </footer>
    </body>
</html>