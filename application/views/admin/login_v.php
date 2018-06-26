<?php
  //$this->load->view('admin/include/header'); 
?>
<!-- <h1>Silahkan Login</h1> -->
<?php
//  echo validation_errors();
//  echo form_open('dashboard/login');
//  $data = array(
//  				'name'	=>	'username',
//  				'type'	=>	'text',
//                 'size'	=>	'20',
//                 'class' =>  'input100',
//                 'placeholder' => 'Username',
//  				'value' =>	set_value('username')
//  				);
//  echo form_label('Username : ', 'username');
//  echo form_input($data);
//  echo "<br/>";
//  $data = array(
//  				'name'	=>	'password',
//  				'type'	=>	'password',
//                 'size'	=>	'20',
//                 'class' =>  'input100',
//                 'placeholder' => 'Password',
//  				'value'	=>	set_value('password')
//  				);
//  echo form_label('Password', 'password');
//  echo form_input($data);
//  echo "<br/>";
//  echo form_submit('btn_simpan', 'Login');
//  echo form_close();
?>
<?php //$this->load->view('admin/include/footer'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('vendor'); ?>bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('admin'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('admin'); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('vendor'); ?>animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('vendor'); ?>css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('vendor'); ?>animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('vendor'); ?>select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('vendor'); ?>daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('admin'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('admin'); ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form action="<?php echo site_url('dashboard/login');?>" method="post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<!-- <input class="input100" type="text" name="username" placeholder="Username"> -->
                        <?php
                        $data = array(
                                        'name'	=>	'username',
                                        'type'	=>	'text',
                                        'size'	=>	'20',
                                        'class' =>  'input100',
                                        'placeholder' => 'Username',
                                        'value' =>	set_value('username')
                                        );
                        //echo form_label('Username : ', 'username');
                        echo form_input($data);
                        ?>
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<!-- <input class="input100" type="password" name="password" placeholder="Password"> -->
                        <?php
                            $data = array(
                                        'name'	=>	'password',
                                        'type'	=>	'password',
                                        'size'	=>	'20',
                                        'class' =>  'input100',
                                        'placeholder' => 'Password',
                                        'value'	=>	set_value('password')
                                        );
                            //echo form_label('Password', 'password');
                            echo form_input($data);
                        ?>
						<span class="focus-input100"></span>
					</div>
					
					<!-- <div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
					</div>
 -->
					<div class="container-login100-form-btn m-t-17">
						<!-- <input class="login100-form-btn" type="submit" name="submit" value="Login"> -->
                        <?php
                            
                            echo form_submit('btn_simpan', 'Login', 'class="login100-form-btn"');
                        ?>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo config_item('vendor'); ?>jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo config_item('vendor'); ?>animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo config_item('vendor'); ?>bootstrap/js/popper.js"></script>
	<script src="<?php echo config_item('vendor'); ?>bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo config_item('vendor'); ?>select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo config_item('vendor'); ?>daterangepicker/moment.min.js"></script>
	<script src="<?php echo config_item('vendor'); ?>daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo config_item('vendor'); ?>countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo config_item('admin'); ?>js/main.js"></script>

</body>
</html>