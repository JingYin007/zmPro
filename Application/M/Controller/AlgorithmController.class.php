<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行
 * Date: 2017/10/8
 * Time: 15:12
 */

namespace M\Controller;


use Think\Controller;

/**
 * Class AlgorithmController
 * @package M\Controlle
 * 算法学习类 algorithm
 */
class AlgorithmController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        header("Content-Type:text/html;charset=utf-8");
    }
    public function page(){
        $this->display();
    }

    public function index()
    {
        $arr = array(19,12,14,5,12,67,53,53,91,8,12,14,5,2,67,53,22,0,8,07,55,34,67,23,543,231);
        $len = count($arr);
        $arr =  array(6,1,5,4,8,3,9,12,51,11,15,14,13,25,69,47,56,74,26,78);
        $res = $this->quickSort2($arr);
        var_dump($res);

    }


    public function quickSort2($arr) {
        //先判断是否需要继续进行
        $length = count($arr);
        if($length <= 1) {
            return $arr;
        }
        //选择第一个元素作为基准
        $base_num = $arr[0];
        //遍历除了标尺外的所有元素，按照大小关系放入两个数组内
        //初始化两个数组
        $left_array = array();  //小于基准的
        $right_array = array();  //大于基准的
        for($i=1; $i<$length; $i++) {
            if($base_num > $arr[$i]) {
                //放入左边数组
                $left_array[] = $arr[$i];
            } else {
                //放入右边
                $right_array[] = $arr[$i];
            }
        }
        //再分别对左边和右边的数组进行相同的排序处理方式递归调用这个函数
        $left_array = $this->quickSort2($left_array);
        $right_array = $this->quickSort2($right_array);
        //合并
        return array_merge($left_array, array($base_num), $right_array);
    }
    /*
    * 快速排序法
    * 通过一趟排序将要排序的数据分割成独立的两部分，其中一部分的所有数据都比另外一部分的所有数据都要小，
    * 然后再按此方法对这两部分数据分别进行快速排序，整个排序过程可以递归进行，以此达到整个数据变成有序序列。
    * */
    public function quickSort($array){
        if(!isset($array[1]))  return $array;
        $mid = $array[0]; //获取一个用于分割的关键字，一般是首个元素
        $leftArray = array();
        $rightArray = array();
        foreach($array as $v){
            if($v > $mid)
                $rightArray[] = $v; //把比$mid大的数放到一个数组里
            if($v < $mid)
                $leftArray[] = $v; //把比$mid小的数放到另一个数组里
        }
        $leftArray = $this->quickSort($leftArray); //把比较小的数组再一次进行分割
        $leftArray[] = $mid; //把分割的元素加到小的数组后面，不能忘了它哦
        $rightArray = $this->quickSort($rightArray); //把比较大的数组再一次进行分割
        return array_merge($leftArray,$rightArray); //组合两个结果
    }

    /*
    * 插入排序法
    * 每步将一个待排序的记录，按其关键码值的大小插入前面已经排序的文件中适当位置上，直到全部插入完为止。
    * 算法适用于少量数据的排序，时间复杂度为O(n^2)。是稳定的排序方法。
    * */
    function insertSort($arr){
        $len = count($arr);
        //先默认$array[0]，已经有序，是有序表
        for($i = 1;$i < $len;$i++){
            if ($arr[$i] < $arr[$i-1]){
                $insertVal = $arr[$i]; //$insertVal是准备插入的数
                $insertIndex = $i - 1; //有序表中准备比较的数的下标
                while($insertIndex >= 0 && $insertVal < $arr[$insertIndex]){
                    $arr[$insertIndex + 1] = $arr[$insertIndex]; //将数组往后挪
                    $insertIndex--; //将下标往前挪，准备与前一个进行比较
                }
                if($insertIndex + 1 !== $i){
                    $arr[$insertIndex + 1] = $insertVal;
                }
            }
        }
        return $arr;
    }
    function insertSort2($arr){
        $len = count($arr);
        //先默认$array[0]，已经有序，是有序表
        for($i = 1;$i < $len;$i++){
            if ($arr[$i] < $arr[$i-1]){
                $insertVal = $arr[$i]; //$insertVal是准备插入的数
                //$j 有序表中准备比较的数的下标
                //$j-- 将下标往前挪，准备与前一个进行比较
                for ($j = $i-1;$j >= 0 && $insertVal < $arr[$j];$j--){
                    $arr[$j+1]= $arr[$j];//将数组往后挪
                }
                $arr[$j + 1] = $insertVal;
            }
        }
        return $arr;
    }
    /*
    * @param 选择排序法
    * 每一次从待排序的数据元素中选出最小（或最大）的一个元素，存放在序列的起始位置，直到全部待排序的数据元素排完
    * */
    function selectSort($arr){
        //双重循环完成，外层控制轮数，内层控制比较次数
        $len = count($arr);
        for ($i = 0; $i < $len-1; $i++) {
            $minIndex = $i;
            // 找出i后面最小的元素与当前元素交换
            for ($j = $i + 1; $j < $len; $j++) {
                if ($arr[$minIndex] > $arr[$j]){
                    $minIndex = $j;
                }
            }
            if ($minIndex != $i) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$minIndex];
                $arr[$minIndex] = $temp;
            }
        }
        return $arr;
    }

    /**
     * 交换方法
     * @param array $arr 目标数组
     * @param $a 索引a
     * @param $b 索引b
     * @param bool $flag 交换标志
     * @return bool
     */
    function swap(array &$arr,$a,$b,$flag = false){
        // 遍历i后面的元素，只要该元素小于当前元素，就把较小的往前冒泡
        if($arr[$a] > $arr[$b]){
            $temp = $arr[$a];
            $arr[$a] = $arr[$b];
            $arr[$b] = $temp;
            $flag = true;
        }
        return $flag;
    }
    /**
     * 第一种写法
     * @param $arr 所要排序的数组
     * @param $len 数组长度，可由 count($arr)获得.
     * @return mixed 返回的数组
     */
    function bubbleSort($arr,$len) {
        //该层循环控制 需要冒泡的轮数
        for ($i = 0; $i < $len-1; $i++) {
            //该层循环用来控制每轮 冒出一个数 需要比较的次数
            for ($j = $i + 1; $j < $len; $j++) {
                // 或者 $this->swap($arr,$j,$j+1);
                $this->swap($arr,$i,$j);
            }
        }
        return $arr;
    }
    //第二种写法
    public function BubbleSort2($arr,$len){
        for ($i = 0;$i < $len-1;$i++){
            //TODO 本趟排序开始前，交换标志应为假
            $flag = false;
            for ($j = 0;$j <= $len-2;$j++){
                $flag = $this->swap($arr,$j,$j+1,$flag);
            }
            if(!$flag) return $arr;
        }
        return $arr;
    }
    //第三种写法
    function BubbleSort3(array &$arr,$len){
        for($i = 0;$i < $len-1;$i++){
            //从后往前逐层上浮小的元素 $j >= 0
            for($j = $len - 2;$j >= $i ;$j --){
                $this->swap($arr,$j,$j+1);
            }
        }
        return $arr;
    }
    //第四种写法
    function BubbleSort4($arr,$len)
    {
        for($i = 0;$i < $len-1;$i++) {
            for($j = 0;$j < $len-$i-1;$j++) {
                $this->swap($arr,$j,$j+1);
            }
        }
        return $arr;
    }

















}