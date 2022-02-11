<?php
/**
 * FilingSentiment
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finnhub API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Finnhub\Model;

use \ArrayAccess;
use \Finnhub\ObjectSerializer;

/**
 * FilingSentiment Class Doc Comment
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FilingSentiment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FilingSentiment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'negative' => 'float',
        'positive' => 'float',
        'polarity' => 'float',
        'litigious' => 'float',
        'uncertainty' => 'float',
        'constraining' => 'float',
        'modal_weak' => 'float',
        'modal_strong' => 'float',
        'modal_moderate' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'negative' => 'float',
        'positive' => 'float',
        'polarity' => 'float',
        'litigious' => 'float',
        'uncertainty' => 'float',
        'constraining' => 'float',
        'modal_weak' => 'float',
        'modal_strong' => 'float',
        'modal_moderate' => 'float'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'negative' => 'negative',
        'positive' => 'positive',
        'polarity' => 'polarity',
        'litigious' => 'litigious',
        'uncertainty' => 'uncertainty',
        'constraining' => 'constraining',
        'modal_weak' => 'modal-weak',
        'modal_strong' => 'modal-strong',
        'modal_moderate' => 'modal-moderate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'negative' => 'setNegative',
        'positive' => 'setPositive',
        'polarity' => 'setPolarity',
        'litigious' => 'setLitigious',
        'uncertainty' => 'setUncertainty',
        'constraining' => 'setConstraining',
        'modal_weak' => 'setModalWeak',
        'modal_strong' => 'setModalStrong',
        'modal_moderate' => 'setModalModerate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'negative' => 'getNegative',
        'positive' => 'getPositive',
        'polarity' => 'getPolarity',
        'litigious' => 'getLitigious',
        'uncertainty' => 'getUncertainty',
        'constraining' => 'getConstraining',
        'modal_weak' => 'getModalWeak',
        'modal_strong' => 'getModalStrong',
        'modal_moderate' => 'getModalModerate'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['negative'] = $data['negative'] ?? null;
        $this->container['positive'] = $data['positive'] ?? null;
        $this->container['polarity'] = $data['polarity'] ?? null;
        $this->container['litigious'] = $data['litigious'] ?? null;
        $this->container['uncertainty'] = $data['uncertainty'] ?? null;
        $this->container['constraining'] = $data['constraining'] ?? null;
        $this->container['modal_weak'] = $data['modal_weak'] ?? null;
        $this->container['modal_strong'] = $data['modal_strong'] ?? null;
        $this->container['modal_moderate'] = $data['modal_moderate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets negative
     *
     * @return float|null
     */
    public function getNegative()
    {
        return $this->container['negative'];
    }

    /**
     * Sets negative
     *
     * @param float|null $negative % of negative words in the filing.
     *
     * @return self
     */
    public function setNegative($negative)
    {
        $this->container['negative'] = $negative;

        return $this;
    }

    /**
     * Gets positive
     *
     * @return float|null
     */
    public function getPositive()
    {
        return $this->container['positive'];
    }

    /**
     * Sets positive
     *
     * @param float|null $positive % of positive words in the filing.
     *
     * @return self
     */
    public function setPositive($positive)
    {
        $this->container['positive'] = $positive;

        return $this;
    }

    /**
     * Gets polarity
     *
     * @return float|null
     */
    public function getPolarity()
    {
        return $this->container['polarity'];
    }

    /**
     * Sets polarity
     *
     * @param float|null $polarity % of polarity words in the filing.
     *
     * @return self
     */
    public function setPolarity($polarity)
    {
        $this->container['polarity'] = $polarity;

        return $this;
    }

    /**
     * Gets litigious
     *
     * @return float|null
     */
    public function getLitigious()
    {
        return $this->container['litigious'];
    }

    /**
     * Sets litigious
     *
     * @param float|null $litigious % of litigious words in the filing.
     *
     * @return self
     */
    public function setLitigious($litigious)
    {
        $this->container['litigious'] = $litigious;

        return $this;
    }

    /**
     * Gets uncertainty
     *
     * @return float|null
     */
    public function getUncertainty()
    {
        return $this->container['uncertainty'];
    }

    /**
     * Sets uncertainty
     *
     * @param float|null $uncertainty % of uncertainty words in the filing.
     *
     * @return self
     */
    public function setUncertainty($uncertainty)
    {
        $this->container['uncertainty'] = $uncertainty;

        return $this;
    }

    /**
     * Gets constraining
     *
     * @return float|null
     */
    public function getConstraining()
    {
        return $this->container['constraining'];
    }

    /**
     * Sets constraining
     *
     * @param float|null $constraining % of constraining words in the filing.
     *
     * @return self
     */
    public function setConstraining($constraining)
    {
        $this->container['constraining'] = $constraining;

        return $this;
    }

    /**
     * Gets modal_weak
     *
     * @return float|null
     */
    public function getModalWeak()
    {
        return $this->container['modal_weak'];
    }

    /**
     * Sets modal_weak
     *
     * @param float|null $modal_weak % of modal-weak words in the filing.
     *
     * @return self
     */
    public function setModalWeak($modal_weak)
    {
        $this->container['modal_weak'] = $modal_weak;

        return $this;
    }

    /**
     * Gets modal_strong
     *
     * @return float|null
     */
    public function getModalStrong()
    {
        return $this->container['modal_strong'];
    }

    /**
     * Sets modal_strong
     *
     * @param float|null $modal_strong % of modal-strong words in the filing.
     *
     * @return self
     */
    public function setModalStrong($modal_strong)
    {
        $this->container['modal_strong'] = $modal_strong;

        return $this;
    }

    /**
     * Gets modal_moderate
     *
     * @return float|null
     */
    public function getModalModerate()
    {
        return $this->container['modal_moderate'];
    }

    /**
     * Sets modal_moderate
     *
     * @param float|null $modal_moderate % of modal-moderate words in the filing.
     *
     * @return self
     */
    public function setModalModerate($modal_moderate)
    {
        $this->container['modal_moderate'] = $modal_moderate;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

