<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/15 9:44
 * Description : 一种没用过的字符串输出方式
 */

/*heredoc 以符号<<< 加一个记号（不能使用空行或者带空格后缀）来定义字符串的开始，然后用该记号跟一个分号 表示字符串的结束*/
$val1 = "hi how are you";
print <<< END
This is a END test
END;I Can't Stop this
    I space tab it
  two "space" $val1
    four space equals one tab
END;


print <<< html
<h1 style="text-align: center">
    heredoc 直接输出 html，不需要转义
</h1>
<div style="width: 100%;height: 50px;line-height: 50px;background-color: #FF7A32;text-align: center;color:white;font-size: 16px;">就问你服不服</div>
html;


print <<< goon
    <div>
    <ul>
    <li>one. heredoc 延续的故事，不必结尾加分号的故事
goon
    /*为了识别goon结束，延续的内容必须换行*/
. "</li><li>two. 我是延续</li></ul></div>";

