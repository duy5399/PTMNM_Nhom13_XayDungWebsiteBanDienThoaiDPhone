@extends('admin.Layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Đơn hàng</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small> Chi tiết đơn hàng: </small></h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
						@include('admin.Layouts.note_error')
						<form action="" method="post" enctype="multipart/form-data">
				      		{{ csrf_field() }}
							@foreach($bill as $bill)
				      		<div class="form-group">
				      			<label>Tên người đặt hàng</label>
				      			<input type="text" name="txtbill_name" id="inputTxtname" class="form-control" value="{{$bill->fullname}}" readonly >
				      		</div>
				      		<div class="form-group">
				      			<label>Email</label>
				      			<input type="text" name="txtprice_new" id="inputTxtintro" class="form-control" value="{{$bill->email}}" readonly>
				      		</div>
				      		<div class="form-group">
				      			<label>Số điện thoại</label>
				      			<input type="text" name="txtprice_old" id="inputtxtpacket" value="{{$bill->phone}}" class="form-control"  readonly>
				      		</div>
							  <div class="form-group">
				      			<label>Địa chỉ</label>
				      			<input type="text" name="txtprice_old" id="inputtxtpacket" value="{{$bill->address}}" class="form-control" readonly>
				      		</div>
							  <div class="form-group">
				      			<label>Giá trị đơn hàng</label>
				      			<input type="text" name="txtprice_old" id="inputtxtpacket" value="{{$bill->total}} VNĐ" class="form-control" readonly>
				      		</div>
				      		<div class="form-group">
				      			<label>Ghi chú</label>
				      			<div class="row">
								  	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-12">
								  		<textarea name="txtbill_desc" disabled>{{$bill->note}}</textarea>
									</div>
					      		</div>				      			
				      		
							<br/>
							<br/>	 
							@endforeach     				      		
				      	</form>			      	
					</div>
				</div>
				<div class="panel-body" style="font-size: 12px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>																		
										<th>Tên sản phẩm</th>
										<th>Hình ảnh</th>
										<th>Giá</th>
										<th>Số lượng</th>
										<th>Tạm tính</th>
									</tr>
								</thead>
								<tbody>
								<form method="post" action="">
									{{ csrf_field() }}
									@foreach($billdetail as $billdetail)
										<tr>
										<td>{{$billdetail->product_name}}</td>
										<td>
											<img height="100px" src="{{asset('storage/app/avatar/'.$billdetail->product_thumb)}}" class="thumbnail">
										</td>
										<td>{{number_format($billdetail->price_new,0,',','.')}} VNĐ</td>
										<td>{{$billdetail->qty}}</td>
										<td>{{number_format($billdetail->sub_total,0,',','.')}} VNĐ</td>
										</tr>	
									@endforeach
								</form>
								</tbody>
							</table>
						</div>
					</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection