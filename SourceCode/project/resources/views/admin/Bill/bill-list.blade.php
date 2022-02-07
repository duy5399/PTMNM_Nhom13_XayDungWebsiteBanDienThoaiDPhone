@extends('admin.Layouts.master')
@section('content')

<script type="text/javascript">
    function updateBillStatus(bill_id){
        //console.log(bill_id);
		$.get(
            "{{asset('admin/bill/update')}}",    //url: đường dẫn ajax gửi request
            {bill_id:bill_id},        //đối tượng
            function(){
                location.reload();
            }        //phương thức
        );
    }
</script>
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
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-10">
								<div class="form-group">
									<label for="inputLoai" class="col-sm-3 control-label"><strong> Danh sách đơn hàng </strong></label>
									<div class="col-md-6">
									
									</div>
									<div class="col-md-3">
										<input type="search" name="txttk" id="inputTxttk" class="form-control" value="" placeholder="Tìm sản phẩm..." required="required" title="">
									</div>
								</div>														
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
										<th>Mã đơn hàng</th>										
										<th>Tên khách hàng</th>
										<th>Tên tài khoản</th>
										<th>Email</th>
										<th>Điện thoại</th>
										<th>Địa chỉ</th>
										<th>Giá trị đơn hàng</th>
										<th>Ghi chú</th>
										<th>Trạng thái</th>
										<th>Chi tiết</th>
									</tr>
								</thead>
								<tbody>
								<form method="post" action="">
									{{ csrf_field() }}
									@foreach($billlist as $bill)
										<tr>
											
											<td>{{$bill->bill_id}}</td>
											
											<td>{{$bill->fullname}}</td>
											<td>{{$bill->username}}</td>
											<td>{{$bill->email}}</td>
											<td>{{$bill->phone}}</td>
											<td>{{$bill->address}}</td>
											<td>{{$bill->total}}</td>
											<td>{{$bill->note}}</td>
											<td>
												@if($bill->status == 0)
													<a name="bill_id" onclick="updateBillStatus('{{$bill->bill_id}}')" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"> Chưa xác nhận</span> </a>
												@else
													<span onclick="return confirm('Đơn hàng đã được xữ lý')" style="color:#27ae60;" class="btn btn-success glyphicon glyphicon-ok"> Đã xử lý</span>
												@endif
											</td>
											<td>
											<a href="{{asset('admin/bill/detail/'.$bill->bill_id)}}" class="btn btn-info"><span class="glyphicon glyphicon-list"> Chi tiết</span> </a>
											</td>
										</tr>
									@endforeach	
									
								</form>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="panel panel-default">	
					<div class="panel-body" style="font-size: 20px; text-align: center;">
						{{$billlist->links()}}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection