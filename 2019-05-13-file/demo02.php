<?php

/****************************************************
1.fopen(file,mode,path,context)
  ->r 唯讀
  ->r+ 讀寫，由檔案開頭開始
  ->w 寫入，由檔案開頭開始並將檔案清空，無檔案則建立檔案
  ->w+ 讀寫，由檔案開頭開始並將檔案清空，無檔案則建立檔案
　->a 寫入，由檔案尾端開始，無檔案則建立檔案
　->a+ 寫入，由檔案尾端開始，無檔案則建立檔案
  ->wb 寫入，轉換換行格式為\r\n
  ->file_exists() 判斷檔案是否存在
2.建立要寫入檔案的內容 str
  ->斷行 \n or \r\n
3.fwrite(file,str) 寫入檔案中
4.fclose() 關閉檔案
*****************************************************/
//練習:利用程式流程結構寫入一堆內容

//開啟一個可供寫入的檔案
$file=fopen("demo02.txt","w");

//建立一個寫入用的字串變數
$str="";

//建立流程語法來產生大量的文字內容
for($i=1;$i<=9;$i++){
  for($j=1;$j<=9;$j++){

    //將字串串接在一起
    $str=$str . ($i . " x " . $j . " = " .($i*$j)) ." , ";
  }

  //需要斷行的地方要加上\n或是\r\n
  $str = $str."\r\n";
}

//執行寫入檔案的函式
fwrite($file,$str);

//關閉檔案
fclose($file);

?>