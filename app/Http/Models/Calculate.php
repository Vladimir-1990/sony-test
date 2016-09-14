<?php

Class Calculate{

	public static function all($hullLength, $buttocAngle, $displacement){

		$slRatio = self::slRatio($buttocAngle);
		$hullSpeed = self::hullSpeed($slRatio, $hullLength);
		$CW = self::CW($slRatio);
		$hp = self::horsePower($displacement, $CW, $hullLength);

		return array("hull_speed" => number_format($hullSpeed, 2), "hp" => number_format($hp, 2));
	}

	private static function slRatio($buttocAngle){
		return ($buttocAngle * -0.2) + 2.9;
	}

	private static function CW($slRatio){
		return  0.8 + (0.17 * $slRatio);
	}

	private static function hullSpeed($slRatio, $hullLength){
		return $slRatio * (pow($hullLength, 0.5));
	}

	private static function horsePower($displacement, $CW, $hullLength){
		return ($displacement/1000) * pow((30 / ($CW * pow($hullLength, 0.5))),3);
	}
	
}