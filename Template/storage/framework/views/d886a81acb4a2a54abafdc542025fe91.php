<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/nt.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">


    <script src="http://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>

    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;	
                font-family: Raleway, sans-serif;
            }

            body {
                /* background: linear-gradient(90deg, #C7C5F4, #776BCC);		 */
                width: 100%;
                height: 100%;
                background-size: cover;
                background-repeat: no-repeat;
                background-image: url('https://wallpaperaccess.com/full/2029165.jpg');
                
            }

            .container {
                display: flex;
                align-items: center;
                justify-content: center;
                /* min-height: 100vh;
                */
                margin-top: 150px;
            }

            .screen {		
                /* background-size: cover; */
                /* background-repeat: no-repeat; */
                /* background-size: 360px 600px; */
                /* background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRz6QYXKWepiC-mWxBk6zk1DpN859Idbx5iQ&usqp=CAU'); */
                background: rgba(245, 40, 145, 0.5);		
                position: relative;	
                height: 600px;
                width: 360px;	
                box-shadow: 0px 0px 24px #5C5696;
                backdrop-filter: blur(5px);
            }

            .screen__content {
                z-index: 1;
                position: relative;	
                height: 100%;
            }

            .screen__background {	
                /* filter: blur(5px);	 */
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 0;
                -webkit-clip-path: inset(0 0 0 0);
                clip-path: inset(0 0 0 0);	
            }

            .screen__background__shape {
                transform: rotate(45deg);
                position: absolute;
            }

            .screen__background__shape1 {
                height: 520px;
                width: 520px;
                background: #FFF;	
                top: -50px;
                right: 120px;	
                border-radius: 0 72px 0 0;
            }

            .screen__background__shape2 {
                height: 220px;
                width: 220px;
                background: #6C63AC;	
                top: -172px;
                right: 0;	
                border-radius: 32px;
            }

            .screen__background__shape3 {
                height: 540px;
                width: 190px;
                background: linear-gradient(270deg, #5D54A4, #6A679E);
                top: -24px;
                right: 0;	
                border-radius: 32px;
            }

            .screen__background__shape4 {
                height: 400px;
                width: 200px;
                background: #7E7BB9;	
                top: 420px;
                right: 50px;	
                border-radius: 60px;
            }

            .login {
                width: 320px;
                padding: 30px;
                /* padding-top: 156px; */
            }

            .login__field {
                padding: 20px 0px;	
                position: relative;	
            }

            .login__icon {
                position: absolute;
                top: 30px;
                color: #7875B5;
            }

            .login__input {
                border: none;
                border-bottom: 2px solid #D1D1D4;
                background: none;
                padding: 10px;
                padding-left: 24px;
                font-weight: 700;
                width: 75%;
                transition: .2s;
            }

            .login__input:active,
            .login__input:focus,
            .login__input:hover {
                outline: none;
                border-bottom-color: #6A679E;
            }

            .login__submit {
                background: #ffffff38;
                font-size: 14px;
                margin-top: 30px;
                padding: 16px 20px;
                border-radius: 26px;
                border: 1px solid #D4D3E8;
                text-transform: uppercase;
                font-weight: 700;
                display: flex;
                align-items: center;
                width: 100%;
                color: #4C489D;
                box-shadow: 0px 2px 2px #5C5696;
                cursor: pointer;
                transition: .2s;
            }

            .login__submit:active,
            .login__submit:focus,
            .login__submit:hover {
                border-color: #6A679E;
                outline: none;
            }

            .button__icon {
                font-size: 24px;
                margin-left: auto;
                color: #7875B5;
            }

            .social-login {	
                position: absolute;
                height: 140px;
                width: 160px;
                text-align: center;
                bottom: 0px;
                right: 0px;
                color: #fff;
            }

            .social-icons {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .social-login__icon {
                padding: 20px 10px;
                color: #fff;
                text-decoration: none;	
                text-shadow: 0px 0px 8px #7875B5;
            }

            .social-login__icon:hover {
                transform: scale(1.5);	
            }
      </style>

<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="ชื่อผู้ใช้">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="รหัสผ่านบัญชีของคุณ">
				</div>
                <div class="login__field">
                    <i class="login__icon fas fa-envelope"></i>
					<input type="email" class="login__input" placeholder="อีเมล">
				</div>
                <div class="login__field">
                    <i class="login__icon fas fa-phone"></i>
					<input type="text" class="login__input" placeholder="เบอร์โทรศัพท์">
				</div>
				<button class="button login__submit">
					<span class="button__text">Submit</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
                <h6 style="margin-top:2.5cm;"> <a href="login">Back</a></h6>
		
			</form>
		</div>
		<div class="screen__background">
        </div>		
	</div>
</div>

</body>
</html><?php /**PATH C:\Users\user\Desktop\campaing\resources\views/Register.blade.php ENDPATH**/ ?>