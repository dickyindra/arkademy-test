<?php

class VendingMachine {

	private $_stokKembalian;

	public function __construct() {

		$this->setStokKembalian();

	}

	private function setStokKembalian() {

		$this->_stokKembalian = array( '50000' , '20000' , '10000' , '5000' , '2000' , '1000' , '500' );

	}

	public function kembalian( $terpakai , $dibayar ) {

		$kembalian 	= $dibayar - $terpakai;

		for( $i = 0 ; $i < count( $this->_stokKembalian ) ; $i++ ) {

			$jumlah = 0;

			while( $kembalian > $this->_stokKembalian[$i] ) {

				$kembalian -= $this->_stokKembalian[$i];

				++$jumlah;

				if( $jumlah > 0 ) {

					echo 'Uang Rp' . $this->_stokKembalian[$i] . ' sebanyak ' . $jumlah . ' lembar. <br>';

				}

			}

		}

	}

}

$vm = new VendingMachine();
$vm->kembalian( '21500' , '50000' );