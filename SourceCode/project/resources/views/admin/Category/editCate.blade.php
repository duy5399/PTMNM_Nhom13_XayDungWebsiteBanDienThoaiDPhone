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
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa danh mục</div>
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
						@include('admin.Layouts.note_error')
						<form method="post">
							<div class="form-group">
								<label>Tên danh mục:</label>
								<input required type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$cate->cate_name}}">
							</div>
							<div class="form-group">
								<label>Trạng thái</label>
								<div class="row">					      			
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										<select name="status" id="status">	
											<option value="1" @if($cate->status == '1') selected @endif>Đang kích hoạt</option>
											<option value="0" @if($cate->status == '0') selected @endif>Vô hiệu hóa</option>
										</select>
									</div>	
								</div>				      			
							</div>
							<div class="form-group">
								<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên danh mục..." value="Sửa">
							</div>
							<div class="form-group">
								<a href="{{asset('admin/category')}}" class="form-control btn btn-danger">Hủy bỏ</a>
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