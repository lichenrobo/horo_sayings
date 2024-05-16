<?php
//////////////////////////////////////////////
////////////    显示语句文本   ////////////////
//////////////////////////////////////////////
    function displayquote($nowpage, $shownum)       // 输入当前页、每页显示几条语句 参数
    {
        $quotefile=file('quote.txt');       // 语录库文件
        $seqfile = 'seq.php';               // 当前日语录排序文件
        //读取seq文件
        $seqhandle=fopen($seqfile,'r');
        $shufflearray=unserialize(fread($seqhandle,filesize($seqfile)));        // 排序数组
        fclose($seqhandle);
        //print_r($shufflearray);
        //echo sizeof($shufflearray);

        //echo $quotefile[1];

        for ($j=$shownum*($nowpage-1); $j<=min(sizeof($shufflearray)-1, $shownum*$nowpage-1 ); $j++)    // 遍历当前页要显示的文本
        {
            $jj = $shufflearray[$j];
            echo '<div class="quote">';
            echo '<p>' . $quotefile[4*$jj-4] . '</p>';
            echo '<p>' . $quotefile[4*$jj-3] . '</p>';
            echo '<div class="source">';
            echo '<p>' . $quotefile[4*$jj-2] . '</p>';
            echo '</div>';
            echo '</div>';
        }       
    }
?>

