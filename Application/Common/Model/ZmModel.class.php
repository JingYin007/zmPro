<?php
/**
 * Created by PhpStorm.
 * User: moTzxx
 * Date: 2018/10/10
 * Time: 16:48
 */

namespace Common\Model;
use Think\Model;

/**
 * 个人测试逻辑中需要的 Model类
 * Class zmModel
 * @package Common\Model
 */
class ZmModel extends Model
{
    private $db_cate;
    public function __construct()
    {
        $this->db_cate = M('deep_cate');
    }

    /**
     * 数据库设计 递归方式 获取无限极分类数据 由上到下进行获取
     * @param int $pid      父级ID，默认为根级分类 0
     * @param int $sel_id   所选中的分类ID,多用于前端 selected 标识
     * @param array $result 数组整合
     * @param int $spac     空格间隔，便于前端缩进显示分类所属级别
     * @return array
     */
    public function deepCatesForDown($pid = 0,$sel_id = 0,&$result = [],$spac = 0){
        //空格数目
        $spac += 2;
        //从数据表中获取 父级ID为所需 pid 的全部数据
        $cateList = $this->db_cate
            ->where("pid = $pid")
            ->select();
        //TODO 进行遍历处理
        foreach ($cateList as $key => $value){
            //判断 selected 属性
            if ($sel_id == $value['id']){
                $selectedStr = "selected";
            }else{
                $selectedStr = "";
            }
            $cateList[$key]['cate_name'] = str_repeat('&nbsp;&nbsp;',$spac)
                .'|--'.$cateList[$key]['cate_name'] ;
            $cateList[$key]['selected'] = $selectedStr;
            $result[] = $cateList[$key];
            //TODO 此处进行了递归操作
            $this->deepCatesForDown($value['id'],$sel_id,$result,$spac);
        }
        return $result;
    }

    /**
     * 数据库设计 递归方式 获取无限极分类数据 由下到上进行获取
     * @param int $id
     * @param array $result
     * @return array
     */
    public function deepCatesForUp($id = 0,&$result = []){
        //获取ID 为目标id的数据
        $cateList = $this->db_cate
            ->where("id = $id")
            ->select();
        //进行遍历处理
        foreach ($cateList as $key => $value){
            $result[] = $cateList[$key];
            $this->deepCatesForUp($value['pid'],$result);
        }
        //做一次排序，按主键升序排列，也可以在最终获取数据后进行处理
        krsort($result);
        return $result;
    }

    /**
     * 全路径方式 获取无限极分类数据 由上到下进行获取
     * @return array
     */
    public function deepCatesFullPathForDown(){
        //注意排序方式 自动按要求进行排列
        $cateList = $this->db_cate
            ->field("id,cate_name,path,concat(path,',',id) full_path")
            ->order('full_path asc')
            ->select();
        $result = [];
        //遍历数据 方法同上
        foreach ($cateList as $key => $value){
            $deep = explode(',',trim($value['full_path'],','));
            $cateList[$key]['cate_name'] = str_repeat('&nbsp;&nbsp;',count($deep))
                ."|--".$cateList[$key]['cate_name'];
            $result[] = $cateList[$key];
        }
        return $result;
    }

    /**
     * 全路径方式 获取无限极分类数据 由下到上进行获取
     * @param int $catID 当前分类数据的ID
     * @return mixed
     */
    public function deepCatesFullPathForUp($catID = 0){
        $curr_full_path = $this->db_cate
            ->field("id,cate_name,path,concat(path,',',id) full_path")
            ->where("id = $catID")
            ->getField('full_path');
        //sql 查询的重要条件
        $map['id']  = array('in',$curr_full_path);
        $cateList = $this->db_cate
            ->field('id,cate_name')
            ->where($map)
            ->order('id asc')
            ->select();
        return $cateList;
    }




}