
<?php
  echo "山手線駅一覧<br/><br/>";
  header("Content-type: text/html; charset=UTF-8");
  $area = array("1" =>"品川","2" =>"大崎","3" =>"恵比寿","4" =>"渋谷","5" =>"代々木","6" =>"新宿");
  foreach($area as $key => $value){
    echo $key."番目の駅 : ".$value."<br/>";
  }
?>
