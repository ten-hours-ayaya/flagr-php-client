<?php
/**
 * Distribution
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ayaya\FlagrClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flagr
 *
 * Flagr is a feature flagging, A/B testing and dynamic configuration microservice. The base path for all the APIs is \"/api/v1\".
 *
 * OpenAPI spec version: 1.1.10
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ayaya\FlagrClient\Model;

use \ArrayAccess;
use \Ayaya\FlagrClient\ObjectSerializer;

/**
 * Distribution Class Doc Comment
 *
 * @category Class
 * @package  Ayaya\FlagrClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Distribution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'distribution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'percent' => 'int',
'variantKey' => 'string',
'variantID' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'percent' => 'int64',
'variantKey' => null,
'variantID' => 'int64'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'percent' => 'percent',
'variantKey' => 'variantKey',
'variantID' => 'variantID'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'percent' => 'setPercent',
'variantKey' => 'setVariantKey',
'variantID' => 'setVariantID'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'percent' => 'getPercent',
'variantKey' => 'getVariantKey',
'variantID' => 'getVariantID'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['percent'] = isset($data['percent']) ? $data['percent'] : null;
        $this->container['variantKey'] = isset($data['variantKey']) ? $data['variantKey'] : null;
        $this->container['variantID'] = isset($data['variantID']) ? $data['variantID'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['percent'] === null) {
            $invalidProperties[] = "'percent' can't be null";
        }
        if ($this->container['variantKey'] === null) {
            $invalidProperties[] = "'variantKey' can't be null";
        }
        if ($this->container['variantID'] === null) {
            $invalidProperties[] = "'variantID' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets percent
     *
     * @return int
     */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
     * Sets percent
     *
     * @param int $percent percent
     *
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;

        return $this;
    }

    /**
     * Gets variantKey
     *
     * @return string
     */
    public function getVariantKey()
    {
        return $this->container['variantKey'];
    }

    /**
     * Sets variantKey
     *
     * @param string $variantKey variantKey
     *
     * @return $this
     */
    public function setVariantKey($variantKey)
    {
        $this->container['variantKey'] = $variantKey;

        return $this;
    }

    /**
     * Gets variantID
     *
     * @return int
     */
    public function getVariantID()
    {
        return $this->container['variantID'];
    }

    /**
     * Sets variantID
     *
     * @param int $variantID variantID
     *
     * @return $this
     */
    public function setVariantID($variantID)
    {
        $this->container['variantID'] = $variantID;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
