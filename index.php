<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>贤狼赫萝的智慧语录</title>
    <link type="text/css" rel="stylesheet" href="css/style.css" />

</head>
<body>
    <!-- 导航回 blog 按钮 -->
    <div id="back" style="z-index: 9999; position: fixed ! important; left: 60px; top: 100px;">   
        <a class="niceButton" href="https://blog.lichenrobo.com/"><span></span></a>      
    </div>


    <div class="container">
        <h1>贤狼赫萝的智慧语录</h1>
        <?php    
        // 包含php函数文件
        require_once('pagego.php');     // 页面导航
        require_once('shuffle.php');    // 每日随机排序文本    
        require_once('quote.php');      // 显示文本函数 
        

        // 获取 url - page 参数
        $query = $_SERVER["QUERY_STRING"];
        parse_str($query,$param);
        $page = $param['page'];
        //print_r($param);
        //echo "Page = " . $param['page'] . ".";

        // 设定页面参数
        $quotenum = 3;      // 每页列出几条文本
        $pages = ceil(($lines+1)/(4*$quotenum));    // 总共需要多少页
        

        // 根据当前页面参数，显示文本
        displayquote($page, $quotenum);

        // 显示本页导航菜单
        pagego($page, $pages); 

        ?>
        <!-- 文本显示备份
        <div class="quote">
            <p>「賢きとは己を知ること也」</p>
            <p>「自知之明者，谓之贤也。」</p>
            <div class="source">
                <p>——第一卷，第3章</p>
            </div>
        </div>
        -->
    </div>
</body>
</html>
