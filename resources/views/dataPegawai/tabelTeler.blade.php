<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>NPP</th>
			<th>Cabang</th>
			<th>Nama</th>
		</tr>
	</thead>
	<tbody>
		@foreach($teler as $teler)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$teler->npp}}</td>
			<td>{{$teler->cabang}}</td>
			<td>{{$teler->nama}}</td>
		</tr>
		@endforeach
	</tbody>
</table>