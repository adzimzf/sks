<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- jQuery 2.1.4 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
	<style type="text/css">
		@media print{
			.print{}
		}
	</style>
</head>
<body id="body" onload="cetak()">
<!--membuat form untuk    dicetak menggunakan printer-->
tanggal di temukan :{{$tanggal_ditemukan}}<br>
penyelia :{{$penyelia}}
manager :{{$manager}}
operator :{{$operator}}
</body>
<script type="text/javascript">
	
	function cetak(){
		
		setTimeout(function(){
			window.print();
		},10);
		
	}
	function direct(){
		window.location ="tulisba";
	}
	
</script>
</html>