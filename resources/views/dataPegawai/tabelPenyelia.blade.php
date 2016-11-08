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
		@foreach($penyelia as $penyelia)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$penyelia->npp}}</td>
			<td>{{$penyelia->nama}}</td>
			<td>
				<a href='#modalEdit' data-toggle="modal"  title="editPenyelia/{{$penyelia->id}}">
					<li class="fa fa-pencil"></li>
				</a>
				<a href="dataPegawai/hapusPenyelia/{{$penyelia->id}}" title="hapusPenyelia/{{$penyelia->id}}">
					<li class="fa fa-remove text-danger"></li>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>