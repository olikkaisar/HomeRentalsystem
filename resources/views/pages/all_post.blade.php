@extends('admin_layout')
@section('admin_content')
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>


					<p class="alert-success">

					<?php
$messege = Session::get('messege');
if ($messege) {
	echo $messege;
	Session::put('messege', null);
}
?>

                    </p>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>


					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Post ID</th>
								  <th>Post Name</th>
								  <th>Phone</th>

								  <th>Post Description</th>

								  <th>image</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>

						@foreach($all_post_info as $v_post)

						  <tbody>
							<tr>
								<td>{{$v_post -> id}}</td>
								<td class="center">{{$v_post -> name}}</td>
								<td class="center">{{$v_post -> phone}}</td>
								<td class="center">
								<div class="form-group">
								    <!-- <label for="description"></label> -->
								    <textarea class="form-control" name="description" id="description" rows="3" placeholder="">{{$v_post -> description}}
								    </textarea>
								</div>
								</td>
								<td class="center"><img class="card-img-top" src="{{url($v_post->image)}}" alt="Card image cap"></td>
								<td class="center">
							        @if($v_post -> publication_status==1)
									<span class="label label-success"><!-- {{$v_post -> publication_status}} -->Active</span>
									@else

									<span class="label label-danger"><!-- {{$v_post -> publication_status}} -->Inactive</span>

									@endif
								</td>
								<td class="center">

									@if($v_post -> publication_status==1)

									<a class="btn btn-danger" href="{{url('/inactive_post/'.$v_post->id)}}">
										<i class="halflings-icon white thumbs-down"></i>
									</a>
									@else
									<a class="btn btn-success" href="{{url('/active_post/'.$v_post->id)}}">
										<i class="halflings-icon white thumbs-up"></i>
									</a>
									@endif

									<a class="btn btn-danger" href="{{url('/delete_post/'.$v_post->id)}}">
										<i class="halflings-icon white trash"></i>
									</a>
								</td>
							</tr>

						  </tbody>
					    @endforeach

					  </table>
					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection