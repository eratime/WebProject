<?php
	function cutstr($a,$b,$c){
		if(strlen($a)>$b){
			$i=mb_substr($a,0,$c,"utf8")."...";
		}else{
			$i=$a;
		}
		return $i;
	}
?>