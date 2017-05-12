<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/12 15:50
 * Description :
 */
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://www.baidu.com");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HEADER,0);
$output = curl_exec($ch);
$myfile = fopen('../public/file/baidu.html','w');
fwrite($myfile,$output);
fclose($myfile);
$info = curl_getinfo($ch);
print_r($info);
curl_close($ch);

$urls = array(
    "http://www.cnn.com",
    "http://www.mozilla.com",
    "http://www.facebook.com"
);
$browsers = array(
    "standard" => array (
        "user_agent" => "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 (.NET CLR 3.5.30729)",
        "language" => "en-us,en;q=0.5"
    ),
    "iphone" => array (
        "user_agent" => "Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420+ (KHTML, like Gecko) Version/3.0 Mobile/1A537a Safari/419.3",
        "language" => "en"
    ),
    "french" => array (
        "user_agent" => "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; GTB6; .NET CLR 2.0.50727)",
        "language" => "fr,fr-FR;q=0.5"
    )
);
foreach ($urls as $url) {
    
}