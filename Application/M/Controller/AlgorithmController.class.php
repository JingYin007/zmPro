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
        $arr = array(19,12,14,5,12,87,93,53,91,98,12,14,5,19,67,53,22,3,8,07,55,34,67,23,43,31);
        $len = count($arr);
        $arr =  array(6,1,2,7,9,3,4,5,10,8);

        //$this->sortCompare();
        //$res = $this->mergeSort($arr);

        $res = $this->muFun2('make__by_id');
        var_dump($res);

    }

    /**
     * make_by_id => MakeById, hello_my_dear => HelloMyDear
     * @param $str
     * @return string
     */
    public function muFun2($str){
        $arr = explode('_',$str);
        $newStr = '';
        foreach ($arr as &$v){
            $len = strlen($v);
            if ($len){
                $v = ucfirst($v);
            }
            $newStr .= $v;


        }
        //$newStr = implode('_',$arr);
        return $newStr;
    }
    // 1 1 2 3 5 8 13 ...
    public function myFun($n){
        if ($n < 1) return 0;
        if ($n <= 2)
            return 1;
        $res = $this->myFun($n-2)+$this->myFun($n-1);
        return $res;

    }



    /**
     * 归并排序
     * @param $arr
     * @return array
     */
    public function mergeSort($arr)
    {
        $count = count( $arr );
        if( $count <= 1 ) return $arr;

        // 将数组分成两份 $half = ceil( $count / 2 );
        $half  = ($count >> 1) + ($count & 1);
        $arr2d = array_chunk($arr, $half);

        $left  = $this->mergeSort($arr2d[0]);
        $right = $this->mergeSort($arr2d[1]);
        while (count($left) && count($right))
        {
            if ($left[0] < $right[0])
                $reg[] = array_shift($left);
            else
                $reg[] = array_shift($right);
        }
        return array_merge($reg, $left, $right);
    }



    public function sortCompare(){
        $array = [];
        for($i = 0; $i < 1000; $i++) {
            array_push($array,rand(0,300));
        }

        $t = microtime(true);
        $this->bucketsort($array);
        $t2 = microtime(true);
        echo "bucketsort 用时：".(($t2-$t)*1000)." ms"."<br/>";

        $t = microtime(true);
        $this->countingSort($array);
        $t2 = microtime(true);
        echo "countingSort 用时：".(($t2-$t)*1000)." ms"."<br/>";

        $t = microtime(true);
        $this->mergeSort($array);
        $t2 = microtime(true);
        echo "mergeSort 用时：".(($t2-$t)*1000)." ms"."<br/>";

        $t = microtime(true);
        $this->quick_sort2($array);
        $t2 = microtime(true);
        echo "quick_sort 用时：".(($t2-$t)*1000)." ms"."<br/>";

        $t = microtime(true);
        $this->quick_sort($array,0,count($array)-1);
        $t2 = microtime(true);
        echo "quick_sort2 用时：".(($t2-$t)*1000)." ms"."<br/>";

        $t = microtime(true);
        $this->selectSort($array);
        $t2 = microtime(true);
        echo "selectSort 用时：".(($t2-$t)*1000)." ms"."<br/>";

        /*

        $t = microtime(true);
        $this->bubbleSort($array);
        $t2 = microtime(true);
        echo "bubbleSort 用时：".(($t2-$t)*1000)." ms"."<br/>";

        $t = microtime(true);
        $this->insertSort($array);
        $t2 = microtime(true);
        echo "insertSort 用时：".(($t2-$t)*1000)." ms"."<br/>";

        $t = microtime(true);
        sort($array);
        $t2 = microtime(true);
        echo "sort 用时：".(($t2-$t)*1000)." ms"."<br/>";*/
    }

    /**
     * 木桶排序设计
     * @param $arr 目标数组
     * @param int $bucketCount 分配的木桶数目（整数）
     * @return array
     */
    public function bucketSort($arr,$bucketCount = 10)
    {
        $len = count($arr);
        $max = max($arr)+1;
        if ($len <= 1) {return $arr;}
        //填充木桶
        $arrFill = array_fill(0, $bucketCount, []);
        //开始标示木桶
        for($i = 0; $i < $len ; $i++)
        {
            $key = intval($arr[$i]/($max/$bucketCount));
            array_push($arrFill[$key] , $arr[$i]);
            //TODO 测试发现：如果此处调用，耗时翻倍
            /*if(count($arrFill[$key])){
                $arrFill[$key] = $this->insertSort($arrFill[$key]);
            }*/
        }
        //对每个不是空的桶进行排序
        foreach ($arrFill as $key=>$f){
            if (count($f)){
                $arrFill[$key] = $this->insertSort($f);
            }
        }
        //开始从木桶中拿出数据
        for($i = 0; $i < count($arrFill); $i ++)
        {
            if($arrFill[$i]){
                for($j = 0; $j <= count($arrFill[$i]); $j++)
                {   //这一行主要用来控制输出多个数字
                    if ($arrFill[$i][$j]){
                        $arrBucket[] = $arrFill[$i][$j];
                    }
                }
            };
        }
        return $arrBucket;
    }



    /**
     * @param $arr 目标数组
     * @return array 返回的已排序数组
     */
    public function bOrCSort($arr)
    {
        $len = count($arr);
        $max = max($arr);
        if ($len <= 1) {return $arr;}
        //填充木桶
        $arrFill = array_fill(0, $max, 0);
        for($i = 0; $i < $len ; $i++)
        {
            $arrFill[$arr[$i]] ++;
        }
        //开始从木桶中拿出数据
        for($i = 0; $i <= $max; $i ++)
        {
            for($j = 1; $j <= $arrFill[$i]; $j++)
            { //这一行主要用来控制输出多个数字
                $arrRes[] = $i;
            }
        }
        return $arrRes;
    }

    /**
     * 计数排序
     * @param $arr
     * @return array
     */
    function countingSort($arr)
    {
        $len = count( $arr );
        if( $len <= 1 ) return $arr;
        // 找出待排序的数组中最大值和最小值
        $min = min($arr);
        $max = max($arr);
        // 计算待排序的数组中每个元素的个数
        $countArr = array();
        for($i = $min; $i <= $max; $i++)
        {
            $countArr[$i] = 0;
        }
        foreach($arr as $v)
        {
            $countArr[$v] +=  1;
        }
        $resArr = array();
        foreach ($countArr as $k=>$c) {
            for($i = 0; $i < $c; $i++)
            {
                $resArr[] = $k;
            }
        }
        return $resArr;
    }


    /**
     * @param $arr 目标数组
     * @param int $l 左起坐标
     * @param $r 右起坐标 初始化传入数组时，$r = count($arr)-1
     * @return mixed
     */
    public  function quick_sort(&$arr, $l=0, $r)
    {
        $length = count($arr);
        //先判断是否需要继续进行 递归出口:数组长度为1，直接返回数组
        if(!is_array($arr)||$length <= 1) {return $arr;}
        if ($l < $r)
        {
            $i = $l;
            $j = $r;
            $baseVal = $arr[$l];
            while ($i < $j)
            {
                // 从右向左找第一个小于$baseVal的数
                while($i < $j && $arr[$j] >= $baseVal)
                    $j--;

                if($i < $j)
                    $arr[$i++] = $arr[$j];

                // 从左向右找第一个大于等于$baseVal的数
                while($i < $j && $arr[$i] < $baseVal)
                    $i++;

                if($i < $j)
                    $arr[$j--] = $arr[$i];
            }
            $arr[$i] = $baseVal;
            $this->quick_sort($arr, $l, $i - 1); // 递归调用
            $this->quick_sort($arr, $i + 1, $r);
            return $arr;
        }
    }


    /*
    * 快速排序法
    * */
    public function quick_sort2($arr) {
        $length = count($arr);
        //先判断是否需要继续进行 递归出口:数组长度为1，直接返回数组
        if(!is_array($arr)||$length <= 1) {return $arr;}
        //选择第一个元素作为基准
        $baseValue = $arr[0];
        //遍历除了标尺外的所有元素，按照大小关系放入两个数组内
        //初始化两个数组
        $leftArr = array();  //小于基准的
        $rightArr = array();  //大于基准的
        //使用for循环进行遍历，把选定的基准当做比较的对象
        for($i = 1; $i<$length; $i++) {
            if( $arr[$i] < $baseValue) {
                //放入左边数组
                $leftArr[] = $arr[$i];
            } else {
                //放入右边数组
                $rightArr[] = $arr[$i];
            }
        }

        //再分别对左边和右边的数组进行相同的排序处理方式递归调用这个函数
        $leftArr = $this->quick_sort2($leftArr);
        $rightArr = $this->quick_sort2($rightArr);
        //合并 左边 标尺 右边， 注意：array($baseValue),关联着重复数据
        return array_merge($leftArr, array($baseValue), $rightArr);
    }


    /*

    * 插入排序法
    * 每步将一个待排序的记录，按其关键码值的大小插入前面已经排序的文件中适当位置上，直到全部插入完为止。
    * 算法适用于少量数据的排序，时间复杂度为O(n^2)。是稳定的排序方法。
    * */
    function insertSort($arr){
        $len = count($arr);
        if( $len <= 1 ) return $arr;
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
        if( $len <= 1 ) return $arr;
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
        if( $len <= 1 ) return $arr;
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
     * @return mixed 返回的数组
     */
    function bubbleSort($arr) {
        $len = count($arr);
        if( $len <= 1 ) return $arr;
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
    public function bubbleSort2($arr){
        $len = count($arr);
        if( $len <= 1 ) return $arr;
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
    function bubbleSort3(array &$arr){
        $len = count($arr);
        if( $len <= 1 ) return $arr;
        for($i = 0;$i < $len-1;$i++){
            //从后往前逐层上浮小的元素 $j >= 0
            for($j = $len - 2;$j >= $i ;$j --){
                $this->swap($arr,$j,$j+1);
            }
        }
        return $arr;
    }
    //第四种写法
    function BubbleSort4($arr)
    {
        $len = count($arr);
        if( $len <= 1 ) return $arr;
        for($i = 0;$i < $len-1;$i++) {
            for($j = 0;$j < $len-$i-1;$j++) {
                $this->swap($arr,$j,$j+1);
            }
        }
        return $arr;
    }

















}