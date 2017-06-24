<?php
namespace Dashboard\Model;
use Think\Model;
class GalleryModel extends Model{
    protected $tableName = 'gallery';
    // 对象的数据表
    protected $trueTableName = 'art_gallery';
    public function insertP($g_thumb_url, $g_url, $g_title, $g_uid){
        $data['g_thumb_url'] = $g_thumb_url;
        $data['g_url'] = $g_url;
        $data['g_title'] = $g_title;
        $data['g_uid'] = $g_uid;
        $data['g_ctime'] = date('Y-m-d H:i:s');
        $data['g_type'] = I('cookie.g_type');
        return $this->data($data)->add();
    }
}