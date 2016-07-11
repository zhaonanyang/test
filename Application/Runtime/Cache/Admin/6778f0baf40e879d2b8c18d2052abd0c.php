<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" href="/mini/Public/admin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/mini/Public/admin/bootstrap/css/bootstrap-theme.min.css" />
<style type="text/css">
	*{
		list-style: none;
	}
	.panel-group{
		background: #ecf5ff;
		height: 100%;
		padding-bottom: 100px;
	}
	.panel{
		text-decoration: none;
		padding: 7px 8px;
		font-size: 14px;
		font-weight: 600;
		color: #fff;
		background: #ecf5ff;
		background: -moz-linear-gradient(top, #ecf5ff 0%, #ecf5ff 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ecf5ff), color-stop(100%,#ecf5ff));
		background: -webkit-linear-gradient(top, #ecf5ff 0%,#ecf5ff 100%);
		background: -o-linear-gradient(top, #ecf5ff 0%,#ecf5ff 100%);
		background: -ms-linear-gradient(top, #ecf5ff 0%,#ecf5ff 100%);
		background: linear-gradient(top, #ecf5ff 0%,#ecf5ff 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ecf5ff', endColorstr='#ecf5ff');
		-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#ecf5ff', endColorstr='#ecf5ff')";
		/*border-bottom: 1px solid #567A9F;*/
		/*border-radius: 4px;*/
	}
	.panel a{
		text-decoration: none;
		color:#000;
		font-family:Microsoft YaHei;
	}
	.panel-heading{
		background: #ecf5ff;
	}
	.panel-body{
		background:#ecf5ff;
	}
	.panel-body li{
		border-radius: 4px;
		padding: 10px 20px;
		border-top: 0px solid #ecf5ff;
	}
	.panel-body li a{
		color:#000;
	}
	.panel-body li:hover{
		background: #df2213;
	}
	.panel-body li:hover>a{
		color:#fff;
	}
</style>
<div class="panel-group" id="accordion" style="margin-bottom:0px;">
	<div class="panel " style="margin-top:0px;">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseONE">
					<i class="glyphicon glyphicon-pencil"></i> 发布
					<i class="glyphicon glyphicon-menu-down pull-right"></i>
				</a>
			</h4>
		</div>
		<div id="collapseONE" class="panel-collapse collapse">
			<div class="panel-body" style="border:none;">
				<li >
					<a href="<?php echo U('xadmin/news/add_news');?>/type/1" target="main">
						<i class="glyphicon glyphicon-minus"></i> 发布普通文章
					</a>
				</li>
				<li >
					<a href="<?php echo U('xadmin/news/add_news');?>/type/2" target="main">
						<i class="glyphicon glyphicon-minus" ></i> 发布选题文章
					</a>
				</li>
			</div>
		</div>
	</div>
</div>
<script src="/mini/Public/admin/js/jquery.js"></script> 
<script src="/mini/Public/admin/bootstrap/js/bootstrap.min.js"></script>