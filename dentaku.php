
  <?php

      //値を取得
      $a=$_POST['txtA'];
      $b=$_POST['txtB'];
      $ope=$_POST['selope'];


      
      
      //セレクトボックスによって処理を変える
      switch ($ope) {
        case "＋":$answer = $a + $b;
          break;

        case "－":$answer = $a - $b;
          break;

        case "×":$answer = $a * $b;
          break;

        case "÷":$answer = $a / $b;
          break;

        default:
          break;
      }

    if($answer>=100){

      //計算結果を表示
      echo($a." ".$ope." ".$b." = ".'<span style="color:red;">'.$answer.'</span>'."");//半角スペースをあける
      // print ($a.$ope.$b."=".$answer);//半角スペースをあけない
    }
    else
    {
      echo($a." ".$ope." ".$b." = ".'<span style="color:#000;">'.$answer.'</span>'."");
    }
    ?>

