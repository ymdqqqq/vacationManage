<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>PP</title>
	<link rel=”icon” href=”/favicon.ico” mce_href=”/favicon.ico” type=”image/x-icon”>
	<link rel=”shortcut icon” href=”/favicon.ico” mce_href=”/favicon.ico” type=”image/x-icon”>
	<meta name='description' content='employee manage for hr'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link href='http://s.baixing.net/ace/css/bootstrap.min.css' rel='stylesheet'>
	<link href='http://s.baixing.net/ace/css/bootstrap-responsive.min.css' rel='stylesheet'>
	<link href='http://s.baixing.net/ace/css/jquery.datetimepicker.css' rel='stylesheet'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/font-awesome.min.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/ace-fonts.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/progressbar.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/ace.min.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/ace-responsive.min.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/ace-skins.min.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/datepicker.css'>
	<link rel='stylesheet' href='http://s.baixing.net/ace/css/jquery.dataTables.min.css'>
	<style> .vacation_toolbar, .vacation_export {
			float: right;
			margin-right: 10px
		}

		#vacation td {
			vertical-align: middle
		}

		.table {
			table-layout: fixed
		}

		.dataTable .detail-control {
			cursor: pointer
		}

		.detail-control .caret {
			font-size: 130%;
			display: block;
			margin: 0 auto;
			transition: transform .25s
		}

		.open.detail-control .caret {
			transform: rotate(-180deg)
		}

		td .progress {
			margin: 0;
			float: left
		}

		.detail-table {
			margin: 0
		}</style>
</head>
<body>
<div class='navbar'>
	<div class='navbar-inner'>
		<div class='container-fluid'><a href='#' class='brand'>
				<small><i class='icon-leaf'></i>&nbsp;PP</small>
			</a></div>
	</div>
</div>
<div class='main-container container-fluid'><a id='menu-toggler' href='#' class='menu-toggler'><span class='menu-text'>123</span></a>

	<div id='sidebar' class='sidebar'>
		<div id='sidebar-shortcuts' class='sidebar-shortcuts'>
			<div id='sidebar-shortcuts-mini' class='sidebar-shortcuts-mini'><span class='btn btn-success'></span><span
					class='btn btn-info'></span><span class='btn btn-warning'></span><span
					class='btn btn-danger'></span></div>
		</div>
		<!-- #sidebar-shortcuts-->
		<ul class='nav nav-list'>
			<li><a href='/employee'><span class='menu-text'>人员管理</span></a></li>
			<li class='active'><a href='#'><span class='menu-text'>假期查询</span></a></li>
		</ul>
	</div>
</div>
<div class='main-content'>
	<div id='breadcrumbs' class='breadcrumbs'>
		<ul class='breadcrumb'>
			<li><i class='icon-home home-icon'></i><a href='/hrmanage/'>PP</a><span class='divider'>></span></li>
			<li class='active'>假期查询</li>
		</ul>
	</div>
	<div class='page-content'>
		<table id='vacation' class='table table-striped table-bordered dataTable'>
			<thead>
			<tr>
				<th style='width:1em'></th>
				<th style='width:8em'>工号</th>
				<th style='width:8em'>姓名</th>
				<th>年假</th>
				<th>病假</th>
			</tr>
			<tr class='hidden'>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			</thead>
		</table>
		<div id='vacation_toolbar' class='hidden'>查询范围<span style='margin:0;margin-left:10px'
		                                                    class='input-append'><input type='text' name='year'
		                                                                                style='margin:0' value='<?= date('Y');?>'
		                                                                                id='year' class='span1'><span
					class='add-on'>年</span></span><input type='text' name='from' value='01-01' id='from' class='span1'>到<input
				type='text' name='to' value='12-31' id='to' class='span1'></div>
		<div id='vacation_export' class='hidden'><a id='export-button' href='' data-prefix='/hrmanage/export'
		                                            class='btn btn-info btn-small'>导出Excel</a></div>
	</div>
</div>
</body>
<script src='http://s.baixing.net/ace/js/jquery-2.0.3.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery-ui-1.10.3.custom.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery.ui.touch-punch.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery.slimscroll.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery.easy-pie-chart.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery.dataTables.min.js'></script>
<script src='http://s.baixing.net/ace/js/flot/jquery.flot.min.js'></script>
<script src='http://s.baixing.net/ace/js/flot/jquery.flot.pie.min.js'></script>
<script src='http://s.baixing.net/ace/js/flot/jquery.flot.resize.min.js'></script>
<script src='http://s.baixing.net/ace/js/ace-elements.min.js'></script>
<script src='http://s.baixing.net/ace/js/ace.min.96ac5e56.js'></script>
<script src='http://s.baixing.net/ace/js/date-time/bootstrap-datepicker.min.js'></script>
<script src='http://s.baixing.net/ace/js/bootstrap.min.js'></script>
<script src='http://s.baixing.net/Puerh/js/bootstrap.js'></script>
<script src='http://s.baixing.net/ace/js/ace.min.js'></script>
<script src='http://s.baixing.net/ace/js/jquery.datetimepicker.js'></script>
<script src='http://s.baixing.net/ace/js/progressbar.min.js'></script>
<script> var dateregex = /^\d{4}-\d{2}-\d{2}$/;
	var halfYear = ((new Date()).getMonth() >= 6);
	/*0-11*/
	window.send = (function () {
		var method = function (data) {
			var methods = {
				enter: 'get',
				leave: 'get',
				update: 'get',
				stat: 'get',
				detail: 'get',
				who: 'get',
				qingjia: 'get',
				xiaojia: 'get'
			};
			return methods[data.operation];
		};
		var url = function (data) {
			var urls = {
				enter: '/employee',
				leave: '/employee',
				update: 'employee',
				stat: '/vacation_stat',
				detail: '/vacation_stat_detail',
				who: '/who',
				qingjia: '/qingjia',
				xiaojia: '/xiaojia'
			};
			return urls[data.operation];
		};
		return function (data) {
			var param = $.type(data.data) == 'string' ? data.data : $.param(data.data || {});
			param += '&operation=' + data.operation;
			$.ajax({
				success: data.success || function (response) {
					if (response.result != 'success') {
						alert(response.result || '未知错误');
						return;
					}
					if (data.callback) {
						data.callback.call(this, response);
					}
				}, error: data.error || function () {
					alert('网络错误, 请刷新再试试');
				}, url: url(data), type: method(data), dataType: data.expect || 'json', data: param
			});
		};
	})();</script>
