<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
<fieldset>
	    <legend>Sumber Anggaran</legend>
    	<table id="filter-uker-src" cellspacing="5px" cellpadding="5px" style="border-collapse:collapse;">
    		<tbody>
			    				<tr class="region">
					<td align="left" style="padding-left: 10px;">Region</td>
					<td align="center">:</td>
					<td align="left"><select name="region" id="region" class="region" style="width: 250px;">
<option value="A">Banda Aceh</option>
<option value="B">Medan</option>
<option value="C">Padang</option>
<option value="D">Palembang</option>
<option value="E">DKI</option>
<option value="F">Bandung</option>
<option value="G">Semarang</option>
<option value="H">Yogyakarta</option>
<option value="I">DKI2</option>
<option value="J">KANWIL BANDAR LAMPUNG</option>
<option value="K">Surabaya</option>
<option value="L">Banjarmasin</option>
<option value="M">Denpasar</option>
<option value="N">Manado</option>
<option value="O">KANWIL JAYAPURA</option>
<option value="P">Makassar</option>
<option value="Q">KANWIL JAKARTA 3</option>
<option value="R">KANWIL MALANG</option>
<option value="S">K C K</option>
<option value="V">KAS KANPUS</option>
<option value="X">KANWIL PEKANBARU</option>
</select></td>
				</tr>
							<tr class="mainuker">
	<td align="left" style="padding-left: 10px;">Main Uker</td>
	<td align="center">:</td>
	<td align="left"><select name="mainuker" id="mainuker" class="mainuker" style="width: 250px;">
<option value="37">Banda Aceh</option>
<option value="42">Langsa</option>
<option value="43">Lhokseumawe</option>
<option value="87">Sigli</option>
<option value="145">Takengon</option>
<option value="178">Meulaboh</option>
<option value="234">Bireun</option>
<option value="255">KANWIL Banda Aceh</option>
<option value="263">Kotacane</option>
<option value="264">Tapaktuan</option>
<option value="265">Blangpidie</option>
<option value="657">KC KUALA SIMPANG</option>
</select></td>
</tr><tr class="uker">
	<td align="left" style="padding-left: 10px;">Unit Kerja</td>
	<td align="center">:</td>
	<td align="left"><select name="uker" id="uker" class="uker" style="width: 250px;">
<option value="37">Banda Aceh</option>
<option value="631">KCP SABANG</option>
<option value="1052">KCP LAMPRIET</option>
<option value="1311">KK GEDUNG KEUANGAN</option>
<option value="1312">KK UNSYIAH</option>
<option value="1539">KK POLDA BANDA ACEH</option>
<option value="1597">KK RUMKIT KESDAM</option>
<option value="1678">KK HERMES</option>
<option value="2056">KCP PEUNAYONG</option>
<option value="2057">KCP SIMPANG SURABAYA</option>
<option value="2268">KCP LAMBARO</option>
<option value="3339">UNIT DARUSSALAM</option>
<option value="3340">UNIT SEUTUI</option>
<option value="3518">UNIT JANTHO BANDA ACEH</option>
<option value="3647">UNIT SABANG BANDA ACEH</option>
<option value="3797">UNIT JAMBO TAPE BANDA ACEH</option>
<option value="3904">UNIT K.H.A DAHLAN BANDA ACEH</option>
<option value="3905">UNIT KEUTAPANG BANDA ACEH</option>
<option value="3906">UNIT LAMBARO BANDA ACEH</option>
<option value="3907">UNIT MERDUATI BANDA ACEH</option>
<option value="3908">UNIT LAMTEUMEN BANDA ACEH</option>
<option value="3909">UNIT LHOKNGA BANDA ACEH</option>
<option value="3910">UNIT NEUSU JAYA BANDA ACEH</option>
<option value="3911">UNIT SEULIMUM BANDA ACEH</option>
<option value="3912">UNIT SIMPANG TUJUH BANDA ACEH</option>
<option value="3913">UNIT SUKAMAKMUR BANDA ACEH</option>
<option value="3914">UNIT T NYAK ARIEF BANDA ACEH</option>
<option value="3915">UNIT TGK. PANGLIMA POLEM BANDA</option>
<option value="3916">UNIT ULEE LHEUE BANDA ACEH</option>
<option value="3917">UNIT PEUNAYONG BANDA ACEH</option>
<option value="3918">UNIT T CHIK DITIRO BANDA ACEH</option>
<option value="7098">UNIT LAMNO BANDA ACEH</option>
<option value="7159">UNIT SAREE BANDA ACEH</option>
<option value="7918">UNIT INDRAPURI BANDA ACEH</option>
</select></td>
</tr></tbody>
			<tfoot>
				<tr class="pos_anggaran">
					<td align="left" style="padding-left: 10px;">Pos Anggaran</td>
					<td align="center">:</td>
					<td align="left"><select name="kode_pos_anggaran" id="kode_pos_anggaran" class="kode_pos_anggaran" style="width: 250px;">
<option value="F01">BRL Biaya Eksploitasi</option>
<option value="F02">BRL Biaya Non Hadiah</option>
<option value="F03">BRL Biaya Operasional Bisnis</option>
</select></td>
				</tr>
				
			<tr class="nominal_pos_anggaran">
	<td align="left" style="padding-left: 10px;">Nominal</td>
	<td align="center">:</td>
	<td align="right">Rp <input id="nominal_pos_anggaran" class="nominal_pos_anggaran" value="1.000.000" style="width: 120px; text-align: right; border: none;" readonly=""></td>
</tr></tfoot>
		</table>
	</fieldset>

<table id="initable">
	<thead>
		<th>Kode Uker Sumber</th>
		<th>Pos Anggaran Sumber</th>
		<th>Kode Uker Tujuan</th>
		<th>Pos Anggaran Tujuan</th>
		<th>Nominal</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<tr data-code-pos-anggaran="F01" data-nominal-pos-anggaran="1700000">
			<td>F01</td>
			<td></td>
			<td></td>
			<td></td>
			<td>
				<input type="text" class="sw-nml val-F01" name="content[0][nominal]" value="1.000" readonly="" style="width: 100px; text-align: right;">
			</td>
			<td></td>
		</tr>
		<tr data-code-pos-anggaran="F01" data-nominal-pos-anggaran="1700000">
			<td>F01</td>
			<td></td>
			<td></td>
			<td></td>
			<td>
				<input type="text" class="sw-nml val-F01" name="content[0][nominal]" value="2.000" readonly="" style="width: 100px; text-align: right;">
			</td>
			<td></td>
		</tr>
		<tr data-code-pos-anggaran="F02" data-nominal-pos-anggaran="1000000">
			<td>F02</td>
			<td></td>
			<td></td>
			<td></td>
			<td>
				<input type="text" class="sw-nml val-F02" name="content[0][nominal]" value="3.000" readonly="" style="width: 100px; text-align: right;">
			</td>
			<td></td>
		</tr>
		<tr data-code-pos-anggaran="F02" data-nominal-pos-anggaran="1000000">
			<td>F02</td>
			<td></td>
			<td></td>
			<td></td>
			<td>
				<input type="text" class="sw-nml val-F02" name="content[0][nominal]" value="8.000" readonly="" style="width: 100px; text-align: right;">
			</td>
			<td></td>
		</tr>
		<tr data-code-pos-anggaran="F01" data-nominal-pos-anggaran="1700000">
			<td>F01</td>
			<td></td>
			<td></td>
			<td></td>
			<td>
				<input type="text" class="sw-nml val-F01" name="content[0][nominal]" value="9.000" readonly="" style="width: 100px; text-align: right;">
			</td>
			<td></td>
		</tr>

	</tbody>
</table>
<div class="fo1"></div>
<div class="fo2"></div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		var nilai = checksum();
		//alert(nilai);

		function checksum() {
			var cingpang = 0;
			var sum = 0;
			var code_pos;
			$("#initable tbody > tr").each(function(){
				var itsme = $(this);
				code_pos = itsme.data("code-pos-anggaran");
				var nominal_pos = itsme.data("nominal-pos-anggaran");
				var t_nom = itsme.find("input.sw-nml").val().replace(".","");
				if(code_pos == $("#kode_pos_anggaran").val() ){
					cingpang += parseInt(t_nom);
					
				}
				var d = itsme.find("input.val-"+code_pos).val().replace(".","");
				sum += +$(this).find("input.sw-nml").val().replace(".","");
			});
			$("#initable").next().html( "<div class='total-"+code_pos+"'>total:"+parseInt(cingpang)+"</div>" );
			return sum;
		}
	});

</script>
</html>
