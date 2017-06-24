<?php
namespace Dashboard\Model;
use Think\Model;
class ArticleModel extends Model{

    protected $tableName = 'article';
    // 对象的数据表
    protected $trueTableName = 'art_article';
    public function insertP($a_title, $a_type, $a_type_sub, $a_content, $a_uid){
    	$data['a_title']=$a_title;
        $data['a_type']=$a_type;
        $data['a_type_sub']=$a_type_sub;
        $data['a_content']=$a_content;
        $data['a_uid']=$a_uid;
        $data['a_ctime']=date('Y-m-d H:i:s');
        return $this->data($data)->add();
    }
}