<script> var opened_rows = {};
	/*需要在日期变化的时候更新的*/
	var table = $('#vacation').DataTable({
		columns: [{
			class: 'detail-control',
			data: null,
			defaultContent: '<b class="caret"></b>'
		}, {data: 'eid'}, {data: 'name'}, {data: 'annual_stat'}, {data: 'sick_stat'}],
		dom: 'lrf<"vacation_toolbar"><"vacation_export">tip',
		ajax: function (data, setTable, settings) {
			var statistics_text = function (usage) {
				var mul = 1;
				if (halfYear) mul = 0;
				return '<span>' + '去年剩余' + usage.bonus_total * mul + '天/已使用' + mul * usage.bonus_used + '天' + '</span>' + '&nbsp;&nbsp;&nbsp;' + '<span>' + '今年共' + usage.normal_total + '天/已使用' + usage.normal_used + '天' + '</span>';
			};
			window.send({
				operation: 'stat', data: $('#year'), callback: function (response) {
					var data = [];
					for (var eid in response.data) {
						data.push({
							DT_RowId: 'row-' + eid,
							eid: eid,
							name: response.data[eid].name,
							annual_stat: statistics_text(response.data[eid].annual),
							sick_stat: statistics_text(response.data[eid].sick)
						});
					}
					setTable({data: data});
				}
			});
		},
		order: [0, 'asc'],
		ordering: true,
		language: {
			paginate: {first: '首页', last: '尾页', next: '下一页', previous: '上一页'},
			search: '搜索',
			lengthMenu: '一页_MENU_条',
			infoFiltered: '...',
			info: '第_START_到_END_条，共_MAX_条',
			infoEmpty: '没有记录',
			zeroRecords: '没有找到'
		},
		paging: true
	});
	$('#vacation').on('refresh', 'td.detail-control', function (e) {
		var format = function (data) {
			var map = {
				'sick': '病假',
				'annual': '事假',
				'morning': '上午',
				'afternoon': '下午',
				'all': '全天',
				false: '否',
				true: '是'
			};
			if (data.length == 0) {
				return '这段时间内没有请假记录';
			}
			var result = '<table id="detail" class="table table-bordered detail-table">' + '<thead>' + '<th class="hidden">id</th><th>日期</th><th>类型</th><th>时间</th><th>备注</th><th>bonus</th><th>销假</th>' + '</thead>';
			for (var i in data) {
				result += '<tr>';
				result += '<td class="hidden">' + data[i].id + '</td>';
				result += '<td>' + data[i].date + '</td>';
				result += '<td>' + map[data[i].type] + '</td>';
				result += '<td>' + map[data[i].duration] + '</td>';
				result += '<td>' + (data[i].comment || '无') + '</td>';
				result += '<td>' + data[i].bonus + '</td>';
				result += "<td><button class='btn btn-mini drop'><i class='icon icon-remove'></i> </button></td>"
				result += '</tr>';
			}
			result += '</tbody></table>';
			return result;
		};
		var $tr = $(this).closest('tr');
		var row = table.row($tr);
		var year = $('#year').val();
		window.send({
			operation: 'detail',
			data: {
				eid: $tr.find('td:eq(1)').html(),
				startDate: year + '-' + $('#from').val(),
				endDate: year + '-' + $('#to').val()
			},
			callback: function (response) {
				row.child(format(response.data)).show();
				$('#detail').on('click', '.drop', function (e) {
					var $thisline = $(this).closest('tr');
					var $id = $(this).closest('tr').children()[0].innerHTML;
					window.send({
						operation: 'xiaojia',
						data:{
							id: $id
						},callback :function (response){
							table.row($thisline).remove().draw();
						}
					});
				});
			}
		});
	}).on('click', 'td.detail-control', function (e) {
		var $tr = $(this).closest('tr');
		var row = table.row($tr);
		if (row.child.isShown()) {
			delete opened_rows[row.index()];
			row.child.hide();
			$(this).removeClass('open');
		} else {
			opened_rows[row.index()] = $tr.attr('id');
			$(this).addClass('open');
			$(this).trigger('refresh');
		}
	});
	$('.vacation_toolbar').replaceWith($('#vacation_toolbar').removeClass('hidden').addClass('vacation_toolbar'));
	$('.vacation_export').replaceWith($('#vacation_export').removeClass('hidden').addClass('vacation_export'));
	$('#export-button').click(function (e) {
		var prefix = $(this).data('prefix');
		$(this).attr('href', prefix + '?' + $.param({
			year: $('#year').val(),
			from: $('#from').val(),
			to: $('#to').val()
		}));
	});
	$('#year').change(function (e) {
		table.clear().draw().ajax.reload();
	});
	var refresh_detail = function () {
		for (var i in opened_rows) {
			var id = '#' + opened_rows[i];
			$(id).find('.detail-control').trigger('refresh');
		}
	};
	$('#from,#to').change(refresh_detail);
	table.on('draw', refresh_detail);</script>
</html>