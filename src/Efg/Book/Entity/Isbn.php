<?php
/**
 * ISBN
 *
 * @author Abc Efg <abc@efg.me>
 * @version 2.0.0
 * @package ISBN
*/
namespace Isbn;
/**
 * ISBN
*/
class Isbn
{

    /**
     * Digit Instance
     *
     * @var digit
    */
    public $digit;
    /**
     * Hyphens Instance
     *
     * @var Hyphens
    */
    public $hyphens;
    /**
     * Translate Instance
     *
     * @var Translate
    */
    public $translate;
    /**
     * Validation Instance
     *
     * @var Validation
    */
    public $validation;

    /**
     * Constructor
    */
    public function __construct()
    {
        $this->hyphens = '-';
        $this->digit = 123;
        $this->translate = 'translate';
        $this->validation = 'validation';
    }
}