<?php
namespace Dashboard\Model;
use Think\Model;
class EdtMsgModel extends Model{
	protected $tableName = 'article';
    // 对象的数据表
    protected $trueTableName = 'art_edtmsg';
    public function insertP($e_type, $e_img_url, $e_title, $e_content, $e_url){
    	$data['e_type']=$e_type;
        $data['e_img_url']=$e_img_url;
        $data['e_title']=$e_title;
        $data['e_content']=$e_content;
        $data['e_url']=$e_url;
        return $this->data($data)->add();
    }
    public function motifyP($e_id,$e_type, $e_img_url, $e_title, $e_content, $e_url){
    	$data['e_type']=$e_type;
        $data['e_img_url']=$e_img_url;
        $data['e_title']=$e_title;
        $data['e_content']=$e_content;
        $data['e_url']=$e_url;
        return $this->where(array('e_id'=>$e_id))->data($data)->add();
    }
}