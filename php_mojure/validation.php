<?php
function checkLength($value, $checkInfo) {
    $alart1 = "{$checkInfo['label']}は{$checkInfo['limit']}字以内でお願いします。";
    $length = mb_strlen($value);
    global $errorArray;

    if($length > $checkInfo['limit']) {
        $errorArray[] = $alart1;
    }
}

function checkFormat($email_value) {
    $alert2 = "メールアドレスは正規のフォーマットで入力してください";
    $preg_pettern = '/^[\w\-\.]+@[\w\-\.]+.[a-zA-Z]+$/';
    global $errorArray;

    if(!preg_match($preg_pettern, $email_value)) {
        $errorArray[] = $alert2;
    }
}

function checkConcertName($concert_values) {
    $alert3 = 'コンサートは正しいものを選択してください';
    $result_flag = 0;
    $filter = ['第1回', '第2回', '第3回', '第4回'];
    global $errorArray;

    foreach ($concert_values as $concert_value) {
        if (in_array($concert_value, $filter) === false) {
            $result_flag = 1;
        }
    }
    if ($result_flag === 1) {
        $errorArray[] = $alert3;
    }  
}