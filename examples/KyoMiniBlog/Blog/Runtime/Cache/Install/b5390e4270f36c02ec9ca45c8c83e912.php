<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>KYOMINI 安裝程序 SHANGHAI,CHINA</title>
<style>
body{margin:0;padding:0}.top{height:10px;background:#63d2cb;width:100%;margin-top:-3px}h1{font-family:"微軟雅黑";text-align:center;margin-top:50px;margin-bottom:50px;font-weight:normal;font-size:30px}h2{font-family:"微軟雅黑";font-size:16px;border-bottom:#CCC solid 1px;padding-bottom:12px}h2 img{margin-right:10px}hr{border-top:#CCC solid 1px;border-bottom:#FFF solid 1px;border-left:none;border-right:0;width:70%}.content{width:70%;height:auto;margin:auto}table{max-width:100%;background-color:transparent;border-collapse:collapse;border-spacing:0}.table{width:100%;margin-bottom:25px;font-size:14px;border-bottom:#CCC solid 1px}.table th,.table td{padding:8px;line-height:20px;text-align:left;vertical-align:top;border-top:1px solid #ddd}.table th{font-weight:bold}.table thead th{vertical-align:bottom}.table caption+thead tr:first-child th,.table caption+thead tr:first-child td,.table colgroup+thead tr:first-child th,.table colgroup+thead tr:first-child td,.table thead:first-child tr:first-child th,.table thead:first-child tr:first-child td{border-top:0}.table tbody+tbody{border-top:2px solid #ddd}.table .table{background-color:#fff}.table-condensed th,.table-condensed td{padding:4px 5px}.table-bordered{border:1px solid #ddd;border-collapse:separate;*border-collapse:collapse;border-left:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.table-bordered th,.table-bordered td{border-left:1px solid #ddd}.table-striped tbody>tr:nth-child(odd)>td,.table-striped tbody>tr:nth-child(odd)>th{background-color:#f9f9f9}.table-hover tbody tr:hover>td,.table-hover tbody tr:hover>th{background-color:#f5f5f5}table td[class*="span"],table th[class*="span"],.row-fluid table td[class*="span"],.row-fluid table th[class*="span"]{display:table-cell;float:none;margin-left:0}.table-hover tbody tr:hover>td,.table-hover tbody tr:hover>th{background-color:#f5f5f5}.btn-info{color:#fff;background-color:#49afcd;*background-color:#2f96b4;background-repeat:repeat-x}.btn-info:hover,.btn-info:focus,.btn-info:active,.btn-info.active,.btn-info.disabled,.btn-info[disabled]{color:#fff;background-color:#2f96b4;*background-color:#2a85a0;padding:10px 20px;font-size:14px}.btn-info:active,.btn-info.active{background-color:#24748c 9}.btn{padding:10px 20px;text-decoration:none;font-size:14px;margin:auto}.btnn{text-align:center}.boom{margin-top:40px;margin-bottom:90px}.ico-success,.ico-error{vertical-align:-1px;*vertical-align:middle;margin-right:6px;display:inline-block;width:16px;height:16px;line-height:9;overflow:hidden}.ico-success{background:url(/examples/kyominiblog/Blog/Install/Style/img/ok.png) no-repeat 0 0}.ico-error{background:url(/examples/kyominiblog/Blog/Install/Style/img/error.png) no-repeat 0 0}
</style>
</head>
<body>
<div class="top"></div>
<h1>KyoMiniBlog 爲您正在環境檢測</h1>
    <hr>
 
    <div class="content">
    <table class="table table-hover">
      <h2><img src="/examples/kyominiblog/Blog/Install/Style/img/dian.jpg" >運行環境檢查 :</h2>
        <thead>
            <tr>
                <th width="36%">項目</th>
                <th width="30%">所需配置</th>
                <th width="34%">當前配置</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($env)): $i = 0; $__LIST__ = $env;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[0]); ?></td>
                    <td><?php echo ($item[1]); ?></td>
                    <td><i class="ico-<?php echo ($item[4]); ?>">&nbsp;</i><?php echo ($item[3]); ?></td>       
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <table class="table table-hover">
<h2><img src="/examples/kyominiblog/Blog/Install/Style/img/dian.jpg" >目錄、文件權限檢查 :</h2>
        <thead>
            <tr>
     
                <th width="36%">目錄/文件</th>
                <th width="30%">所需狀態</th>
                <th width="34%">當前狀態</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($dirfile)): $i = 0; $__LIST__ = $dirfile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[3]); ?></td>
                    <td><i class="ico-success">&nbsp;</i>可寫</td>
                    <td><i class="ico-<?php echo ($item[2]); ?>">&nbsp;</i><?php echo ($item[1]); ?></td>   
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <table class="table table-hover">
<h2><img src="/examples/kyominiblog/Blog/Install/Style/img/dian.jpg" >函數依賴性檢查 :</h2>
        <thead>
            <tr>
                <th>函數名稱</th>
                <th>檢查結果</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($func)): $i = 0; $__LIST__ = $func;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[0]); ?>()</td>
                    <td><i class="ico-<?php echo ($item[2]); ?>">&nbsp;</i><?php echo ($item[1]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>


     <div class="btnn">
    <a class="btn btn-info" href="<?php echo U('/Install/step2');?>">進行下一步</a>
    </div>
    </div>
     <hr class="boom">
</body>
</html>