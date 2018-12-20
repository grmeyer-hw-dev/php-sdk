<?php
namespace Hyperwallet\Model;

/**
 * Represents a V3 Client Token
 *
 * @property string $value The client token value

 *
 * @package Hyperwallet\Model
 */

class ClientToken extends BaseModel {

    /**
     * @internal
     *
     * Read only fields
     *
     * @var string[]
     */
    private static $READ_ONLY_FIELDS = array('value');

    /**
     * Creates a instance of ClientToken
     *
     * @param string[] $properties The default properties
     */
    public function __construct(array $properties = array()) {
        parent::__construct(self::$READ_ONLY_FIELDS, $properties);
    }

    /**
     * Get the client token value
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

}