@extends('admin.Layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tin tức</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
            <div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-10">
								<div class="form-group">
									<label for="inputLoai" class="col-sm-3 control-label"><strong> Danh sách tin tức </strong></label>
									<div class="col-md-6">
									
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
							<h2>Chức năng đang được phát triển</h2>
						</div>
						
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection