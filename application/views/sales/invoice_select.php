<!-- PILIH FAKTUR  --> 
<div id='dlgFaktur'class="easyui-dialog" style="width:600px;height:380px;padding:10px 20px"
     closed="true" buttons="#button-select-cust">
     <div id='divFaktur'> 
		<table id="dgFaktur" class="easyui-datagrid"  
			data-options="
				toolbar: '#tbFaktur',
				singleSelect: true
			">
			<thead>
				<tr>
					<th data-options="field:'invoice_number',width:80">Nomor Faktur</th>
					<th data-options="field:'invoice_date',width:80">Tanggal</th>
					<th data-options="field:'payment_terms',width:80">Termin</th>
					<th data-options="field:'salesman',width:80">Salesman</th>
					<th data-options="field:'amount',width:80">Jumlah</th>
					
				</tr>
			</thead>
		</table>
    </div>   
</div>
<div id="tbFaktur" style="height:auto">
	Enter Text: <input  id="search_faktur" style='width:180' name="search_faktur">
	<a href="#" class="easyui-linkbutton" iconCls="icon-search" plain="true" onclick="select_faktur()"></a>        
	<a href="#" class="easyui-linkbutton" iconCls="icon-ok" plain="true" onclick="selected_faktur()">Select</a>
</div>
<SCRIPT language="javascript">
	function pilih_faktur(){
			$('#dlgFaktur').dialog('open').dialog('setTitle','Cari faktur penjualan');
			search=$('#sold_to_customer').val();
			$('#dgFaktur').datagrid({url:'<?=base_url()?>index.php/invoice/customer/'+search});
			$('#dgFaktur').datagrid('reload');
	};	
	function selected_faktur(){
		var row = $('#dgFaktur').datagrid('getSelected');
		if (row){
			$('#your_order__').val(row.invoice_number);
			$('#dlgFaktur').dialog('close');
		} else {
			alert("Pilih salah satu nomor faktur penjualan !");
		}
	}	
</SCRIPT>
<!-- END PILIH PELANGGAN -->
