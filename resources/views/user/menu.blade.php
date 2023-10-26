<li class="nav-item">
	<a href="?hal=beranda" class="nav-link">
		<i class="nav-icon fas fa-home"></i>
		<p> Dashboard </p>
	</a>
</li>

<?php if($_SESSION['user_status']=='User Transaksi'){ ?>
	<li class="nav-item has-treeview"> <!--menu-open-->
		<a href="#" class="nav-link"> <!-- active -->
			<i class="nav-icon fas fa-calculator"></i>
			<p>
				Transaksi
				<i class="fas fa-angle-left right"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">
			<li class="nav-item">
				<a href="?hal=transaksi_input" class="nav-link">
					<i class="fa fa-plus nav-icon"></i>
					<p>Input Transaksi</p>
				</a>
			</li>

			<li class="nav-item">
				<a href="?hal=transaksi_data&id=1" class="nav-link"> <!-- active -->
					<i class="fa fa-flag nav-icon"></i>
					<p>Kegiatan Transaksi</p>
				</a>
			</li>
		</ul>
	</li>

<?php } ?>

<li class="nav-item has-treeview"> <!--menu-open-->
	<a href="#" class="nav-link"> <!-- active -->
		<i class="nav-icon fas fa-list"></i>
		<p>
			Laporan
			<i class="fas fa-angle-left right"></i>
		</p>
	</a>
	<ul class="nav nav-treeview">
		<li class="nav-item">
			<a href="?hal=lap_jurnal_umum" class="nav-link">
				<i class="fa fa-bookmark nav-icon"></i>
				<p>Jurnal Umum</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="?hal=lap_buku_besar" class="nav-link"> <!-- active -->
				<i class="fa fa-book nav-icon"></i>
				<p>Buku Besar</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="?hal=lap_arus_kas" class="nav-link"> <!-- active -->
				<i class="fa fa-angle-double-right nav-icon"></i>
				<p>Arus Kas</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="?hal=lap_laba_rugi" class="nav-link"> <!-- active -->
				<i class="fa fa-credit-card nav-icon"></i>
				<p>Laba Rugi</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="?hal=lap_perubahan_modal" class="nav-link"> <!-- active -->
				<i class="fa fa-low-vision nav-icon"></i>
				<p>Perubahan Modal</p>
			</a>
		</li>
		<li class="nav-item">
			<a href="?hal=lap_neraca" class="nav-link"> <!-- active -->
				<i class="fa fa-balance-scale nav-icon"></i>
				<p>Neraca</p>
			</a>
		</li>
	</ul>
</li>
