<?PHP
    error_reporting(0);
    //ラジオボタン+チェックボックス+セレクトボックス用配列
    $radio = ["男性", "女性", "不明"];
    $check = [1 => "雑誌", 2 => "広告", 3 => "知人の紹介" ];
    $select = [1 => "商品について", 2 => "サイトについて", 3 => "その他"];

    //すべて受信
    extract($_POST, EXTR_SKIP);


    //不要文字の除去
    $surname = str_replace(array(" ", "　"), '' , $surname);
    $name = str_replace(array(" ", "　"), "", $name);
    $address = str_replace(array("  ", "　　"), " ", $address);
    $phone1 = str_replace(array(" ", "　"), "", $phone1);
    $phone2 = str_replace(array(" ", "　"), "", $phone2);
    $phone3 = str_replace(array(" ", "　"), "", $phone3);
    $email1 = str_replace(array(" ", "　"), "", $email1);
    $email2 = str_replace(array(" ", "　"), "", $email2);
    $inquiry = str_replace("\n\r\n\r", "", $inquiry);
    $inquiry = trim($inquiry, " 　\n\r");

    //ドメイン判定用
    $domain = strrchr($email2, ".");
    $domain = trim($domain, ".");



    //エラー用FLAG未記入の場合1にする
    $flag=0;



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォームの確認</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="wrap">

        <header><h1>お問い合わせ 内容の確認</h1></header>

        <div class="form">
            <div class="tag"><label>姓名<span>必須</span></label></div>

            <?php if(empty($surname) !== false and empty($name) !== false){

                echo '<p class="error">姓名を入力してください。</p>';
                $flag=1;

            }elseif(empty($surname) !== false){

                echo '<p class="error">名字を入力してください。</p>';
                $flag=1;

            }elseif(empty($name) !== false){

                echo '<p class="error">お名前を入力してください。</p>';
                $flag=1;

            }else{
                echo '<p>'. htmlspecialchars($surname)." ".htmlspecialchars($name). '</p>';
            } ?>
        </div>

        <div class="form">
            <div class="tag"><label>性別<span>必須</span></label></div>
            <?php
            echo '<p>'. $radio[$sex]. '</p>';
            ?>
        </div>

        <div class="form">
            <div class="tag"><label>住所<span>必須</span></label></div>
            <?php
            if(empty($address) !== false){

                echo '<p class="error">ご住所を入力してください。</p>';
                $flag=1;

            }elseif(mb_strlen($address) >= 100){

                echo '<p class="error">入力文字数が多すぎます。100文字以内で入力しなおしてください。</p>';

            }else{

                echo '<p>'.htmlspecialchars($address).'</p>';

            }
            ?>
        </div>

        <div class="form">
            <div class="tag"><label>電話番号<span>必須</span></label></div>
            <?php
            if(empty($phone1) !== false and empty($phone2) !== false and empty($phone3) !== false){

                echo '<p class="error">お電話番号を入力してください。</p>';
                $flag=1;

            }elseif(empty($phone1) !== false or empty($phone2) !== false or empty($phone3) !== false){

                echo '<p class="error">お電話番号が未入力の欄があります。ハイフンごとに分けて入力してください。</p>';
                $flag=1;

            }elseif(is_numeric($phone1) === false or is_numeric($phone2) === false or is_numeric($phone3) === false){

                echo '<p class="error">お電話番号が数値でない欄があります。正しく入力してください。</p>';
                $flag=1;

            }else{
                echo '<p>'.htmlspecialchars($phone1).'-'.htmlspecialchars($phone2).'-'.htmlspecialchars($phone3).'</p>';
            }
            ?>
        </div>

        <div class="form">
            <div class="tag"><label>メールアドレス<span>必須</span></label></div>
            <?php
            if(empty($email1) !== false and empty($email2) !== false){

                echo '<p class="error">メールアドレスを入力してください。</p>';
                $flag=1;

            }elseif(empty($email1) !== false){

                echo '<p class="error">メールアドレス@以前を入力してください。</p>';
                $flag=1;

            }elseif(empty($email2) !== false){

                echo '<p class="error">メールアドレス@以降を入力してください。</p>';
                $flag=1;

            }elseif(strpos($email2, ".") === false){

                echo '<p class="error">正しい形式でメールアドレス@以降を入力してください。</p>';
                $flag=1;

            }elseif(strlen($email2) - (strrpos($email2, ".") + 1) < 2 or ctype_alpha($domain) === false){

                echo '<p class="error">正しい形式でメールアドレス@以降を入力してください。</p>';
                $flag=1;


            }elseif(strrpos($email2, ".") === false){

                echo '<p class="error">正しい形式でメールアドレス@以降を入力してください。</p>';
                $flag=1;

            }else{

                echo '<p>'.htmlspecialchars($email1).'@'.htmlspecialchars($email2).'</p>';

            }
            ?>
        </div>

        <div class="form">
            <div class="tag"><label>サイトを知った経緯<span class=any>任意</span></label></div>
            <?php
            if(empty($know) === false){
                echo '<p>';
                for($i=0;$i<count($know);$i++) {
                    echo $check[$know[$i]]. " ";
                }
                echo '</p>';
            }
            ?>
        </div>

        <div class="form">
            <div class="tag"><label>お問い合わせカテゴリ<span>必須</span></label></div>
            <?php
            if($category == 0){

                echo '<p class="error">お問い合わせのカテゴリーを選択してください。</p>';
                $flag=1;

            }else{
                echo '<p>'. $select[$category]. '</p>';
            }
            ?>
        </div>

        <div class="form">
            <div class="tag"><label>お問い合わせ内容<span>必須</span></label></div>
            <?php
            if(trim($inquiry, " 　\n\r") == false){

                echo '<p id="errortext">お問い合わせ内容を入力してください。</p>';
                $flag=1;

            }elseif(substr_count($inquiry,"\n") >= 50){

                echo '<p id="errortext">お問い合わせは50行以内に収めてください。</p>';
                $flag=1;

            }elseif(mb_strlen($inquiry) >= 2000){

                echo '<p id="errortext">お問い合わせは2000文字以内に収めてください。<br />現在の文字数「'. mb_strlen($inquiry).'」文字。</p>';
                $flag=1;

            }else{

                echo '<p id="text">'. nl2br(htmlspecialchars($inquiry)). '</p>';

            }
            ?>
        </div>
        <form>
            <div class="button">
                <input type="button" onclick="self.history.back()" value="入力画面に戻る" />
            </div>
            <!--button_end -->
        </form>
    </div>
