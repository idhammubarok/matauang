<?php

namespace MubarokDev\MataUang;

class Format {

	/**
     * Membuat Format IDR.
     *
     * @param $angka
     * @return integer
     */

	public static function idr($angka){

		$data = "Rp " . number_format($angka,2,',','.');
		
        return $data;
	}
}