<?php $this->load->view('header.php'); ?>

	<div class="row">
		<div class="col-sm-8 col-xs-12 col-sm-offset-2">
			<h2>Installation Step 1/3</h2>
		</div>
	</div>

	<div class="row">
		<?= validation_errors() ?>
	</div>

	<?php if (isset($message)): ?>
	<div class="row">
		<div class="alert alert-danger">
			<p><?= $message ?></p>
		</div>
	</div>
	<?php endif ?>

	<form action="" class="form" role="form" id="stepOneForm" method="post" accept-charset="utf-8">
	<div class="row">
		<div class="col-sm-6 container-bg">
			<h4>Server Type</h4>
			<p class="text-justify">Many servers give you the option to rewrite urls on the fly.  If you don't know what type of server you're using, 
				you should ask your host. Most hosts use 'Apache with mod_rewrite' but some dont. Pubvana supports 'Apache without mod_rewrite', 'Apache mod_rewrite' &amp; 'NGINX'.
			</p>
			<select class="form-control" name="server">
			  	<?php foreach ($server_opts as $opt_k => $opt_v): ?>
			  	<option value="<?= $opt_k ?>"><?= $opt_v ?></option>
				<?php endforeach ?>
			</select>

			<div style="margin-top: 5px; margin-bottom: 5px;">
				<h4>Database Type</h4>
				<p class="text-justify">
					Only MySQL/MariaDB is supported by Pubvana.
				</p>
				<select class="form-control" name="db_engine">
				  	<?php foreach ($db_engine as $dbe_k => $dbe_v): ?>
				  	<option value="<?= $dbe_k ?>" selected><?= $dbe_v ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="row" style="margin-top: 20px;">
				<p style="padding:8px;">Enter the Website Address where you're installing Open Blog. Include port number and any subdirectories if required. EG: <samp>http://example.com</samp> &amp; 
					<samp>http://localhost:8888</samp>.  Do not include <samp>/installer/</samp>.</p>
				<div class="form-group text-left">
				    <label for="baseUrl" class="control-label col-sm-3">Installation Base URL</label>
				    <div class="col-sm-9">
				    	<input name="base_url" type="text" class="form-control" id="baseUrl" value="<?= set_value('base_url') ?>" placeholder="http://">
				    </div>
				 </div>
			</div>
		</div>
		<div class="col-sm-6 container-bg">
			<h4>Database:</h4>

			<div class="row">
				<div class="form-group text-left">
				    <label for="databaseName" class="control-label col-sm-3">Database Name</label>
				    <div class="col-sm-9">
				    	<input name="db_name" type="text" class="form-control" id="databaseName" value="<?= set_value('db_name') ?>" placeholder="Database Name" required>
				    </div>
				 </div>
			</div>

			<div class="row m-t">
				<div class="form-group text-left">
					<label for="hostName" class="control-label col-sm-3">Host Name</label>
					<div class="col-sm-9">
						<input name="db_host" type="text" class="form-control" id="hostName" value="<?php echo (set_value('db_host')) ? set_value('db_host') : 'localhost'; ?>" placeholder="Host Name" required>
					</div>
				</div>
			</div>

			<div class="row m-t">
				<div class="form-group text-left">
					<label for="hostPort" class="control-label col-sm-3">Database Port</label>
					<div class="col-sm-9">
						<input name="db_port" type="text" class="form-control" id="hostPort" value="<?php echo (set_value('db_port')) ? set_value('db_port') : '3306'; ?>" placeholder="Database Port" required>
					</div>
				</div>
			</div>

			<div class="row m-t">
				<div class="form-group text-left">
					<label for="userName" class="control-label col-sm-3">Database Username</label>
					<div class="col-sm-9">
						<input name="db_user" type="text" class="form-control" id="userName" value="<?= set_value('db_user') ?>" placeholder="Database Username" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group text-left">
					<label for="userPassword" class="control-label col-sm-3">Database Password</label>
					<div class="col-sm-9">
						<input name="db_pass" type="password" class="form-control" id="userPassword" placeholder="Database Password" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="form-group text-left">
					<label for="dbPrefix" class="control-label col-sm-3">Database Prefix</label>
					<div class="col-sm-9">
						<input name="db_prefix" type="text" class="form-control" id="dbPrefix" value="<?php echo (set_value('db_prefix')) ? set_value('db_prefix') : 'pv_'; ?>" placeholder="Database Prefix" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="text-left" style="padding: 8px;">
					<p>&nbsp;</p>
				</div>
			</div>
		</div>		
	</div>
		
	<div class="row" style="margin-top: 20px;">
		<div class="col-sm-8 col-xs-12 col-sm-offset-2">
			<p>If at any point you get stuck please ask your web hosting provider or <a href="http://pubvana.org/contact" target="_blank">contact us</a> for support.</p>

			<p><?= form_submit('submit', 'Continue', 'class="btn btn-default btn-lg"') ?></p>

		</div>
	</div>


	
<?php $this->load->view('footer.php'); ?>
