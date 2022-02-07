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
				<h1 class="page-header"><small>Sửa thông tin khách hàng</small></h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
					@include('admin.Layouts.note_error')
						<form method="post">
							<div class="form-group" enctype="multipart/form-data">
								<label>ID</label>
								<input disabled type="text" name="id" class="form-control" placeholder="Tên khách hàng" value="{{$user->id}}">
							</div>
							<div class="form-group">
								<label>Tên khách hàng</label>
								<input required type="text" name="fullname" class="form-control" placeholder="Tên khách hàng" value="{{$user->fullname}}">
							</div>
							<div class="form-group">
								<label>Tên tài khoản</label>
								<input disabled type="text" name="username" class="form-control" placeholder="Tên khách hàng" value="{{$user->username}}">
							</div>
							<div class="form-group">
								<label>Điện thoại</label>
								<input disabled type="text" name="phone" class="form-control" placeholder="Tên khách hàng" value="{{$user->phone}}">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input disabled type="text" name="email" class="form-control" placeholder="Tên khách hàng" value="{{$user->email}}">
							</div>
							<div class="form-group">
								<label>Địa chỉ</label>
								<input disabled type="text" name="address" class="form-control" placeholder="Tên khách hàng" value="{{$user->address}}">
							</div>
							<div class="form-group">
				      			<label>Giới tính</label>
				      			<div class="row">					      			
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										<select name="gender" id="gender">	
											<option value="male" @if($user->gender == 'male') selected @endif>male</option>
											<option value="female" @if($user->gender == 'female') selected @endif>female</option>
										</select>
									</div>	
					      		</div>				      			
				      		</div>
							<div class="form-group">
				      			<label>Trạng thái</label>
				      			<div class="row">					      			
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
										<select name="is_active" id="is_active">	
											<option value="1" @if($user->is_active == '1') selected @endif>Đang hoạt động</option>
											<option value="0" @if($user->is_active == '0') selected @endif>Đã bị khóa</option>
										</select>
									</div>	
					      		</div>				      			
				      		</div>
							<div class="form-group">
								<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Sửa" value="Sửa">
							</div>
							<div class="form-group">
								<a href="{{asset('admin/user')}}" class="form-control btn btn-danger">Hủy bỏ</a>
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