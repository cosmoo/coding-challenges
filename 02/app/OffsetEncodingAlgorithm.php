<?php

/**
 * Class OffsetEncodingAlgorithm
 */
class OffsetEncodingAlgorithm implements EncodingAlgorithm
{
    /**
     * Lookup string
     */
    const CHARACTERS = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * @var int
     */
    private $offset;

    /**
     * @param int $offset
     */
    public function __construct($offset = 13)
    {
        $this->offset = $offset;
    }

    /**
     * Encodes text by shifting each character (existing in the lookup string) by an offset (provided in the constructor)
     * Examples:
     *      offset = 1, input = "a", output = "b"
     *      offset = 2, input = "z", output = "B"
     *      offset = 1, input = "Z", output = "a"
     *
     * @param string $text
     * @return string
     */
    public function encode($text)
    {
        /**
         * @todo: Implement it
         */

        $ciphertext = "";
        $constArr = str_split(self::CHARACTERS);
        $textArr = str_split($text);        
        $pos = 0;
        
        for ($j = 0; $j < count($textArr); $j++) {
            $char = $textArr[$j];			
            if (preg_match('/[^a-zA-Z\d]/', $char)) {
                $ciphertext .= $char; 
            } else {
                for ($i = 0; $i < count($constArr); $i++) {
                    if ($char == $constArr[$i]) {
                        if (($this->offset + $i) >= count($constArr)) {
                            if ($this->offset < 26) { 
                                $pos = $this->offset - 1;
                            } else {
                                $pos = $i - $this->offset;
                            }
                        } else {
                            $pos = $this->offset + $i;
                        }
                        $ciphertext .= $constArr[$pos]; 
                    }
                }            
            }                     
        }
        return $ciphertext;
    }
}
