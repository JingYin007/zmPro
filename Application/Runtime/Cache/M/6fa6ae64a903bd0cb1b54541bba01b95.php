<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        td,th {
            display: table-cell;
            vertical-align: inherit;
            border:1px dashed gray;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
            border:1px solid gray;
        }
        td {
            padding: 7px;
            color: #828282;
        }
        .time{
            color: #383b3c;
        }
        .content{
            color: #8b050a;
        }
        .tr_title{
            height: 38px;
        }
    </style>
</head>
<body>
<div class="cpxqzsk">
    <div class="wlxqzs">
        <table>
            <tr class="tr_title">
                <th colspan="2">
                    <span class="title">物流详情：<?php echo ($comName); ?></span>
                </th>
            </tr>
            <?php if(is_array($trace)): $i = 0; $__LIST__ = $trace;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                    <td><span class="time"><?php echo ($v["time"]); ?></span></td>
                    <td><span class="content"><?php echo ($v["context"]); ?></span></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
</div>
</body>
</html>