<?php 
//////////////////////////////////////////////////////////////////
////////////    每日第一次网页被访问时随机排序语录   ////////////////
//////////////////////////////////////////////////////////////////
date_default_timezone_set('PRC');       // 使用北京时区

$seqfile = 'seq.php';       // 排序文件
$seqdate=date("Y-m-d",filemtime($seqfile));
$nowdate = date("Y-m-d");
//echo $seqdate . '==' . $nowdate;
//$nowdate = 0;
if ($seqdate == $nowdate)       // 判断当天是否已经重排过了
{
    //echo "是今天修改的文件！";
    $quotefile=file('quote.txt');       // 获取语录总共有多少行
    $lines = count($quotefile);
}
else
{
    //echo "不是今天修改的文件！";

    $quotefile=file('quote.txt');       // 获取语录总共有多少行
    $lines = count($quotefile);
    //echo $lines;
    //echo $quotefile[1];


    for ($i=1; $i<=($lines+1)/4; $i++)      // 计算总共有多少条语句，并产生顺序数组
    {
        $seqarray[$i-1] = $i;       
    }

    shuffle($seqarray);     // 随机重排数组

    // 保存随机排序数组
    $seqhandle = fopen($seqfile,'w+');
    if(false !== $seqhandle)
    {
        file_put_contents($seqfile,serialize($seqarray));       // 写入 seq.php 文件
    }
    fclose($seqhandle);

    //读取文件
    //$seqhandle=fopen($seqfile,'r');
    //$cacheArray=unserialize(fread($seqhandle,filesize($seqfile)));
    //fclose($seqhandle);
    //print_r($cacheArray);
}?>