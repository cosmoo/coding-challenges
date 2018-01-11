<?php

/**
 * Class SubstitutionEncodingAlgorithm
 */
class SubstitutionEncodingAlgorithm implements EncodingAlgorithm
{
    /**
     * @var array
     */
    private $substitutions;

    /**
     * SubstitutionEncodingAlgorithm constructor.
     * @param $substitutions
     */
    public function __construct(array $substitutions)
    {
        //$this->substitutions = array();
        $this->substitutions = $substitutions;
    }

    /**
     * Encodes text by substituting character with another one provided in the pair.
     * For example pair "ab" defines all "a" chars will be replaced with "b" and all "b" chars will be replaced with "a"
     * Examples:
     *      substitutions = ["ab"], input = "aabbcc", output = "bbaacc"
     *      substitutions = ["ab", "cd"], input = "adam", output = "bcbm"
     *
     * @param string $text
     * @return string
     */
    public function encode($text)
    {
        /**
         * @todo: Implement it
         */

        print_r($this->substitutions);
        $subPair = array_map('strval', $this->substitutions);
        
        if (preg_match('/[A-Z]/', $text)) {
            $subPair = array_map('strtoupper', $subPair);
        }
        
        foreach ($subPair as $key => $value) {
            $text = strtr($text, array($value[0] => $value[1], $value[1] => $value[0]));
        }
        
        return $text;
    }
}
