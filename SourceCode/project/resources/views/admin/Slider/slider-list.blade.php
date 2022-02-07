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
            <div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-10">
								<div class="form-group">
									<label for="inputLoai" class="col-sm-3 control-label"><strong> Danh sách slider </strong></label>
									<div class="col-md-6">
									
									</div>
									<div class="col-md-3">
										<input type="search" name="txttk" id="inputTxttk" class="form-control" value="" placeholder="Tìm slider..." required="required" title="">
									</div>
								</div>														
							</div>
							<div class="col-md-2">
								<!-- @-if ($-loai !='all') -->
									<a href="{!!url('admin/slider/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm Mới Slider</button></a>
								<!-- @en-dif -->
							</div>
						</div> 
					</div>
				</div>
					<div class="panel panel-default">						
					@include('admin.Layouts.note_error')
					<div class="panel-body" style="font-size: 13px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>STT</th>										
										<th>Tên slider</th>
										<th>Hình ảnh</th>
										<th>Người tạo</th>
										<th>Trạng thái</th>
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@foreach($sliderlist as $row)
										<tr>
											<td>{{$row->slider_id}}</td>
											<td>{{$row->slider_name}}</td>
											<td>
                                            <img height="150px" src="{{asset('storage/app/slider/'.$row->slider_img)}}" class="slider_img">
                                            </td>
											<td>{{$row->creator}}</td>								
											<td>
												@if($row->status == 0)
													<span style="color:#d35400;">Vô hiệu hóa</span>
												@else
													<span style="color:#27ae60;">Đang kích hoạt</span>
												@endif
											</td>
											<td>
											<a href="{{asset('admin/slider/edit/'.$row->slider_id	)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit">Sửa</span> </a>
											    <a href="{{asset('admin/slider/delete/'.$row->slider_id)}}"  onclick="return confirm('Bạn có chắc chắn muốn xóa mục này?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
											</td>
										</tr>
									@endforeach								
								</tbody>
							</table>
						</div>
						
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection