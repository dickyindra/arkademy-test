<?php

class SNGenerator {

	private $partSerialNumber 			= 4;
	private $digitOfPartSerialNumber 	= 4;

	private $separateSerialNumber 		= '-';

	private $_characters;
	private $_totalCharacters;
	
	public function __construct() {

		$this->_setCharacters();
		$this->_setTotalCharacters();

	}

	private function _setCharacters() {

		// Number
 		for( $number = 1 ; $number <= 9 ; $number++ )
 			$this->_characters[] = $number;

 		// Alpha
 		for( $alpha = 65 ; $alpha <= 90 ; $alpha++ )
 			$this->_characters[] = chr( $alpha );

	}

	private function _setTotalCharacters() {

		$this->_totalCharacters = count( $this->_characters );

	}

	public function generate() {

		$serial_number = '';

		for( $part = 1 ; $part <= $this->partSerialNumber ; $part++ ) {

            for( $letter = 1 ; $letter <= $this->digitOfPartSerialNumber ; $letter++ ) {

            	$randomizer		= mt_rand( 0 , ( $this->_totalCharacters - 1 ) );
                $serial_number .= $this->_characters[$randomizer];

            }
            
            if( $part < $this->partSerialNumber ) {

                $serial_number .= $this->separateSerialNumber;
            
            }

        }

        return $serial_number;

	}

}

$sngenerator = new SNGenerator();

for( $i = 0 ; $i < 300 ; $i++ ) {

	echo $sngenerator->generate() . '<br>';

}

?>