<?php

class Validation {

	private $_errMsg = null;

	public function username( $username ) {

		if( !ctype_lower( $username ) ) {

			$this->_errMsg['username'] = 'Username hanya boleh menggunakan huruf kecil.';

		}

	}

	public function email( $email ) {

		if( !filter_var( $email , FILTER_VALIDATE_EMAIL ) ) {

			$this->_errMsg['email']	= 'Email yang anda masukkan tidak valid.';

		}

	}

	public function phone_number( $phone_number ) {

		if( !preg_match( '/^[0-9_+ ]+$/' , $phone_number ) ) {

			$this->_errMsg['phone_number'] = 'Hanya boleh mengandung angka, spasi, dan plus (+).';

		}

	}

	public function getMessage( $val = null ) {

		if( $val == null )
			return $this->_errMsg;
		else
			return @$this->_errMsg[$val];

	}

}

$validation = new Validation();

if( $_POST ) {

	$validation->username( $_POST['username'] );
	$validation->email( $_POST['email'] );
	$validation->phone_number( $_POST['phone_number'] );

}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Nomor 2</title>
	</head>
	<body>
		<form action="" method="post">
			<div>
				<label for="username">Username: </label>
				<input type="text" name="username" id="username">
				<br>
				<span><?php echo $validation->getMessage( 'username' ); ?></span>
			</div>
			<br>
			<div>
				<label for="email">Email: </label>
				<input type="email" name="email" id="email">
				<br>
				<span><?php echo $validation->getMessage( 'email' ); ?></span>
			</div>
			<br>
			<div>
				<label for="phone_number">Phone Number: </label>
				<input type="text" name="phone_number" id="phone_number">
				<br>
				<span><?php echo $validation->getMessage( 'phone_number' ); ?></span>
			</div>
			<div>
				<button type="submit">Save</button>
			</div>
		</form>
	</body>
</html>