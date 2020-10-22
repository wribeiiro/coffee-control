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

				<li class="<?=base_url('client') == current_url() ? 'active' : ''?>">
					<a href="<?=base_url('client')?>">
						<i class="fa fa-building"></i>
						<p>Clientes</p>
					</a>
				</li>

				<li class="<?=base_url('product') == current_url() ? 'active' : ''?>">
					<a href="<?=base_url('product')?>">
						<i class="fa fa-store-alt"></i>
						<p>Produtos / Serviços</p>
					</a>
				</li>

				<li class="<?=base_url('payment') == current_url() ? 'active' : ''?>">
					<a href="<?=base_url('payment')?>">
						<i class="fa fa-hand-holding-usd"></i>
						<p>Pagamentos</p>
					</a>
				</li>

				<li class="<?=base_url('method_payment') == current_url() ? 'active' : ''?>">
					<a href="<?=base_url('method_payment')?>">
						<i class="fa fa-credit-card"></i>
						<p>Métodos do Pgto</p>
					</a>
				</li>

				<li class="<?=base_url('user') == current_url() ? 'active' : ''?>">
					<a href="<?=base_url('user')?>">
						<i class="fa fa-users"></i>
						<p>Usuários</p>
					</a>
				</li>
			</ul>
		</div>
	</div>