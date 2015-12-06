<?php

namespace Lucaszz\SymfonyFormGenerator\Tests\fixtures;

use Lucaszz\SymfonyFormGenerator\Annotation\Form;

class ObjectWithFormAnnotations
{
    /** @Form\Field("integer", options={"label"="Property Integer"}) */
    public $propertyInteger;
    /** @Form\Field("number", options={"label"="Property Integer"}) */
    public $propertyNumber;
    /** @Form\Field("generator_string", options={"label"="Property String"}) */
    public $propertyString;
    /** @Form\Field("generator_datetime", options={"label"="Property DateTime"}) */
    public $propertyDateTime;
    /** @Form\Field("generator_uuid", options={"label"="Property Uuid"}) */
    public $propertyUuid;
    /** @Form\Field("generator_money", options={"label"="Property Money"}) */
    public $propertyMoney;

    public function __construct($propertyInteger, $propertyNumber, $propertyString, $propertyDateTime, $propertyUuid, $propertyMoney)
    {
        $this->propertyInteger  = $propertyInteger;
        $this->propertyNumber   = $propertyNumber;
        $this->propertyString   = $propertyString;
        $this->propertyDateTime = $propertyDateTime;
        $this->propertyUuid     = $propertyUuid;
        $this->propertyMoney    = $propertyMoney;
    }
}
