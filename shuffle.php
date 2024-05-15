<?php 
$seqfile = 'seq.php';
$seqdate=date("Y-m-d",filemtime($seqfile));
$nowdate = date("Y-m-d");
//$nowdate = 0;
if ($seqdate == $nowdate)
{
    //echo "是今天修改的文件！";
    $quotefile=file('quote.txt');
    $lines = count($quotefile);
}
else
{
    //echo "不是今天修改的文件！";

    $quotefile=file('quote.txt');
    $lines = count($quotefile);
    //echo $lines;
    //echo $quotefile[1];


    for ($i=1; $i<=($lines+1)/4; $i++)
    {
        $seqarray[$i-1] = $i;       
    }

    shuffle($seqarray);

    //缓存
    $seqhandle = fopen($seqfile,'w+');
    if(false !== $seqhandle)
    {
        file_put_contents($seqfile,serialize($seqarray));//写入文件
    }
    fclose($seqhandle);

    //读取文件
    //$seqhandle=fopen($seqfile,'r');
    //$cacheArray=unserialize(fread($seqhandle,filesize($seqfile)));
    //fclose($seqhandle);
    //print_r($cacheArray);
}?>