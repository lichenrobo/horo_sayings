<?php 
//////////////////////////////////////////////
////////////   显示当前页导航  ////////////////
//////////////////////////////////////////////

    function pagego($nowpage, $pages)       // 输入当前页数、总共需要多少页
    {
        $url = 'https://blog.lichenrobo.com/horo/';
        //echo $nowpage . ', ' . $pages;

        if($pages < 6)      // 总页数少于 6 页的情况
        {
            //echo "最多5页！";
            echo '<div class="pagego">';
            echo '<ul class="pagination">';

            $tail = '?page=' . max(1, $nowpage-1);      // 前一页链接
            $jumpurl = '<a href="' . $url . $tail . '">';
            echo '<li>' . $jumpurl . '«</a></li>';

            for ($i=1; $i<=$pages; $i++)        // 列出每一页按钮
            {
                if($i == $nowpage)      // 判断是不是当前页
                {
                    $tail = '?page=' . $i;      // 第i页链接
                    $jumpurl = '<a class="active" href="' . $url . $tail . '">';    
                    echo '<li>' . $jumpurl . $i . '</a></li>';
                }
                else
                {
                    $tail = '?page=' . $i;      // 第i页链接
                    $jumpurl = '<a href="' . $url . $tail . '">';    
                    echo '<li>' . $jumpurl . $i . '</a></li>';
                }
            }

            $tail = '?page=' . min($pages, $nowpage+1);      // 后一页链接
            $jumpurl = '<a href="' . $url . $tail . '">';
            echo '<li>' . $jumpurl . '»</a></li>';
            echo '</ul>';
            echo '</div>';
        }
        else        // 总页数大于 5 页的情况
        {
            //echo "多于5页！";
            echo '<div class="pagego">';
            echo '<ul class="pagination">';

            $tail = '?page=' . max(1, $nowpage-1);      // 前一页链接
            $jumpurl = '<a href="' . $url . $tail . '">';
            echo '<li>' . $jumpurl . '«</a></li>';

            if($nowpage<3)      // 当前页是 第1页或者第2页 的情况
            {
                for ($i=1; $i<=3; $i++)     // 列出前3页
                {
                    if($i == $nowpage)      // 判断是不是当前页
                    {
                        $tail = '?page=' . $i;      // 第i页链接
                        $jumpurl = '<a class="active" href="' . $url . $tail . '">';    
                        echo '<li>' . $jumpurl . $i . '</a></li>';
                    }
                    else
                    {
                        $tail = '?page=' . $i;      // 第i页链接
                        $jumpurl = '<a href="' . $url . $tail . '">';    
                        echo '<li>' . $jumpurl . $i . '</a></li>';
                    }
                }
                $tail = '?page=' . round((3+$pages)/2);      // 右...页链接
                $jumpurl = '<a href="' . $url . $tail . '">';
                echo '<li>' . $jumpurl . '...' . '</a></li>';

                $tail = '?page=' . $pages;      // 末一页链接
                $jumpurl = '<a href="' . $url . $tail . '">';
                echo '<li>' . $jumpurl . $pages . '</a></li>';

            }
            elseif($nowpage>($pages-2))     // 当前页是最后两页的情况
            {
                $tail = '?page=' . 1;      // 第一页链接
                $jumpurl = '<a href="' . $url . $tail . '">';
                echo '<li>' . $jumpurl . 1 . '</a></li>';

                $tail = '?page=' . round(($pages-1)/2);      // 左...页链接
                $jumpurl = '<a href="' . $url . $tail . '">';
                echo '<li>' . $jumpurl . '...' . '</a></li>';

                for ($i=$pages-2; $i<=$pages; $i++)
                {
                    if($i == $nowpage)      // 判断是不是当前页
                    {
                        $tail = '?page=' . $i;      // 第i页链接
                        $jumpurl = '<a class="active" href="' . $url . $tail . '">';    
                        echo '<li>' . $jumpurl . $i . '</a></li>';
                    }
                    else
                    {
                        $tail = '?page=' . $i;      // 第i页链接
                        $jumpurl = '<a href="' . $url . $tail . '">';    
                        echo '<li>' . $jumpurl . $i . '</a></li>';
                    }
                }

            }
            else        // 当前页是相对中间的情况
            {
                $tail = '?page=' . 1;      // 第一页链接
                $jumpurl = '<a href="' . $url . $tail . '">';
                echo '<li>' . $jumpurl . '1</a></li>';


                $tail = '?page=' . round($nowpage/2);      // 左...页链接
                $jumpurl = '<a href="' . $url . $tail . '">';
                echo '<li>' . $jumpurl . '...' . '</a></li>';

                $tail = '?page=' . $nowpage-1;      // 左一页链接
                $jumpurl = '<a href="' . $url . $tail . '">';
                echo '<li>' . $jumpurl . $nowpage-1 . '</a></li>';
                $tail = '?page=' . $nowpage;      // 当前页链接
                $jumpurl = '<a class="active" href="' . $url . $tail . '">';
                echo '<li>' . $jumpurl . $nowpage . '</a></li>';
                $tail = '?page=' . $nowpage+1;      // 右一页链接
                $jumpurl = '<a href="' . $url . $tail . '">';
                echo '<li>' . $jumpurl . $nowpage+1 . '</a></li>';

                $tail = '?page=' . round(($nowpage+1+$pages)/2);      // 右...页链接
                $jumpurl = '<a href="' . $url . $tail . '">';
                echo '<li>' . $jumpurl . '...' . '</a></li>';


                $tail = '?page=' . $pages;      // 末一页链接
                $jumpurl = '<a href="' . $url . $tail . '">';
                echo '<li>' . $jumpurl . $pages . '</a></li>';
            }



            $tail = '?page=' . min($pages, $nowpage+1);      // 后一页链接
            $jumpurl = '<a href="' . $url . $tail . '">';
            echo '<li>' . $jumpurl . '»</a></li>';
            echo '</ul>';
            echo '</div>';
        }

        // 导航 html 备份
        //echo '<div class="pagego">';
        //echo '<ul class="pagination">';
        //echo '<li><a href="#">«</a></li>';
        //echo '<li><a class="active" href="#">1</a></li>';
        //echo '<li><a href="https://blog.lichenrobo.com/horo/index2.php">2</a></li>';
        //echo '<li><a href="#">3</a></li>';
        //echo '<li><a href="#">4</a></li>';
        //echo '<li><a href="#">5</a></li>';
        //echo '<li><a href="#">6</a></li>';
        //echo '<li><a href="#">7</a></li>';
        //echo '<li><a href="index2.php">»</a></li>';
        //echo '</ul>';
        //echo '</div>';
    }
?>