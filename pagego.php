<?php 
    function pagego($nowpage, $pages)
    {
        $url = 'https://blog.lichenrobo.com/horo/';
        //echo $nowpage . ', ' . $pages;

        if($pages<6)
        {
            //echo "最多5页！";
            echo '<div class="pagego">';
            echo '<ul class="pagination">';

            $tail = '?page=' . max(1, $nowpage-1);      // 前一页链接
            $jumpurl = '<a href="' . $url . $tail . '">';
            echo '<li>' . $jumpurl . '«</a></li>';

            for ($i=1; $i<=$pages; $i++)
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
        else
        {
            //echo "多于5页！";
            echo '<div class="pagego">';
            echo '<ul class="pagination">';

            $tail = '?page=' . max(1, $nowpage-1);      // 前一页链接
            $jumpurl = '<a href="' . $url . $tail . '">';
            echo '<li>' . $jumpurl . '«</a></li>';

            if($nowpage<3)
            {
                for ($i=1; $i<=3; $i++)
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
            elseif($nowpage>($pages-2))
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
            else
            {
                $tail = '?page=' . 1;      // 第一页链接
                if(1 == $nowpage)
                {
                    $jumpurl = '<a class="active" href="' . $url . $tail . '">';
                    echo '<li>' . $jumpurl . '1</a></li>';
                }
                else
                {
                    $jumpurl = '<a href="' . $url . $tail . '">';
                    echo '<li>' . $jumpurl . '1</a></li>';
                }

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
                if($pages == $nowpage)
                {
                    $jumpurl = '<a class="active" href="' . $url . $tail . '">';
                    echo '<li>' . $jumpurl . $pages . '</a></li>';
                }
                else
                {
                    $jumpurl = '<a href="' . $url . $tail . '">';
                    echo '<li>' . $jumpurl . $pages . '</a></li>';
                }
            }



            $tail = '?page=' . min($pages, $nowpage+1);      // 后一页链接
            $jumpurl = '<a href="' . $url . $tail . '">';
            echo '<li>' . $jumpurl . '»</a></li>';
            echo '</ul>';
            echo '</div>';
        }

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