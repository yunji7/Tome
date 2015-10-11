<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>完整demo</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

    <style type="text/css">
        div{
            width:100%;
        }
    </style>
</head>
<body>
<div>



    
    <h1>完整demo</h1>
    <form action="/Tome/index.php/Home/Index/index" method="post" enctype="multipart/form-data">


        <?php echo ($editor); ?>


        <input type="submit" value="Submit" />
    </form>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
</div>

        <?php echo ($center); ?>



        <!--<?php echo ($write); ?>-->



</body>
</html>