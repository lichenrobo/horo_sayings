<?php
    function displayquote($nowpage, $shownum)
    {
        $quotefile=file('quote.txt');
        $seqfile = 'seq.php';
        //读取seq文件
        $seqhandle=fopen($seqfile,'r');
        $shufflearray=unserialize(fread($seqhandle,filesize($seqfile)));
        fclose($seqhandle);
        //print_r($shufflearray);
        //echo sizeof($shufflearray);

        //echo $quotefile[1];

        for ($j=$shownum*($nowpage-1); $j<=min(sizeof($shufflearray)-1, $shownum*$nowpage-1 ); $j++)
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

