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
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-10">
								<div class="form-group">
									<label for="inputLoai" class="col-sm-3 control-label"><strong> Danh sách sản phẩm </strong></label>
									<div class="col-md-6">
									
									</div>
									<div class="col-md-3">
										<input type="search" name="txttk" id="inputTxttk" class="form-control" value="" placeholder="Tìm sản phẩm..." required="required" title="">
									</div>
								</div>														
							</div>
							<div class="col-md-2">
								<!-- @-if ($-loai !='all') -->
									<a href="{!!url('admin/product/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm Mới Sản Phẩm</button></a>
								<!-- @en-dif -->
							</div>
						</div> 
					</div>
				</div>
				<div class="panel panel-default">	
					@include('admin.Layouts.note_error')
					<div class="panel-body" style="font-size: 12px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>Mã sản phẩm</th>										
										<th>Tên sản phẩm</th>
										<th>Danh mục</th>
										<th>Hình ảnh</th>
										<th>Giá cũ</th>
										<th>Giá mới</th>
										<th>Thumb 1</th>
										<th>Thumb 2</th>
										<th>Thumb 3</th>
										<th>Thumb 4</th>
										<th>Thumb 5</th>
										<th>Tồn kho</th>
										<th>Sản phẩm bán chạy</th>
										<th>Sản phẩm nổi bật</th>
										<th>Trạng thái</th>
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@foreach($productlist as $product)
										<tr>
											<td>{{$product->product_id}}</td>
											<td>{{$product->product_name}}</td>
											<td>{{$product->cate_name}}</td>
											<td>
												<img height="100px" src="{{asset('storage/app/avatar/'.$product->product_thumb)}}" class="thumbnail">
											</td>
											<td>{{number_format($product->price_old,0,',','.')}} VNĐ</td>
											<td>{{number_format($product->price_new,0,',','.')}} VNĐ</td>
											<td>
												<img height="100px" src="{{asset('storage/app/avatar/'.$product->list_thumb_1)}}" class="thumbnail">
											</td>
											<td>
												<img height="100px" src="{{asset('storage/app/avatar/'.$product->list_thumb_2)}}" class="thumbnail">
											</td>
											<td>
												<img height="100px" src="{{asset('storage/app/avatar/'.$product->list_thumb_3)}}" class="thumbnail">
											</td>
											<td>
												<img height="100px" src="{{asset('storage/app/avatar/'.$product->list_thumb_4)}}" class="thumbnail">
											</td>
											<td>
												<img height="100px" src="{{asset('storage/app/avatar/'.$product->list_thumb_5)}}" class="thumbnail">
											</td>
											<td>{{$product->qty_product}}</td>
											<td>{{$product->selling_products}}</td>
											<td>{{$product->featured_products}}</td>
											<td>
												@if($product->status == 0)
													<span style="color:#d35400;">Ngưng bán</span>
												@else
													<span style="color:#27ae60;">Đang bán</span>
												@endif
											</td>
											<td>
											    <a href="{{asset('admin/product/edit/'.$product->product_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit">Sửa</span> </a>
											    <a href="{{asset('admin/product/delete/'.$product->product_id)}}"  onclick="return confirm('Bạn có chắc chắn muốn xóa mục này?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
											</td>
										</tr>
									@endforeach	
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="panel panel-default">	
					<div class="panel-body" style="font-size: 20px; text-align: center;">
						{{$productlist->links()}}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection