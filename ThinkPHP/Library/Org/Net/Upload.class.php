<?php
namespace Org\Net;
//一个小功能 就是 funtcion
class Upload{
	public $imgArr;
	public $url;
	function __construct($arr,$url){
		$this->imgArr = $arr;
		$this->url = $url;
	}
	function mkUpload(){
		//判断目录存在 不存在
		if(!is_dir("Public/upload/")){
			mkdir("Public/upload/");
		}
		$dateDir = "Public/upload/".date("Ymd")."/";
		if(!is_dir($dateDir)){
			mkdir($dateDir);
		}
		return $dateDir;
	}
	function getExtName(){
		return end(explode(".",$this->imgArr["name"]));
		//end() 将 array 的内部指针移动到最后一个单元并返回其值。 
	}
	function judgeType($extName){
		if($extName!="jpg" && $extName!="png" && $extName!="gif" && $extName!="jpeg" && $extName!="mp4" && $extName!="JPG"  && $extName!="PNG"){
			echo "<meta charset='utf-8'>";
			echo "类型不对";
			exit;
		}
	}
	function judgeSize($size){
		if($this->imgArr["size"]>2000000000){
			echo "<meta charset='utf-8'>";
			echo "文件太大";
			exit;
		}
	}
	function main(){  //执行动作的主函数：
		//创建upload目录
		$dir = $this->mkUpload();
		$extName = $this->getExtName();
		$this->judgeType($extName);
		$this->judgeSize($extName);
		$newName = $dir.time().rand(0,1000000).".".$extName;
		$re = move_uploaded_file($this->imgArr["tmp_name"],$newName);
		return $newName;
	}
}
?>
