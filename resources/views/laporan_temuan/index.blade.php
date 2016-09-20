@extends('layouts.master')
@section('container')
<!--box default-->
<div class="box box-default">
<div class="box-body">
<table id="laporan_temuan" class="table table-hover table-bordered">
	<thead>
		<td style="">No</td>
		<td style="">No BA</td>
		<td style=";">Tanggal ditemukan</td>
		<td style=";">Penyelia</td>
		<td style=";">Manager</td>
		<td style=";">Operator</td>
		<td style=";">Saksi</td>
		<td style="">Cabang</td>
		<td style=";">Teler</td>
		<td style="">Jam</td>
		<td style=";">Tanggal Ban-banan</td>
		<td style=";">Temuan</td>
		<td style=";">Denom</td>
		<td style=";">Jumlah</td>
		<td style=";">No Seri</td>
		<td style=";">Total</td>
        <td style=";">AKSI</td>
	</thead>
    <tfoot>
        <td style="">No</td>
        <td style="">No BA</td>
        <td style=";">Tanggal ditemukan</td>
        <td style=";">Penyelia</td>
        <td style=";">Manager</td>
        <td style=";">Operator</td>
        <td style=";">Saksi</td>
        <td style="">Cabang</td>
        <td style=";">Teler</td>
        <td style="">Jam</td>
        <td style=";">Tanggal Ban-banan</td>
        <td style=";">Temuan</td>
        <td style=";">Denom</td>
        <td style=";">Jumlah</td>
        <td style=";">No Seri</td>
        <td style=";">Total</td>
        <td >AKSI</td>
    </tfoot>
	<tbody>
		
	</tbody>
    
</table>	
</div>
</div>
<script type="text/javascript">
	$(function () {

    $("#laporan_temuan").DataTable({
        //"aLengthMenu":[[5,15,30,-1],[5,15,30,"All"]],
        "pageLength":5,
        "columnDefs": [
            { "width": "4%", "targets": 0 },
            { "width": "10%", "targets": 1 },
            { "width": "10.5%", "targets": 2 },
            { "width": "11.8%", "targets": 3 },
            { "width": "12%", "targets": 4 },
            { "width": "13.8%", "targets": 5 },
            { "width": "13.8%", "targets": 6 },
            { "width": "15%", "targets": 8 },
            { "width": "20%", "targets": 10 },
            { "width": "25%", "targets": 14 },
            { "width": "15%", "targets": 16 },
          ],
        "lengthChange": false,
        //button-button untuk export ke cetak, excel, dan pdf
        dom :'Bfrtip',
        buttons:[
                {
                    extend: 'print',
                    className: 'btn btn-default'
                },
                {
                    extend:'excelHtml5',
                    className: 'btn btn-success',
                    text: 'EXCEL'
                }
            
        ],
        "ordering":true,
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
    /**$("#print").click(function(){

  var divToPrint=document.getElementsById("tbody");

  var newWin=window.open();

  newWin.document.open();

  newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},10);
    });**/
  });
</script>
@endsection