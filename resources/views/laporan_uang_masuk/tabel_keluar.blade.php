<table class="table table-striped" id="uangKeluar">
	<caption style="text-align:center;">Uang Masuk</caption>
	<thead>
		<tr>
			<th>Jam</th>
			<th>Denom</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
<script type="text/javascript">
	$(function () {

    $("#uangKeluar").DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
    	ajax:{
    		url: "{{url('isiTabelUangKeluarAjax')}}",
    		dataSrc:''
    	},columns:[
    		{data:'jam'},
    		{data:'denom'},
    		{data:'jumlah'},
        {data:'aksi'}
    	]
    });
  });
  </script>