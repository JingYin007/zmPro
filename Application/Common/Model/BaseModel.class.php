<?php
namespace Common\Model;
use Think\Model;
/**
 * User: moTzxx
 * 建议：1.对于TinkPHP 框架，model统一放在/Application/Common/Model/目录下
 *      2.所有的模型都继承BaseModel
 *      3.如果没有特殊需求,可直接调用addData、editData、deleteData；
        4.如果有特殊需求的,就在某个表model中重新定义以上方法覆盖掉BaseModel中的
 *      5.统一用D函数而不要用M函数实例化model
 */
class BaseModel extends Model
{
    /**
     * 添加数据
     * @param    array    $data    数据
     * @return   integer           新增数据的id
     */
    public function addDataM($data){
        $id = $this
            ->add($data);
        return $id;
    }

    /**
     * 修改数据
     * @param    array    $where    where语句数组形式
     * @param    array    $data   修改的数据
     * @return    boolean         操作是否成功
     */
    public function editDataM($where,$data){
        $res = $this
            ->where($where)
            ->save($data);
        return $res;
    }

    /**
     * 删除数据
     * @param    array    $where    where语句数组形式
     * @return   boolean          操作是否成功
     */
    public function deleteDataM($where){
        $res = $this
            ->where($where)
            ->delete();
        return $res;
    }

    /**
     * 根据where条件 获取信息
     * @param $where where语句数组形式
     * @return mixed 一个二维数组
     * find()返回一个一维数组，select()返回一个二维数组
     * 此处使用了id 倒序
     */
    public function getDataM($where){
        $res = $this
            ->field('*')
            ->where($where)
            ->order('id desc')
            ->select();
        return $res;
    }

    /**
     * 根据主键获取表中的信息
     * @param $id 主键ID
     * @return mixed 一个一维数组
     * 固定按照 field、alias、join、where、order、limit 、select ；
     */
    public function getDataByIdM($id){
        $res = $this
            ->field('t.*')
            ->alias('t')
            ->where('t.id = '.$id)
            ->find();
        return $res;
    }
}