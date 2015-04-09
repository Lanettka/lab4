<?php
$n = 32;
$arr = array('dviyok','dviyku','dviyky');
if(substr($n,-2)<20) $res = substr($n,-2);
else $res = substr($n,-1);
if($res==1) echo "Na pari vykladach postavyv stydentam $n $arr[1]";
elseif($res==0 or $res>4) echo "Na pari vykladach postavyv stydentam $n $arr[0]";
else echo "Na pari vykladach postavyv stydentam $n $arr[2]";
?>