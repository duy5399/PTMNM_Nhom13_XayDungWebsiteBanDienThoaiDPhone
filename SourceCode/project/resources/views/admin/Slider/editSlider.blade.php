@extends('admin.Layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Slider</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Chỉnh sửa slider</small></h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
						@include('admin.Layouts.note_error')
						<form action="" method="post" enctype="multipart/form-data">
							<div class="form-group">
				      			<label>STT</label>
				      			<input disabled type="text" name="txtslider_id" id="inputTxtid" class="form-control" value="{{$slider->slider_id}}"  >
				      		</div>
							<div class="form-group">
				      			<label>Tên slider</label>
				      			<input type="text" name="txtslider_name" id="inputTxtname" class="form-control" value="{{$slider->slider_name}}" required="" >
				      		</div>
				      		<div class="form-group">
				      			<label>Hình ảnh</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<input type="file" name="txtslider_img" value="{{ old('txtslider_img') }}" id="inputtxtslider_img" class="form-control">
										<!-- <input type="file" name="file" id="file" data-uri="?mod=product&act=upload_single"> -->
										<img id="slider" class="thumbnail" height="300px" src="{{asset('storage/app/slider/'.$slider->slider_img)}}">
									</div>
					      		</div>				      			
				      		</div>
							<div class="form-group">
				      			<label>Người tạo</label>
				      			<input disabled type="text" name="txtcreator" id="inputcreator" class="form-control" value="{{$slider->creator}}" disabled >
				      		</div>
							<div class="form-group">
				      			<label>Trạng thái</label>
				      			<div class="row">					      			
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										<select name="status" id="status">	
											<option value="1" @if($slider->status == '1') selected @endif>Đang kích hoạt</option>
											<option value="0" @if($slider->status == '0') selected @endif>Vô hiệu hóa</option>
										</select>
									</div>	
					      		</div>				      			
				      		</div>
							<br/>
							<br/>	      				      		
							<div class="form-group">
								<input type="submit" name="submit" class="form-control btn btn-primary" value="Chỉnh sửa silder" class="button" />
								<br/>
								<br/>
								<a href="{{asset('admin/slider')}}" class="form-control btn btn-danger">Hủy bỏ</a>
							</div>
							{{ csrf_field() }}
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection