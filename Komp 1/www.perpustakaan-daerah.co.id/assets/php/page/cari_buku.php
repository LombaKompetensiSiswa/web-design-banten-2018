<?php
?>

<h4 align="center">CARI BUKU</h4>

<div align="center">
	<input id="q_buku" class="input-text" placeholder="Cari Buku..." style="width: 80%; display: inline;"><button onclick="document.location.href='?isi=cari_buku&q_buku='+document.getElementById('q_buku').value;" class="btn btn-default no-br">CARI</button>
</div>

<div id="hasil">
	<?php
		if (isset($_GET['q_buku'])) {
			include("cari_buku_hasil.php");
		}
	?>
</div>













<script type="text/javascript">
	function caribuku(trg,obj){
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}
		else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange = function(){
				document.getElementById(trg).innerHTML = 'Sedang Mencari...';				
			if (this.readyState == 4) {
				if (this.status == 200) {
					document.getElementById(trg).innerHTML = this.responseText;
				}
				else{
					document.getElementById(trg).innerHTML = 'Terjadi Kesalahan! Kode: '+this.status;				
				}
			}
			else if (this.readyState !== 4) {
				document.getElementById(trg).innerHTML = 'Sedang Mencari...';				
			}
		}

		xmlhttp.open("GET","../assets/php/page/cari_buku_hasil.php?q="+obj.value,true)
		xmlhttp.send();
	}
</script>