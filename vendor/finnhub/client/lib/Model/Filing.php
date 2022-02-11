<?php
/**
 * Filing
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
 * Filing Class Doc Comment
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Filing implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Filing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'access_number' => 'string',
        'symbol' => 'string',
        'cik' => 'string',
        'form' => 'string',
        'filed_date' => 'string',
        'accepted_date' => 'string',
        'report_url' => 'string',
        'filing_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'access_number' => null,
        'symbol' => null,
        'cik' => null,
        'form' => null,
        'filed_date' => null,
        'accepted_date' => null,
        'report_url' => null,
        'filing_url' => null
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
        'access_number' => 'accessNumber',
        'symbol' => 'symbol',
        'cik' => 'cik',
        'form' => 'form',
        'filed_date' => 'filedDate',
        'accepted_date' => 'acceptedDate',
        'report_url' => 'reportUrl',
        'filing_url' => 'filingUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_number' => 'setAccessNumber',
        'symbol' => 'setSymbol',
        'cik' => 'setCik',
        'form' => 'setForm',
        'filed_date' => 'setFiledDate',
        'accepted_date' => 'setAcceptedDate',
        'report_url' => 'setReportUrl',
        'filing_url' => 'setFilingUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_number' => 'getAccessNumber',
        'symbol' => 'getSymbol',
        'cik' => 'getCik',
        'form' => 'getForm',
        'filed_date' => 'getFiledDate',
        'accepted_date' => 'getAcceptedDate',
        'report_url' => 'getReportUrl',
        'filing_url' => 'getFilingUrl'
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
        $this->container['access_number'] = $data['access_number'] ?? null;
        $this->container['symbol'] = $data['symbol'] ?? null;
        $this->container['cik'] = $data['cik'] ?? null;
        $this->container['form'] = $data['form'] ?? null;
        $this->container['filed_date'] = $data['filed_date'] ?? null;
        $this->container['accepted_date'] = $data['accepted_date'] ?? null;
        $this->container['report_url'] = $data['report_url'] ?? null;
        $this->container['filing_url'] = $data['filing_url'] ?? null;
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
     * Gets access_number
     *
     * @return string|null
     */
    public function getAccessNumber()
    {
        return $this->container['access_number'];
    }

    /**
     * Sets access_number
     *
     * @param string|null $access_number Access number.
     *
     * @return self
     */
    public function setAccessNumber($access_number)
    {
        $this->container['access_number'] = $access_number;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol Symbol.
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets cik
     *
     * @return string|null
     */
    public function getCik()
    {
        return $this->container['cik'];
    }

    /**
     * Sets cik
     *
     * @param string|null $cik CIK.
     *
     * @return self
     */
    public function setCik($cik)
    {
        $this->container['cik'] = $cik;

        return $this;
    }

    /**
     * Gets form
     *
     * @return string|null
     */
    public function getForm()
    {
        return $this->container['form'];
    }

    /**
     * Sets form
     *
     * @param string|null $form Form type.
     *
     * @return self
     */
    public function setForm($form)
    {
        $this->container['form'] = $form;

        return $this;
    }

    /**
     * Gets filed_date
     *
     * @return string|null
     */
    public function getFiledDate()
    {
        return $this->container['filed_date'];
    }

    /**
     * Sets filed_date
     *
     * @param string|null $filed_date Filed date <code>%Y-%m-%d %H:%M:%S</code>.
     *
     * @return self
     */
    public function setFiledDate($filed_date)
    {
        $this->container['filed_date'] = $filed_date;

        return $this;
    }

    /**
     * Gets accepted_date
     *
     * @return string|null
     */
    public function getAcceptedDate()
    {
        return $this->container['accepted_date'];
    }

    /**
     * Sets accepted_date
     *
     * @param string|null $accepted_date Accepted date <code>%Y-%m-%d %H:%M:%S</code>.
     *
     * @return self
     */
    public function setAcceptedDate($accepted_date)
    {
        $this->container['accepted_date'] = $accepted_date;

        return $this;
    }

    /**
     * Gets report_url
     *
     * @return string|null
     */
    public function getReportUrl()
    {
        return $this->container['report_url'];
    }

    /**
     * Sets report_url
     *
     * @param string|null $report_url Report's URL.
     *
     * @return self
     */
    public function setReportUrl($report_url)
    {
        $this->container['report_url'] = $report_url;

        return $this;
    }

    /**
     * Gets filing_url
     *
     * @return string|null
     */
    public function getFilingUrl()
    {
        return $this->container['filing_url'];
    }

    /**
     * Sets filing_url
     *
     * @param string|null $filing_url Filing's URL.
     *
     * @return self
     */
    public function setFilingUrl($filing_url)
    {
        $this->container['filing_url'] = $filing_url;

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


