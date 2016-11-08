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
		@foreach($manajer as $manajer)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$manajer->npp}}</td>
			<td>{{$manajer->nama}}</td>
			<td>
				<a href='#modalEdit' data-toggle="modal"  title="editManager/{{$manajer->id}}">
					<li class="fa fa-pencil"></li>
				</a>
				<a href="dataPegawai/hapusManager/{{$manajer->id}}" title="hapusManager/{{$manajer->id}}">
					<li class="fa fa-remove text-danger"></li>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>