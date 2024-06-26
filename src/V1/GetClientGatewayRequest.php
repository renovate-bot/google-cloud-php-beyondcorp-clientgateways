<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/clientgateways/v1/client_gateways_service.proto

namespace Google\Cloud\BeyondCorp\ClientGateways\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for getting a ClientGateway.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.clientgateways.v1.GetClientGatewayRequest</code>
 */
class GetClientGatewayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the resource
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Name of the resource
     *                     Please see {@see ClientGatewaysServiceClient::clientGatewayName()} for help formatting this field.
     *
     * @return \Google\Cloud\BeyondCorp\ClientGateways\V1\GetClientGatewayRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Clientgateways\V1\ClientGatewaysService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the resource
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the resource
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

