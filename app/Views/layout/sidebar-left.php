	<div class="sidebar" data-color="purple" data-image="https://i.pinimg.com/474x/b5/d1/68/b5d16874285b189b242d322b9c114862.jpg">
		<div class="sidebar-wrapper">
			<div class="logo">
				<a href="<?=base_url('dashboard')?>" class="simple-text">
					<i class="fa fa-coffee"></i> &nbsp; Coffe Control
				</a>
			</div>

			<ul class="nav">
				<li class="<?=base_url('dashboard') == current_url() ? 'active' : ''?>">
					<a href="<?=base_url('dashboard')?>">
						<i class="fa fa-tachometer-alt"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="<?=base_url('payment') == current_url() ? 'active' : ''?>">
					<a href="<?=base_url('payment')?>">
						<i class="fa fa-coins"></i>
						<p>Payments</p>
					</a>
				</li>
			</ul>
		</div>
	</div>