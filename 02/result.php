<?PHP
    //ラジオボタン+チェックボックス+セレクトボックス用配列
    $radio = ["男性", "女性", "不明"];
    $check = [1 => "雑誌", 2 => "広告", 3 => "知人の紹介" ];
    $select = [1 => "商品について", 2 => "サイトについて", 3 => "その他"];

    //すべて受信
    extract($_POST, EXTR_SKIP);

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

    <form action="repost.php" method="post">
        <header><h1>お問い合わせ 内容の確認</h1></header>

        <div class="form">
            <div class="tag"><label>姓名<span>必須</span></label></div>
            <?php if(empty($surname) and empty($name)){

        		echo '<p class="error">姓名を入力してください。</p>';
                $flag=1;

        	}elseif(empty($surname)){

                echo '<p class="error">名字を入力してください。</p>';
                $flag=1;

            }elseif(empty($name)){

                echo '<p class="error">お名前を入力してください。</p>';
                $flag=1;

            }else{
                echo '<p>'. $surname." ".$name. '</p>';
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
            if(empty($address)){

                echo '<p class="error">ご住所を入力してください。</p>';
                $flag=1;

            }else{
                echo '<p>'.$address.'</p>';
            }
             ?>
        </div>

        <div class="form">
            <div class="tag"><label>電話番号<span>必須</span></label></div>
            <?php
            if(empty($phone1) and empty($phone2) and empty($phone3)){

                echo '<p class="error">お電話番号を入力してください。</p>';
                $flag=1;

            }elseif(empty($phone1) or empty($phone2) or empty($phone3)){

                echo '<p class="error">お電話番号が未入力の欄があります。ハイフンごとに分けて入力してください。</p>';
                $flag=1;

            }else{
                echo '<p>'.$phone1.'-'.$phone2.'-'.$phone3.'</p>';
            }
             ?>
        </div>

        <div class="form">
            <div class="tag"><label>メールアドレス<span>必須</span></label></div>
            <?php
            if(empty($email1) and empty($email2)){

        		echo '<p class="error">メールアドレスを入力してください。</p>';
        		$flag=1;

        	}elseif(empty($email1)){

        		echo '<p class="error">メールアドレス@以前を入力してください。</p>';
        		$flag=1;

        	}elseif(empty($email2)){

        		echo '<p class="error">メールアドレス@以降を入力してください。</p>';
        		$flag=1;

        	}else{
                echo '<p>'.$email1.'@'.$email2.'</p>';
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
            if(empty($inquiry)){

                echo '<p id="errortext"><span>必須</span>お問い合わせ内容を入力してください。</p>';
                $flag=1;

            }else{
                echo '<p id="text">'. nl2br($inquiry). '</p>';
            }
             ?>
        </div>
        <div class="button">
        	<input type="submit" <?php if($flag === 1) echo 'disabled'; ?> value="送信する" /><input type="button" onclick="self.history.back()" value="入力画面に戻る" />
        </div>
        <!--button_end -->
    </form>
</div>
</body>
</html>
