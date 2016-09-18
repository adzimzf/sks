@extends('layouts.master')
@section('container')
<table id="contoh"  width="100%" cellspacing="0">
        <tr>
            <th>no</th>
                <th>Posi</th>
                <th>Offce</th>
                <th>Ag</th>
                <th>Sart date</th>
                <th>alary</th>
                <th>tes</th>
                <th>tes1</th>
        </tr>
        <thead>
            <tr>
                <th>no</th>
                <th>Posi</th>
                <th>Offce</th>
                <th>Ag</th>
                <th>Sart date</th>
                <th>alary</th>
                <th>tes</th>
                <th>tes1</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                
            </tr>
        </tfoot>
        <tbody>
            
        </tbody>
    </table>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#contoh').DataTable( {
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.header()).empty() )
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
                ajax:{
            url: "{{url('laporantemuanajax')}}",
            dataSrc:''
        },columns:[
            {data:'no'},
            {data:'no_ba'},
            {data:'tanggal_ditemukan'},
            {data:'penyelia'},
            {data:'manajer'},
            {data:'saksi'},
            {data:'operator'},
            {data:'teler'},
            ]
            } );
        } );
    </script>
@stop