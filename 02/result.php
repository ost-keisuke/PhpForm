<div id="wrap">
    <h3>お問い合わせフォーム・エラーチェック・確認ページ</h3>
    <link rel="stylesheet" href="style.css">
    <?PHP

	//すべて受信
	extract($_POST);

    //エラー用FLAG未記入の場合1にする
	$flag=0;

    echo '<table border=1>
    ';

	//名前チェック
	if(empty($surname) and empty($name)){
		echo '<p><span>必須</span>姓名を入力してください。</p><br />';
		$flag=1;
	}elseif(empty($surname)){
        echo '<p><span>必須</span>名字を入力してください。</p><br />';
		$flag=1;
    }elseif(empty($name)){
        echo '<p><span>必須</span>お名前を入力してください。</p><br />';
		$flag=1;
    }elseif($flag != 0){
        echo '<tr>
            <th>姓名</th>
            <td>'.$surname." ".$name.'</td>
        </tr>';
    }



    //性別チェック
    if(empty($sex)){

        echo '<p><span>必須</span>性別のチェックをしてください。</p><br />';
        $flag=1;

    }elseif($flag != 0){
        echo '<tr>
            <th>性別</th>
            <td>'.$sex.'</td>
        </tr>';
    }

    //住所チェック
    if(empty($address)){

        echo '<p><span>必須</span>ご住所を入力してください。</p><br />';
        $flag=1;

    }elseif($flag != 0){
        echo '<tr>
            <th>住所</th>
            <td>'.$address.'</td>
        </tr>';
    }

    //電話番号チェック
    if(empty($phone1) and empty($phone2) and empty($phone3)){

        echo '<p><span>必須</span>お電話番号を入力してください。</p><br />';
        $flag=1;

    }elseif(empty($phone1) or empty($phone2) or empty($phone3)){

        echo '<p><span>必須</span>お電話番号が未入力の欄があります。<br />ハイフンごとに分けて入力してください。</p><br />';
        $flag=1;

    }elseif($flag != 0){
        echo '<tr>
            <th>電話番号</th>
            <td>'.$phone1.'-'.$phone2.'-'.$phone3.'</td>
        </tr>';
    }

	//メールアドレスチェック
	if(empty($email1) and empty($email2)){

		echo '<p><span>必須</span>メールアドレスを入力してください。</p><br />';
		$flag=1;

	}elseif(empty($email1)){

		echo '<p><span>必須</span>メールアドレス@以前を入力してください。</p><br />';
		$flag=1;

	}elseif(empty($email2)){

		echo '<p><span>必須</span>メールアドレス@以降を入力してください。</p><br />';
		$flag=1;

	}elseif($flag != 0){
        echo '<tr>
            <th>メールアドレス</th>
            <td>'.$email1.'@'.$email2.'</td>
        </tr>';
    }

    //質問カテゴリチェック
    if($category == 1){

        echo '<p><span>必須</span>ご質問のカテゴリーを選択してください。</p><br />';
        $flag=1;

    }elseif($flag != 0){
        echo '<tr>
            <th>質問カテゴリ</th>
            <td>'.$category.'</td>
        </tr>';
    }

	//お問い合わせ内容チェック
	if(empty($inquiry)){

		echo '<p><span>必須</span>お問い合わせ内容を入力してください。</p><br />';
		$flag=1;

	}elseif($flag != 0){
        echo '<tr>
            <th>お問い合わせ内容</th>
            <td>'.$inquiry.'</td>
        </tr>';
    }

	//エラーの場合(上記で未記入の場合flagを1にしているので)すなわちflagが1の場合戻るボタンを作成
	if($flag==1){

		echo '<div class="button"><input type="button" onclick="self.history.back()" value="入力画面に戻る"/></div>';


	}
	//必須が全て入力されていれば
	else{

		echo '

        <table border=1>
            <tr>
                <th>姓名</th>
                <td>'.$surname." ".$name.'</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>'.$sex.'</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>'.$address.'</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>'.$phone1.'-'.$phone2.'-'.$phone3.'</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>'.$email1.'@'.$email2.'</td>
            </tr>
            <tr>
                <th>どこでこのサイトを知りましたか？</th>
                <td>'."$magazine"."$frend"."$yahoo".'</td>
            </tr>
            <tr>
                <th>質問カテゴリ</th>
                <td>'.$category.'</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>'.$inquiry.'</td>
            </tr>
        </table>
        <div class="button">
        	<input type="submit" value="送信する" /><input type="button" onclick="self.history.back()" value="入力画面に戻る" />
        </div>
        <!--button_end -->
     </form>';
    }
		?>


</div>
