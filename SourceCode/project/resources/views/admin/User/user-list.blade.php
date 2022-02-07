@extends('admin.Layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Khách hàng</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-10">
								<div class="form-group">
									<label for="inputLoai" class="col-sm-3 control-label"><strong> Danh sách khách hàng </strong></label>
									<div class="col-md-6">
									
									</div>
									<div class="col-md-3">
										<input type="search" name="txttk" id="inputTxttk" class="form-control" value="" placeholder="Tìm khách hàng..." required="required" title="">
									</div>
								</div>	
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
										<th>ID</th>										
										<th>Tên khách hàng</th>
										<th>Tên tài khoản</th>
										<th>Điện thoại</th>
										<th>Email</th>										
										<th>Địa chỉ</th>
										<th>Giới tính</th>
										<th>Trạng thái</th>
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@foreach($userlist as $row)
										<tr>
											<td>{{$row->id}}</td>
											<td>{{$row->fullname}}</td>
											<td>{{$row->username}}</td>
											<td>{{$row->phone}}</td>
											<td>{{$row->email}}</td>
											<td>{{$row->address}}</td>
											<td>{{$row->gender}}</td>											
											<td>
												@if($row->is_active == 0)
													<span style="color:#d35400;">Đã bị khóa</span>
												@else
													<span style="color:#27ae60;">Đang hoạt động</span>
												@endif
											</td>
											<td>
											<a href="{{asset('admin/user/edit/'.$row->id	)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit">Sửa</span> </a>
											    <a href="{{asset('admin/user/delete/'.$row->id)}}"  onclick="return confirm('Bạn có chắc chắn muốn xóa mục này?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove">Xóa</span> </a>
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