<?php

/* 
单引号不解释变量，双引号解释变量
$a = 250;
echo '$a';
echo '<br />';
echo "$a"; 
*/
/* 
双引号解释转义字符，单引号只解释\\  \'

 
//$name = '我是黄渤的\n粉丝';

//$name1 = "我也是黄渤\n的粉丝";
//$name = '我是黄渤的\\粉丝';
$name = '我是黄渤的\'粉丝';
echo $name;
echo '<br />';
//echo $name1;

 */
 
/* 3、双引号里面可以放单引号，单引号里面的变量会解析

$b = '杀生';
echo "这是黄渤的电影，非常好\'$b\'";
*/

/* 
5、双引号中可以添加单引号，单引号中可以添加双引号


 
//echo '我"赵传"是一只小小鸟';
echo '<br />';
echo "林中鸟是谁唱'姓葛的歌手唱的'的";
  */
  
  /* 
6、双引号中需要有分隔符来区分，否则会将变量名后面的所有字符当做变量的一部分，通常使用{}来区分变量。
  
 $a = "大家多普及一些法律相关的知识是非常有必要的";
 echo "{$a}bdcsr";
*/

/* 
8、如果变量和字符串需要一起输出，尽量使用单引号拼接字符串。
 */
$b = '1000000000000';
$a = "为什么说要懂些法律尝试呢，比如劳务纠纷,房产纠纷，结婚前要做个财产公证$b";

echo '为什么说要懂些法律尝试呢，比如劳务纠纷,房产纠纷，结婚前要做个财产公证'.$b;
















