<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/conversion_upload_service.proto

namespace Google\Ads\GoogleAds\V16\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifying information for a successfully processed ClickConversion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.services.ClickConversionResult</code>
 */
class ClickConversionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google Click ID (gclid) associated with this conversion.
     *
     * Generated from protobuf field <code>optional string gclid = 4;</code>
     */
    protected $gclid = null;
    /**
     * The click identifier for clicks associated with app conversions and
     * originating from iOS devices starting with iOS14.
     *
     * Generated from protobuf field <code>string gbraid = 8;</code>
     */
    protected $gbraid = '';
    /**
     * The click identifier for clicks associated with web conversions and
     * originating from iOS devices starting with iOS14.
     *
     * Generated from protobuf field <code>string wbraid = 9;</code>
     */
    protected $wbraid = '';
    /**
     * Resource name of the conversion action associated with this conversion.
     *
     * Generated from protobuf field <code>optional string conversion_action = 5;</code>
     */
    protected $conversion_action = null;
    /**
     * The date time at which the conversion occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string conversion_date_time = 6;</code>
     */
    protected $conversion_date_time = null;
    /**
     * The user identifiers associated with this conversion. Only hashed_email and
     * hashed_phone_number are supported for conversion uploads. The maximum
     * number of user identifiers for each conversion is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.common.UserIdentifier user_identifiers = 7;</code>
     */
    private $user_identifiers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gclid
     *           The Google Click ID (gclid) associated with this conversion.
     *     @type string $gbraid
     *           The click identifier for clicks associated with app conversions and
     *           originating from iOS devices starting with iOS14.
     *     @type string $wbraid
     *           The click identifier for clicks associated with web conversions and
     *           originating from iOS devices starting with iOS14.
     *     @type string $conversion_action
     *           Resource name of the conversion action associated with this conversion.
     *     @type string $conversion_date_time
     *           The date time at which the conversion occurred. The format is
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *     @type array<\Google\Ads\GoogleAds\V16\Common\UserIdentifier>|\Google\Protobuf\Internal\RepeatedField $user_identifiers
     *           The user identifiers associated with this conversion. Only hashed_email and
     *           hashed_phone_number are supported for conversion uploads. The maximum
     *           number of user identifiers for each conversion is 5.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Services\ConversionUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Click ID (gclid) associated with this conversion.
     *
     * Generated from protobuf field <code>optional string gclid = 4;</code>
     * @return string
     */
    public function getGclid()
    {
        return isset($this->gclid) ? $this->gclid : '';
    }

    public function hasGclid()
    {
        return isset($this->gclid);
    }

    public function clearGclid()
    {
        unset($this->gclid);
    }

    /**
     * The Google Click ID (gclid) associated with this conversion.
     *
     * Generated from protobuf field <code>optional string gclid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGclid($var)
    {
        GPBUtil::checkString($var, True);
        $this->gclid = $var;

        return $this;
    }

    /**
     * The click identifier for clicks associated with app conversions and
     * originating from iOS devices starting with iOS14.
     *
     * Generated from protobuf field <code>string gbraid = 8;</code>
     * @return string
     */
    public function getGbraid()
    {
        return $this->gbraid;
    }

    /**
     * The click identifier for clicks associated with app conversions and
     * originating from iOS devices starting with iOS14.
     *
     * Generated from protobuf field <code>string gbraid = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setGbraid($var)
    {
        GPBUtil::checkString($var, True);
        $this->gbraid = $var;

        return $this;
    }

    /**
     * The click identifier for clicks associated with web conversions and
     * originating from iOS devices starting with iOS14.
     *
     * Generated from protobuf field <code>string wbraid = 9;</code>
     * @return string
     */
    public function getWbraid()
    {
        return $this->wbraid;
    }

    /**
     * The click identifier for clicks associated with web conversions and
     * originating from iOS devices starting with iOS14.
     *
     * Generated from protobuf field <code>string wbraid = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setWbraid($var)
    {
        GPBUtil::checkString($var, True);
        $this->wbraid = $var;

        return $this;
    }

    /**
     * Resource name of the conversion action associated with this conversion.
     *
     * Generated from protobuf field <code>optional string conversion_action = 5;</code>
     * @return string
     */
    public function getConversionAction()
    {
        return isset($this->conversion_action) ? $this->conversion_action : '';
    }

    public function hasConversionAction()
    {
        return isset($this->conversion_action);
    }

    public function clearConversionAction()
    {
        unset($this->conversion_action);
    }

    /**
     * Resource name of the conversion action associated with this conversion.
     *
     * Generated from protobuf field <code>optional string conversion_action = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setConversionAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversion_action = $var;

        return $this;
    }

    /**
     * The date time at which the conversion occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string conversion_date_time = 6;</code>
     * @return string
     */
    public function getConversionDateTime()
    {
        return isset($this->conversion_date_time) ? $this->conversion_date_time : '';
    }

    public function hasConversionDateTime()
    {
        return isset($this->conversion_date_time);
    }

    public function clearConversionDateTime()
    {
        unset($this->conversion_date_time);
    }

    /**
     * The date time at which the conversion occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string conversion_date_time = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setConversionDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversion_date_time = $var;

        return $this;
    }

    /**
     * The user identifiers associated with this conversion. Only hashed_email and
     * hashed_phone_number are supported for conversion uploads. The maximum
     * number of user identifiers for each conversion is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.common.UserIdentifier user_identifiers = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserIdentifiers()
    {
        return $this->user_identifiers;
    }

    /**
     * The user identifiers associated with this conversion. Only hashed_email and
     * hashed_phone_number are supported for conversion uploads. The maximum
     * number of user identifiers for each conversion is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.common.UserIdentifier user_identifiers = 7;</code>
     * @param array<\Google\Ads\GoogleAds\V16\Common\UserIdentifier>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserIdentifiers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V16\Common\UserIdentifier::class);
        $this->user_identifiers = $arr;

        return $this;
    }

}

