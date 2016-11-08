<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>NPP</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach($operator as $operator)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$operator->npp}}</td>
			<td>{{$operator->nama}}</td>
			<td>
				<a href='#modalEdit' data-toggle="modal"  title="editOperator/{{$operator->id}}">
					<li class="fa fa-pencil"></li>
				</a>
				<a href="dataPegawai/hapusOperator/{{$operator->id}}" title="hapusOperator/{{$operator->id}}">
					<li class="fa fa-remove text-danger"></li>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>