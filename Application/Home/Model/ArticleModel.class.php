<?php
namespace Home\Model;
use Think\Model;
use Think\Page;
class ArticleModel extends Model{
    protected $tableName = 'article';
    // 对象的数据表
    protected $trueTableName = 'art_article';
    public function getarticleByPage($page_row,$a_type,$a_type_sub)
    {
        if(!empty($a_type_sub)){
            //1.得到数据集的总数
            $count = $this->where(array('a_type'=>$a_type,'a_type_sub'=>$a_type_sub))->count();
        //2.创建分页类*(Page)
            $page = new Page($count,$page_row);
        //3.获取分
            $show = $page->show();
        //4.获取分页记录
            $msgs = $this->where(array('a_type'=>$a_type,'a_type_sub'=>$a_type_sub))->limit($page->firstRow.','.$page->listRows)->order('a_ctime DESC')->select();
        }
        else{
            //1.得到数据集的总数
            $count = $this->where(array('a_type'=>$a_type))->count();
        //2.创建分页类*(Page)
            $page = new Page($count,$page_row);
        //3.获取分
            $show = $page->show();
        //4.获取分页记录
            $msgs = $this->where(array('a_type'=>$a_type))->limit($page->firstRow.','.$page->listRows)->order('a_ctime DESC')->select();
        }
        //5.生成结果
        $result = array();
        $result['lists']=$msgs;
        $result['pages']=$show;
        //返回
        return $result;
    }
}