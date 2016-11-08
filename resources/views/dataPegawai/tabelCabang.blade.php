<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach($cabang as $cabang)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$cabang->nama}}</td>
			<td id="td-cabang">
				<a id="a-update-cabang" href='#' title="dataPegawai/editCabang/{{$cabang->id}}/update">
					<li class="fa fa-pencil"></li>
				</a>
				<a href="dataPegawai/hapusCabang/{{$cabang->id}}" title="hapusCabang/{{$cabang->id}}">
					<li class="fa fa-remove text-danger"></li>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>