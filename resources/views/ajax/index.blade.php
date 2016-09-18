<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD ajax Aplication</title>
	<link rel="stylesheet" href="{{asset('component/bootstrap/dist/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
	<script src="{{asset('bootstrap/js/jquery.js')}}"></script>
  	<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</head>
<body>
 <div class="container">
 	<div class="panel panel-primary">
 		<div class="panel-heading">
 			Laravel CRUD Aplication using Ajax
 			<button id="btn_add" name="btn_add" class="btn btn-default pull-right">Add New Product</button>
 		</div>
 		<div class="panel-body">
 			<table class="table">
 				<thead>
 					<tr>
 						<th>ID</th>
 						<th>Name</th>
 						<th>Details</th>
 						<th>Action</th>
 					</tr>
 				</thead>
 				<tbody id="products-list" name="products-list">
 					@foreach($products as $product)
 					<tr id="product{{$product->id}}">
 						<td>{{$product->id}}</td>
 						<td>{{$product->name}}</td>
 						<td>{{$product->details}}</td>
 						<td>
 							<button class="btn btn-warning btn-detail open_modal" value="{{$product->id}}">Edit</button>
 							<button class="btn btn-danger btn-delete delete-product" value="{{$product->id}}">Delete</button>
 						</td>
 					</tr>
 					@endforeach
 				</tbody>
 			</table>
 		</div>
 	</div>
 	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 		<div class="modal-dialog">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
 					<h4 class="modal-title" id="myModalLabel">
 						Product
 					</h4>
 				</div>
 				<div class="modal-body">
 					<form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
 						<div class="form-group error">
 							<label for="inputName" class="col-sm-3 control-label">Name</label>
 							<div class="col-sm-9">
 								<input type="text" class="form-control has-error" id="name" name="name" value="">
 							</div>
 						</div>
 						<div class="form-group">
 							<label for="inputDetail" class="col-sm-3 control-label">Details</label>
 							<div class="col-sm-9">
 								<input type="text" class="form-control" name="details" id="details" placeholder="Details" value="">
 							</div>
 						</div>
 					</form>
 				</div>
 				<div class="modal-footer">
 					<button type="button" class="btn btn-primary" id="btn-save" value="add">Save Changes</button>
 					<input type="hidden" id="product_id"  name="product_id" value="0">
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <FORM>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 	<SELECT>
 		<option>aaa</option>
 		<option>bbb</option>
 	</SELECT>
 </FORM>
 <meta name="_token" content="{!!csrf_token()!!}"/>
 <script src="{{asset('js/ajaxscript.js')}}"></script>
</body>
</html>