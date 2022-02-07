@extends('admin.Layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			@include('admin.Layouts.note_error')
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Category
					</div>

					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>Mã danh mục</th>										
										<th>Tên danh mục</th>
										<th>Trạng thái</th>										
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@foreach($catelist as $list)
									<tr>
										<?php //listcate ($data,$id_cha =0,$str=""); ?>  
										<th>{{$list->cate_id}}</th>										
										<th>{{$list->cate_name}}</th>
										<td>
											@if($list->status == 0)
												<span style="color:#d35400;">Vô hiệu hóa</span>
											@else
												<span style="color:#27ae60;">Đang kích hoạt</span>
											@endif
										</td>										
										<th>
											<a href="{{asset('admin/category/edit/'.$list->cate_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>Sửa</a>
											<a href="{{asset('admin/category/delete/'.$list->cate_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa mục này?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Xóa</a>
										</th>
									</tr>	
									@endforeach								
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">Thêm danh mục mới</div>
						<div class="panel-body">
							<form method="post">
								<div class="form-group">
									<label>Tên danh mục:</label>
									<input required type="text" name="name" class="form-control" placeholder="Tên danh mục...">
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên danh mục..." value="Thêm mới">
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
				</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection