@extends('layouts.simple.master')
@section('title', 'Membership Plans')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatable-extension.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>F.A/Q</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">F.A/Q</li>
<li class="breadcrumb-item active">F.A/Q list</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				@if(session()->has('message'))
				<div class="alert alert-success">
					{{ session()->get('message') }}
				</div>
				@endif
				<!-- <div class="card-header">
					<h5>Configuration Option</h5>
					<span>The Responsive extension for DataTables can be applied to a DataTable in one of two ways; with a specific class name on the table, or using the DataTables initialisation options. This method shows the latter, with the responsive option being set to the boolean value true.</span>
				</div> -->
				<div class="card-body">
					<div class="dt-ext table-responsive">
						<table class="display" id="responsive">
							<thead>
								<tr>
									<th>Question</th>
									<th>Answer</th>
									{{-- <th>Category</th> --}}
									{{-- <th>Content</th> --}}
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($faq as $row)
								<tr>
									<td>{{$row->question}}</td>
									<td>{{$row->answer}}</td>
									{{-- <td>{{$row->category}}</td> --}}
									{{-- <td>{{ $row->content }}</td> --}}
									<?php
									// echo '<td>'.$row->content.'</td>';
									?>
									<td
										class="jsgrid-cell jsgrid-control-field jsgrid-align-center"
										style="width: 50px;">
										<a href="{{ route('faqEdit', ['id' => $row->id]) }}" style="color:Black;"><i data-feather="edit-2"></i></a>
										<a href="{{ route('faqDelete', ['id' => $row->id]) }}" style="color:red;"><i data-feather="trash-2"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatable-extension/custom.js')}}"></script>


@endsection