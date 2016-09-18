@extends('layouts.master')
@section('container')
<div class="box-body">
<table id="laporan_temuan" class="table table-hover table-bordered">
	<thead>
		<td style="width:5%;">No</td>
		<td style="width:8%;">No BA</td>
		<td style="width:10%;">Tanggal ditemukan</td>
		<td style="width:10%;">Penyelia</td>
		<td style="width:10%;">Manager</td>
		<td style="width:10%;">Operator</td>
		<td style="width:10%;">Saksi</td>
		<td style="width:5%;">Cabang</td>
		<td style="width:10%;">Teler</td>
		<td style="width:5%;">Jam</td>
		<td style="width:13%;">Tanggal Ban-banan</td>
		<td style="width:15%;">Temuan</td>
		<td style="width:15%;">Denom</td>
		<td style="width:15%;">Jumlah</td>
		<td style="width:10%;">No Seri</td>
		<td style="width:10%;">Total</td>
        <td style="width:13%;">AKSI</td>
	</thead>
    <tfoot>
        <td style="width:5%;">No</td>
        <td style="width:8%;">No BA</td>
        <td style="width:10%;">Tanggal ditemukan</td>
        <td style="width:10%;">Penyelia</td>
        <td style="width:10%;">Manager</td>
        <td style="width:10%;">Operator</td>
        <td style="width:10%;">Saksi</td>
        <td style="width:5%;">Cabang</td>
        <td style="width:10%;">Teler</td>
        <td style="width:5%;">Jam</td>
        <td style="width:13%;">Tanggal Ban-banan</td>
        <td style="width:15%;">Temuan</td>
        <td style="width:15%;">Denom</td>
        <td style="width:15%;">Jumlah</td>
        <td style="width:10%;">No Seri</td>
        <td style="width:10%;">Total</td>
        <td style="width:13%;">AKSI</td>
    </tfoot>
	<tbody>
		
	</tbody>
    
</table>	
</div>

<script type="text/javascript">
	$(function () {
    $("#laporan_temuan").DataTable({
        "aLengthMenu":[[5,15,30,-1],[5,15,30,"All"]],
        "pageLength":5,
        "ordered":false,
        scrollX:true,
    	ajax:{
    		url: "{{url('laporantemuanajax')}}",
    		dataSrc:''
    	},columns:[
    		{data:'no'},
    		{data:'no_ba'},
    		{data:'tanggal_ditemukan'},
    		{data:'penyelia'},
    		{data:'manajer'},
    		{data:'operator'},
    		{data:'saksi'},
    		{data:'cabang'},
    		{data:'teler'},
    		{data:'jam'},
    		{data:'tanggal_banbanan'},
    		{data:'temuan'},
    		{data:'denom'},
    		{data:'jumlah'},
    		{data:'no_seri'},
    		{data:'total'},
            {data:'aksi'},
    	],
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },
        language:{
            "search":"Goleti Data",
            "zeroRecords":"Ora ana data sing pada karo sing koen maksud",
            "lengthMenu":"Munculna _MENU_ data",
            "info":"Munculna sing _START_ kosi _END_ sing _TOTAL_ data",
            "infoFiltered":"(disaring sing _TOTAL_ kabehe data)",
            "infoEmpty":"Munculna sing 0 kosi 0 sing 0 data"
        }
    });
  });
</script>
@endsection