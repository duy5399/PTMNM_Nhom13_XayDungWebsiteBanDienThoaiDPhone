<!-- left menu - menu ben  trai	 -->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Tìm kiếm ...">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="{!!url('admin/home/')!!}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li role="presentation" class="divider"></li>
			<li id="danhmuc"><a href="{{asset('admin/category')}}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Danh mục</a></li>

			<li id="sanpham"><a href="{!!url('admin/product/')!!}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Sản phẩm </a></li>
					
			<li role="presentation" class="divider"></li>
			<li><a href="{!!url('admin/user')!!}"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Khách hàng</a></li>
			<li><a href="{!!url('admin/bill')!!}"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg> Đơn đặt hàng</a></li>
			
			<li role="presentation" class="divider"></li>
			<li><a href="{!!url('admin/slider')!!}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>  Slider</a></li>
			<li><a href="{!!url('admin/new')!!}"><span class="glyphicon glyphicon-file"></span> Tin tức</a></li>
		</ul>

	</div><!--/.sidebar-->
<!-- /left menu - menu ben  trai	 -->