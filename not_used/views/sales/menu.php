<div style="margin:10px 0;padding:10px;"></div>
	<ul class="easyui-tree">
		<li>
			<span>Sales Modules</span>
			<ul>
				<li>
					<span>Operation</span>
					<ul><li   data-options="state:'closed'"><span>Sales Order</span>
						<ul>
							<li><?=anchor(base_url().'index.php/sales_order/add#new_so','Buat Sales Order','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/sales_order','Daftar Sales Order','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/sales_order/print_more#print_more_so','Cetak Banyak SO','class="info_link"  ');?></li>
						</ul>
						</li>
					</ul>
					<ul><li   data-options="state:'closed'"><span>Delivery Order</span><ul>
							<li><?=anchor(base_url().'index.php/delivery_order/add#new_do','Buat DO Baru','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/delivery_order','Daftar Delivery Order (DO)','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/delivery_order/add_from_so#add_from_so','Generate Dari SO','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/delivery_order/print_more#print_more_do','Cetak Banyak DO','class="info_link"  ');?></li>
						</ul></li>
					</ul>
					<ul><li><span>Sales Invoice</span><ul>
							<li><?=anchor(base_url().'index.php/invoice/add#new_invoice','Buat Sales Invoice Baru','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/invoice','Daftar Sales Invoice','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/invoice/add_from_so#add_invoice_from_so','Generate From Sales Order','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/invoice/add_from_do#add_invoice_from_do','Generate From Delivery Order','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/invoice/print_more#print_more_invoice','Cetak Banyak Sales Invoice','class="info_link"  ');?></li>
						</ul></li>
					</ul>
					<ul><li><span>Payments</span><ul>
							<li><?=anchor(base_url().'index.php/payment/add#new_invoice_payment','Buat Pembayaran Invoice Baru','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/payment','Daftar Pembayaran Invoice','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/payment/approval','Proses Approve Payment','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/payment/print_more#print_more_payment','Cetak Banyak Payment','class="info_link"  ');?></li>
						</ul></li>
					</ul>
					<ul><li   data-options="state:'closed'"><span>Sales Return Invoice</span><ul>
							<li><?=anchor(base_url().'index.php/sales_retur/add#new_invoice_retur','Buat Sales Retur Baru','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/sales_retur','Daftar Sales Return','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/sales_retur/approval','Proses Approve Retur','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/sales_retur/print_more#print_more_retur','Cetak Banyak Retur','class="info_link"  ');?></li>
						</ul></li>
					</ul>
					<ul><li   data-options="state:'closed'"><span>Promosi</span><ul>
							<li><?=anchor(base_url().'index.php/so/promosi','Promosi Discount Penjualan','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/so/promosi_range','Promosi Discount Quantity','class="info_link"  ');?></li>
							<li><?=anchor(base_url().'index.php/so/promosi_extra','Promosi Quantity Extra','class="info_link"  ');?></li>
<!--							<li><?=anchor(base_url().'index.php/so/promosi_one_price','Promosi One Price','class="info_link"  ');?></li>
-->
							<li><?=anchor(base_url().'index.php/so/promosi_point','Promosi Point Reward','class="info_link"  ');?></li>
						</ul></li>
					</ul>
				</li>
				<li><?=anchor(base_url().'index.php/sales_crmemo','Kredit Memo','class="info_link"');?></li>
				<li><?=anchor(base_url().'index.php/sales_dbmemo','Debit Memo','class="info_link"');?></li>
			</ul>
			</li>
				<li   data-options="state:'closed'">
					<span>Report</span>
					<ul>
			<li><?=anchor('sales/rpt/so_otstand','Open Sales Order','class="info_link"' )?></li>
			<li><?=anchor('sales/rpt/do_list','Daftar Pengiriman','class="info_link"' )?></li>
			<li><?=anchor('sales/rpt/faktur_sum','Penjualan Summary','class="info_link"' )?></li>
			<li><?=anchor('sales/rpt/faktur_slsman','Penjualan Per Salesman','class="info_link" ')?></li>
			<li><?=anchor('sales/rpt/faktur_cust','Penjualan per Pelanggan','class="info_link" ')?></li>
			<li><?=anchor('sales/rpt/sls_item','Penjualan per Item','class="info_link" ')?></li>
			<li><?=anchor('sales/rpt/sls_cat','Penjualan per Item Kategori','class="info_link" ')?></li>
			<li><?=anchor('sales/rpt/ar_sum','Kartu Piutang Summary','class="info_link" ')?></li>
			<li><?=anchor('sales/rpt/ar_dtl','Kartu Piutang Detail','class="info_link"' )?></li>
			<li><?=anchor('sales/rpt/age_sum','Umur Piutang Summary','class="info_link"' )?></li>
			<li><?=anchor('sales/rpt/age_dtl','Umur Piutang Detail','class="info_link"' )?></li>
			<li><?=anchor('sales/rpt/retur_list','Daftar Retur Penjualan','class="info_link"' )?></li>
			<li><?=anchor('sales/rpt/memo_list','Daftar Kredit/Debit Memo','class="info_link"' )?></li>
			<li><?=anchor('sales/rpt/pay_list','Daftar Pembayaran','class="info_link"' )?></li>
			<li><?=anchor('sales/rpt/pay_type','Pembayaran Per Jenis Bayar','class="info_link"' )?></li>
			<li><?=anchor('sales/rpt/cust_list','Daftar Pelanggan','class="info_link"' )?></li>
			<li><?=anchor('sales/rpt/slsman_list','Daftar Salesman','class="info_link"' )?></li>
					</ul>
				</li>
				<li>
					<span>Master</span>
					<ul>
			<li><?=anchor(base_url().'index.php/customer','Pelanggan','class="info_link"');?></li>
			<li><?=anchor(base_url().'index.php/salesman','Salesman','class="info_link"');?></li>
			<li><?=anchor(base_url().'index.php/type_of_payment','Termin','class="info_link"');?></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>

