<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/8 14:55
 * Description :
 */
class gdimg{
    private $imginfo;
    private $image;

    /**
     * 创建图片
     * gdimg constructor.
     * @param $src
     */
    function __construct($src) {
        $imginfo = getimagesize($src);
        $this->imginfo = array(
            'width' => $imginfo[0],
            'height'=> $imginfo[1],
            'type'  =>image_type_to_extension($imginfo[2],false),
            'mime'  =>$imginfo['mime']
        );
        //通过图片类型获取创建图片函数名
        $imgcreate = "imagecreatefrom{$this->imginfo['type']}";
        $this->image = $imgcreate($src);
    }

    /**
     * 水印
     * @param $mark_src
     * @param int $x
     * @param int $y
     * @param int $ap
     */
    public function imgmark($mark_src,$x=170,$y=170,$ap=100) {
        $imginfo = getimagesize($mark_src);
        $type2 = image_type_to_extension($imginfo[2],false);
        $imgcreae = "imagecreatefrom{$type2}";
        $water = $imgcreae($mark_src);
        imagecopymerge($this->image,$water,$x,$y,0,0,$imginfo[0],$imginfo[1],$ap);
        imagedestroy($water);
    }


    /**
     * 压缩图片
     * @param $width 压缩后的宽度
     * @param $height 压缩后的高度
     */
    public function thumb($width,$height) {
        //创建一张图片
        $img_thumb = imagecreatetruecolor($width,$height);
        //缩放图片核心
        imagecopyresampled($img_thumb,$this->image,0,0,0,0,$width,$height,$this->imginfo['width'],$this->imginfo['height']);
        //摧毁
        imagedestroy($this->image);
        $this->image = $img_thumb;
    }


    /**
     * 保存图片
     * @param $newname
     */
    public function save($newname) {
        $saveimg = "image{$this->imginfo['type']}";
        //保存图片，或者输出可视
        $saveimg($this->image,'../public/images/'.$newname.'.'.$this->imginfo['type']);
    }

    /**
     * 输出图片
     */
    public function show() {
        header('Content-type:'.$this->imginfo['mime']);
        $outimg = "image{$this->imginfo['type']}";
        $outimg($this->image);
    }

    /**
     * 删除图片
     */
    public function __destruct() {
        imagedestroy($this->image);
    }
}
$img = new gdimg('../public/images/180.jpg');
$img->imgmark('../public/images/water.png',50,50);
$img->thumb(100,100);
$img->save('180.thumb');
$img->show();