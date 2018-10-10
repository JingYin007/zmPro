<?php
/**
 * Created by PhpStorm.
 * User: moTzxx
 * Date: 2018/10/10
 * Time: 16:48
 */

namespace Common\Model;

/**
 * 个人测试逻辑中需要的 Model类
 * Class zmModel
 * @package Common\Model
 */
class ZmModel extends BaseModel
{
    private $db_cate;
    public function __construct()
    {
        $this->db_cate = M('deep_cate');
    }

    public function deepForCates($pid = 0,&$result = [],$spac = 0){
        $spac += 2;
        $cateList = $this->db_cate
            ->where("pid = $pid")
            ->select();
        foreach ($cateList as $key => $value){
            $cateList[$key]['cate_name'] = str_repeat('&nbsp;',$spac)
                .'|--'.$cateList[$key]['cate_name'] ;
            $result[] = $cateList[$key];
            $this->deepForCates($value['id'],$result,$spac);
        }
        return $result;
    }
}