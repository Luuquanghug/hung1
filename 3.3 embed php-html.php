<?php
$post_title = "hi ha hi ha";
$post_content = " Lưu Quang Hug";
?>
<html>
    <head>
        <title>Cú pháp php</title>
    </head>
    <body>
        <style>
            h1 {
                color: red;
            }
        </style>
        <div id="content">
            <h1 class="post-title"><?php echo "$post_title"; ?></h1>
            <div class="post-content">
               <?php echo "$post_content" ?>
            </div>
        </div>
    </body>
</html>

