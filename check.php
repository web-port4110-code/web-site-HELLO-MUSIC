<!DOCTYPE html>
<html>
    <head>
        <title>バリデーション</title>
        <meta charset="utf-8">
    </head>
    <body>
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
            <p>正常に入力されていました。</p>
        <?php
        } else {
        ?>
            <ul>
            <?php
            foreach ($errorArray as $error) {
            ?>
                <li><?=$error ?></li>
            <?php
            }
            ?>
            </ul>
            <form method="post" action="http://localhost:8888/validation/check.php">
                <fieldset>
                    <legend>
                        <span>お名前<span>必須</span></span>
                    </legend>
                    <div class="name-inputAria">
                        <div>
                            <label for="familyname" class="name-sublabel">性</label>
                            <input type="text" name="familyname" id="familyname" value="<?=$familyname ?>" required>
                        </div>
                        <div>
                            <label for="firstname" class="name-sublabel">名</label>
                            <input type="text" name="firstname" id="firstname" value="<?=$firstname ?>" required>
                        </div>
                    </div>
                </fieldset>
                <div class="email-input-mojure">
                    <label for="email">メールアドレス<span>必須</span></label>
                    <input type="text" name="email" id="email" placeholder="" value="<?=$email ?>" required>
                </div>
                <div class="concert-input-mojure mask-element">
                    <fieldset>
                        <legend>
                            <span>予約する演奏会<span>必須</span></span>
                        </legend>
                        <div class="select-input-aria">
                            <label><input type="checkbox" name="concert[]" value="第1回" <?php printCheckedAttr($concert, '第1回'); ?>>「ヴァイオリンの調べ」</label>
                            <label><input type="checkbox" name="concert[]" value="第2回" <?php printCheckedAttr($concert, '第2回'); ?>>「学生コンサート」</label>
                            <label><input type="checkbox" name="concert[]" value="第3回" <?php printCheckedAttr($concert, '第3回'); ?>>「モーツァルトの魅力」</label>
                            <label><input type="checkbox" name="concert[]" value="第4回" <?php printCheckedAttr($concert, '第4回'); ?>>「作曲コンクール 本戦」</label>
                        </div>
                    </fieldset>
                </div>
                
                <button>送信</button>
            </form>
        <?php
        }


        
        
        
        ?>
        <p><a href="phpform.php">戻る</a></p>
    </body>
</html>