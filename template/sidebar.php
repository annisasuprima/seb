<div class="sidebar">				
				<nav>
					<a href="<?php echo $data . '/index.php'; ?>"><i class="fa fa-home" aria-hidden="true"></i>Beranda</a>	
					<!-- <a href=" <?php echo $data . '/page/crud-bantuan/index.php'; ?>"><i class="fa fa-archive" aria-hidden="true"></i>Bantuan</a>	 -->
			
					<li class="dropdown">	<a  href=" <?php echo $data . '/page/crud-sumberdaya/index.php'; ?>"><i class="fa fa-heartbeat" aria-hidden="true"></i>Sumber Daya</a>
					<ul class="isi-dropdown">
					<li><a  href=" <?php echo $data . '/page/crud-sumberdaya/lokasi_sumberdaya.php'; ?>">Lokasi Sumber Daya</a></li>
					<li><a  href=" <?php echo $data . '/page/detail/detailsd.php'; ?>">Detail Sumber Daya</a></li>
				</ul>
			</li>

				<li class="dropdown">	<a  href="<?php echo $data . '/page/crud-bantuan/index.php'; ?>"><i class="fa fa-archive" aria-hidden="true"></i>Bantuan</a>
					<ul class="isi-dropdown">
					<li><a  href=" <?php echo $data . '/page/crud-Donatur/index.php'; ?>">Donatur</a></li>
					<li><a  href=" <?php echo $data . '/page/detail_donatur/index.php'; ?>">Detail Donatur</a></li>
				</ul>
			</li>

				
					<a href=" <?php echo $data . '/page/kejadianbencana/Kejadianbencana.php'; ?>"><i class="fa fa-bolt" aria-hidden="true"></i>Kejadian Bencana</a>		
					<a href=" <?php echo $data . '/page/timsar/tampil.php'; ?>"><i class="fa fa-users" aria-hidden="true"></i>Tim Sar</a>
					<a href=" <?php echo $data . '/page/shelter/tampilshelter.php'; ?>"><i class="fa fa-universal-access" aria-hidden="true"></i>Shelter</a>	
					
					
					<li class="dropdown">		<a href=" <?php echo $data . '/page/crud-korban/index.php'; ?>"><i class="fa fa-address-book" aria-hidden="true"></i>Korban</a>	
					<ul class="isi-dropdown">
					<li><a  href=" <?php echo $data . '/page/detail/detailkorban.php'; ?>">Detail Korban</a></li>
				
				</ul>
				</li>

				<li class="dropdown">	<a href=" <?php echo $data . '/page/detail/detailkebutuhan.php'; ?>"><i class="fa fa-truck" aria-hidden="true"></i>Kebutuhan</a>
					<ul class="isi-dropdown">
					<li><a  href=" <?php echo $data . '/page/detail/detailkerugian.php'; ?>">Kerugian</a></li>
				
				</ul>
			</li>
			
			<li class="dropdown">
			<a><i class="fa fa-globe" aria-hidden="true"></i> Tampil Peta</a>
					<ul class="isi-dropdown">
					<li><a href=" <?php echo $data . '/tampilbencana.php'; ?>">Kota Padang</a></li>
					<li><a  href=" <?php echo $data . '/page/evakuasi/map.php'; ?>">Jalur evakuasi & Shelter</a></li>
				</ul>
			
			</li>
			
			
					<a href=" <?php echo $data . '/page/login/logout.php'; ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
					<!-- <a href=" <?php echo $data . '/page/Rata/rata.php'; ?>"><i class="fa fa-balance-scale " aria-hidden="true"></i>Rata-Rata Kas</a>			
					<a href=" <?php echo $data . '/log/logout.php'; ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Keluar</a>			 --> 
				</nav>
</div>