</body>
</html>


<?php
    if($flag != 1){
        //タイムゾーンのセット
        date_default_timezone_set('Asia/Tokyo');
        //書き込み用文字列作成
        $write = date(DATE_RFC2822). "\n";
        $write .= "姓名". "\t". $surname. " ". $name. "\n";
        $write .= "性別". "\t". $radio[$sex]. "\n";
        $write .= "住所". "\t". $address. "\n";
        $write .= "電話番号". "\t". $phone1. "-". $phone2. "-". $phone3. "\n";
        $write .= "メールアドレス". "\t". $email1. "@". $email2. "\n";
        if(count($know) == 1){
            $write .= "サイトを知った経緯". "\t". $check[$know[0]]. "\n";
        }elseif(count($know) == 2){
            $write .= "サイトを知った経緯". "\t". $check[$know[0]]. " ". $check[$know[1]]. "\n";
        }elseif(count($know) == 3){
            $write .= "サイトを知った経緯". "\t". $check[$know[0]]. " ". $check[$know[1]]. " ". $check[$know[2]]. "\n";
        }
        $write .= "お問い合わせカテゴリ". "\t". $select[$category]. "\n";
        $write .= "お問い合わせ内容". "\n". $inquiry. "\n\n";

        //ファイルに追記
        $fp = fopen("contact_log.txt", "a");
        fwrite($fp,$write);
        fclose($fp);
    }

 ?>
