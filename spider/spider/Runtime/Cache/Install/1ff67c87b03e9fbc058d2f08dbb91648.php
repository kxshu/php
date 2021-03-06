<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SETUP STEP 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link href="http://flat-ui.com/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
	<link href="http://cdn.bootcss.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet"> -->
	<link href="http://flat-ui.com/css/flat-ui.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1>SETUP STEP 2</h1>
				<hr>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="span12">
				<table class="table table-hover">
					<thead>
				        <tr>
				          <th width="36%">配置</th>
				          <th width="30%">說明</th>
				        </tr>
				      </thead>
				      <tbody>
				        <tr>
				          <td><select name="db[]">
				              <option>mysql</option>
				              <option>mysqli</option>
				            </select></td>
				          <td> 數據庫連接類型，服務器支持的情況下建議使用mysqli</td>
				        </tr>
				        <tr>
				          <td><input type="text" name="db[]" value="127.0.0.1"></td>
				          <td>數據庫服務器，數據庫服務器IP，一般爲127.0.0.1</td>
				        </tr>
				        <tr>
				          <td><input type="text" name="db[]" value="mini"></td>
				          <td> 數據庫名</td>
				        </tr>
				        <tr>
				          <td><input type="text" name="db[]" value=""></td>
				          <td> 數據庫用戶名</td>
				        </tr>
				        <tr>
				          <td><input type="password" name="db[]" value=""></td>
				          <td> 數據庫密碼</td>
				        </tr>
				        <tr>
				          <td><input type="text" name="db[]" value="3306"></td>
				          <td> 數據庫端口，數據庫服務連接端口，一般爲3306</td>
				        </tr>
				        <tr>
				          <td><input type="text" name="db[]" value="Mi_"></td>
				          <td> 數據表前綴，同一個數據庫運行多個系統時請修改爲不同的前綴</td>
				        </tr>
				      </tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="span12 text-center">
				<a href="step1" class="btn btn-primary">Pre...</a>
				<a href="step2" class="btn btn-primary">NEXT...</a>
			</div>
		</div>
	</div>

	
</body>
</html>