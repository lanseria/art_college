<?php
namespace Dashboard\Model;
use Think\Model;
class VideoModel extends Model{
    protected $tableName = 'video';
    // 对象的数据表
    protected $trueTableName = 'art_video';
    public function insertP($v_url, $v_title, $v_source, $v_uid){
        $data['v_url']=$v_url;
        $data['v_title']=$v_title;
        $data['v_source']=$v_source;
        $data['v_uid']=$v_uid;
        $data['v_ctime']=date('Y-m-d H:i:s');
        return $this->data($data)->add();
    }
}