@extends('admin.Layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sản phẩm</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Thêm mới sản phẩm </small></h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
						@include('admin.Layouts.note_error')
						<form action="" method="post" enctype="multipart/form-data">
				      		{{ csrf_field() }}
				      		<div class="form-group">
					      		<label>Chọn danh mục</label>
					      		<select name="cate" id="cate" class="form-control">
								  	@foreach($catelist as $cate)
								  		<option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
					      			@endforeach
					      		</select>
				      		</div>
				      		<div class="form-group">
				      			<label>Tên sản phẩm</label>
				      			<input type="text" name="txtproduct_name" id="inputTxtname" class="form-control" value="{{ old('txtname') }}" required="" >
				      		</div>
				      		<div class="form-group">
				      			<label>Giá mới</label>
				      			<input type="text" name="txtprice_new" id="inputTxtintro" class="form-control" value="{{ old('txtintro') }}" required="">
				      		</div>
				      		<div class="form-group">
				      			<label>Giá cũ</label>
				      			<input type="text" name="txtprice_old" id="inputtxtpacket" value="{{ old('txtpacket') }}" class="form-control" >
				      		</div>
				      		<div class="form-group">
				      			<label>Mô tả sản phẩm</label>
				      			<div class="row">
								  	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-12">
								  		<textarea class="ckeditor" name="txtproduct_desc" required=""></textarea>
									</div>
					      		</div>				      			
				      		</div>
							  <div class="form-group">
				      			<label>Chi tiết sản phẩm</label>
				      			<div class="row">
								  	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-12">
								  		<textarea class="ckeditor" name="txtproduct_content" required=""></textarea>
										  	<script type="text/javascript">
												var editor = CKEDITOR.replace('txtproduct_content',{
													language:'vi',
													filebrowserImageBrowseUrl : '../../public/plugin/ckfinder/ckfinder.html?Type=Images',
													filebrowserFlashBrowseUrl : '../../public/plugin/ckfinder/ckfinder.html?Type=Flash',
													filebrowserImageUploadUrl : '../../public/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
													filebrowserFlashUploadUrl : '../../public/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
												});
											</script>
									</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label>Hình ảnh</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<input type="file" name="txtproduct_thumb" value="{{ old('txtproduct_thumb') }}" id="inputtxtproduct_thumb" class="form-control">
										<!-- <input type="file" name="file" id="file" data-uri="?mod=product&act=upload_single"> -->
									</div>
					      		</div>				      			
				      		</div>
							<div class="form-group">
				      			<label>Thumb</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Thumb 1 <input type="file" name="txtlist_thumb_1" value="{{ old('txtlist_thumb_1') }}" id="inputtxtlist_thumb_1" class="form-control">
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Thumb 2 <input type="file" name="txtlist_thumb_2" value="{{ old('txtlist_thumb_2') }}" id="inputtxtlist_thumb_2" class="form-control">
					      			</div>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Thumb 3 <input type="file" name="txtlist_thumb_3" value="{{ old('txtlist_thumb_3') }}" id="inputtxtlist_thumb_3" class="form-control">
					      			</div>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Thumb 4 <input type="file" name="txtlist_thumb_4" value="{{ old('txtlist_thumb_4') }}" id="inputtxtlist_thumb_4" class="form-control">
					      			</div>
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Thumb 5 <input type="file" name="txtlist_thumb_5" value="{{ old('txtlist_thumb_5') }}" id="inputtxtlist_thumb_5" class="form-control">
					      			</div>
					      		</div>				      			
				      		</div>
							<div class="form-group">
				      			<label>Sản phẩm nổi bật</label>
				      			<div class="row">					      			
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										<select name="featured_products" id="featured_products">	
											<option value="Nổi bật">Nổi bật</option>
											<option value="Bình thường">Bình thường</option>
										</select>
									</div>	
					      		</div>				      			
				      		</div>
							<div class="form-group">
				      			<label>Sản phẩm bán chạy</label>
				      			<div class="row">					      			
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										<select name="selling_products" id="selling_products">	
											<option value="Bán chạy">Bán chạy</option>
											<option value="Bình thường">Bình thường</option>
										</select>
									</div>	
					      		</div>				      			
				      		</div>
							<br/>
							<br/>	      				      		
							<div class="form-group">
								<input type="submit" name="submit" class="form-control btn btn-primary" value="Thêm mới sản phẩm" class="button" />
								<br/>
								<br/>
								<a href="{{asset('admin/product')}}" class="form-control btn btn-danger">Hủy bỏ</a>
							</div>	
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection