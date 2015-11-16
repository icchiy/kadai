

<?php
    //関数とは、あるまとまった処理を行い、値を返すものです。
    //関数の作り方：関数を作るには「function 関数名(引数１、引数２、...){ 処理 }」という書き方をします。
    //関数を呼び出す際、関数に任意の値を渡して処理させることができます。この値を「引数」と呼びます。
    //なお、関数名、引数の名前は自由につけることが出来ます。
    //なぜこれが必要なのか「 $x = ''」;
    $x = '';
    //もしnicknameがPOST送信されたら
    if (isset($_POST['nickname'])){
        //$_POST['nickname']を$xとし、
        $x = hello($_POST['nickname']);
    }
    function hello($nickname){
        return 'Hello! '.$nickname;
    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
<meta http-equiv="UTF-8">
      <title>掲示板</title>
     
     </head>
    <body>
        <form method="post" action="">
            <input name="nickname" type="text" style="width:100px"/>
             <input type="submit" value="あいさつ">
            <?php echo $x; ?>

        </form>
    </body>
</html>
