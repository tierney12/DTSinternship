<?php

namespace App\Services;

class BarcodeService
{
    private $barcode;

    public function __construct($barcode)
    {
        $this->barcode = $barcode;
    }

    public function generateBarcode()
    {
        $splitBarcode = str_split($this->barcode);

        $barcodeArray = [];


        $len = 13;
        $dataLen = $len - 1;

        $this->barcode = str_pad($this->barcode, $dataLen, '0', STR_PAD_LEFT);
        $barcodeLen = strlen($this->barcode);

        $checkDigit = $this->calculateCheckDigit($len, $dataLen);

        $barcodePtOne = $splitBarcode[0];
        $barcodeArray[] = $barcodePtOne;

        $barcodePtTwo = array_slice($splitBarcode, 1, 6);
        $barcodeArray[] = $barcodePtTwo;

        $barcodePtThree = array_slice($splitBarcode, 7, 5);
        $barcodePtThree[] = $checkDigit;
        $barcodeArray[] = $barcodePtThree;

        return $barcodeArray;
    }

    public function calculateCheckDigit($len, $dataLen)
    {
        $sum_a = 0;

        for ($i = 1; $i < $dataLen; $i += 2) {
            $sum_a += $this->barcode[$i];
        }

        if ($len > 12) {
            $sum_a *= 3;
        }

        $sum_b = 0;

        for ($i = 0; $i < $dataLen; $i += 2) {
            if (is_numeric($this->barcode[$i])) {
                $sum_b += ($this->barcode[$i]);
            } else {
                throw new InvalidCharacterException();
            }
        }

        if ($len < 13) {
            $sum_b *= 3;
        }

        $r = ($sum_a + $sum_b) % 10;

        if ($r > 0) {
            $r = (10 - $r);
        }

        return $r;
    }
}
