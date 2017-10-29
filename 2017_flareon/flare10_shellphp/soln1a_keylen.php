<?php
// Pipe output to a file "possiblekeys"
// Determined that key length should be 64

$code = base64_decode('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');

echo strlen($code)."\n";
$hexa = array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f');

for ($keylen=32; $keylen<=64; $keylen++){
	for ($start=0; $start<$keylen; $start++){
		for ($a=0; $a<16; $a++){
			$key = ord($hexa[$a]);
			$fail = false;
			for ($pos=$start; $pos<strlen($code); $pos += $keylen){
				$key = ord($code[$pos]) ^ $key;
				if (!isAscii(chr($key))){
					// Fail
					$fail = true;
					break;
				}
			}
			
			if (!$fail) echo "$keylen $start $hexa[$a] : Yay\n"; // key exists
		}
	}
}
/*
function findpossiblerange($byte){
	$hexa = array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f');
	$range = "";
	for ($i=0; $i<count($hexa); $i++){
		$tmp = ord($hexa[$i]) ^ $byte;
		$range .= chr($tmp);
	}
	return $range;
}

function xorstring($msg, $key){
	$out = "";
	for ($i=0; $i<strlen($msg); $i++){
		$tmp = ord($msg[$i]) ^ ord($key[$i]);
		$out .= chr($tmp);
	}
	return $out;
}
*/
function isAscii($byte){
	if (ord($byte) > 0x7e) return false;
	if (ord($byte) < 0x20) {
		if (ord($byte) == 0xa) return true;
		if (ord($byte) == 0xd) return true;
		return false;
	}
	return true;
}
?>