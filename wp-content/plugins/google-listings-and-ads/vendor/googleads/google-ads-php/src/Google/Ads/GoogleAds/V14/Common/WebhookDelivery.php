<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/asset_types.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Google notifies the advertiser of leads by making HTTP calls to an
 * endpoint they specify. The requests contain JSON matching a schema that
 * Google publishes as part of form ads documentation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.WebhookDelivery</code>
 */
class WebhookDelivery extends \Google\Protobuf\Internal\Message
{
    /**
     * Webhook url specified by advertiser to send the lead.
     *
     * Generated from protobuf field <code>optional string advertiser_webhook_url = 4;</code>
     */
    protected $advertiser_webhook_url = null;
    /**
     * Anti-spoofing secret set by the advertiser as part of the webhook payload.
     *
     * Generated from protobuf field <code>optional string google_secret = 5;</code>
     */
    protected $google_secret = null;
    /**
     * The schema version that this delivery instance will use.
     *
     * Generated from protobuf field <code>optional int64 payload_schema_version = 6;</code>
     */
    protected $payload_schema_version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $advertiser_webhook_url
     *           Webhook url specified by advertiser to send the lead.
     *     @type string $google_secret
     *           Anti-spoofing secret set by the advertiser as part of the webhook payload.
     *     @type int|string $payload_schema_version
     *           The schema version that this delivery instance will use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Webhook url specified by advertiser to send the lead.
     *
     * Generated from protobuf field <code>optional string advertiser_webhook_url = 4;</code>
     * @return string
     */
    public function getAdvertiserWebhookUrl()
    {
        return isset($this->advertiser_webhook_url) ? $this->advertiser_webhook_url : '';
    }

    public function hasAdvertiserWebhookUrl()
    {
        return isset($this->advertiser_webhook_url);
    }

    public function clearAdvertiserWebhookUrl()
    {
        unset($this->advertiser_webhook_url);
    }

    /**
     * Webhook url specified by advertiser to send the lead.
     *
     * Generated from protobuf field <code>optional string advertiser_webhook_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAdvertiserWebhookUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->advertiser_webhook_url = $var;

        return $this;
    }

    /**
     * Anti-spoofing secret set by the advertiser as part of the webhook payload.
     *
     * Generated from protobuf field <code>optional string google_secret = 5;</code>
     * @return string
     */
    public function getGoogleSecret()
    {
        return isset($this->google_secret) ? $this->google_secret : '';
    }

    public function hasGoogleSecret()
    {
        return isset($this->google_secret);
    }

    public function clearGoogleSecret()
    {
        unset($this->google_secret);
    }

    /**
     * Anti-spoofing secret set by the advertiser as part of the webhook payload.
     *
     * Generated from protobuf field <code>optional string google_secret = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setGoogleSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->google_secret = $var;

        return $this;
    }

    /**
     * The schema version that this delivery instance will use.
     *
     * Generated from protobuf field <code>optional int64 payload_schema_version = 6;</code>
     * @return int|string
     */
    public function getPayloadSchemaVersion()
    {
        return isset($this->payload_schema_version) ? $this->payload_schema_version : 0;
    }

    public function hasPayloadSchemaVersion()
    {
        return isset($this->payload_schema_version);
    }

    public function clearPayloadSchemaVersion()
    {
        unset($this->payload_schema_version);
    }

    /**
     * The schema version that this delivery instance will use.
     *
     * Generated from protobuf field <code>optional int64 payload_schema_version = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPayloadSchemaVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->payload_schema_version = $var;

        return $this;
    }

}

