<?PHP
//ラジオボタン+チェックボックス+セレクトボックス用配列
$radio = ["男性", "女性", "不明"];
$check = ["雑誌", "広告", "知人の紹介" ];
$select = [1 => "商品について", 2 => "サイトについて", 3 => "その他"];

//すべて受信
extract($_POST);

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
        <div><h1>お問い合わせ 内容の確認</h1></div>
        <p>内容に間違いが無ければ送信ボタンをクリックしてください。</p>
        <div>
            【姓 名】
            <?php if(empty($surname) and empty($name)){

        		echo '<p><span>必須</span>姓名を入力してください。</p><br />';

        	}elseif(empty($surname)){

                echo '<p><span>必須</span>名字を入力してください。</p><br />';

            }elseif(empty($name)){

                echo '<p><span>必須</span>お名前を入力してください。</p><br />';

            }else{
                echo '<tr>
                    <td>'.$surname." ".$name.'</td>
                </tr>';
            } ?>
        </div>

        <div>
            【性別】
            <?php
                echo '<tr>
                    <td>'.$radio[$sex].'</td>
                </tr>';
            ?>
        </div>

        <div>
            【住所】
            <?php
            if(empty($address)){

                echo '<p><span>必須</span>ご住所を入力してください。</p><br />';

            }else{
                echo '<tr>
                    <td>'.$address.'</td>
                </tr>';
            }
             ?>
        </div>

        <div>
            【電話番号】
            <?php
            if(empty($phone1) and empty($phone2) and empty($phone3)){

                echo '<p><span>必須</span>お電話番号を入力してください。</p><br />';

            }elseif(empty($phone1) or empty($phone2) or empty($phone3)){

                echo '<p><span>必須</span>お電話番号が未入力の欄があります。<br />ハイフンごとに分けて入力してください。</p><br />';

            }else{
                echo '<tr>
                    <td>'.$phone1.'-'.$phone2.'-'.$phone3.'</td>
                </tr>';
            }
             ?>
        </div>

        <div>
            【メールアドレス】
            <?php
            if(empty($email1) and empty($email2)){

        		echo '<p><span>必須</span>メールアドレスを入力してください。</p><br />';
        		$flag=1;

        	}elseif(empty($email1)){

        		echo '<p><span>必須</span>メールアドレス@以前を入力してください。</p><br />';
        		$flag=1;

        	}elseif(empty($email2)){

        		echo '<p><span>必須</span>メールアドレス@以降を入力してください。</p><br />';
        		$flag=1;

        	}else{
                echo '<tr>
                    <td>'.$email1.'@'.$email2.'</td>
                </tr>';
            }
             ?>
        </div>

        <div>
            【どこでこのサイトを知ったか】
            <?php
                if(empty($know) === false){
                    foreach ($check as $value) {
                        echo $value. " ";
                    }
                }
            ?>
        </div>

        <div>
            【質問カテゴリ】
            <?php
            if($category == 0){

                echo '<p><span>必須</span>ご質問のカテゴリーを選択してください。</p><br />';

            }else{
                echo '<tr>
                    <td>'.$select[$category].'</td>
                </tr>';
            }
             ?>
        </div>

        <div>
            【本文】
            <?php
            if(empty($inquiry)){

                echo '<p><span>必須</span>お問い合わせ内容を入力してください。</p><br />';

            }else{
                echo '<tr>
                    <td>'.$inquiry.'</td>
                </tr>';
            }
             ?>
        </div>
        <div class="button">
        	<input type="submit" value="送信する" /><input type="button" onclick="self.history.back()" value="入力画面に戻る" />
        </div>
        <!--button_end -->
    </form>
</div>
</body>
</html>
