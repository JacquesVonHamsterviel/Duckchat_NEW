<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/api_platform_check.proto

namespace Zaly\Proto\Platform;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.ApiPlatformCheckResponse</code>
 */
class ApiPlatformCheckResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool needRegister = 1;</code>
     */
    private $needRegister = false;

    public function __construct() {
        \GPBMetadata\Platform\ApiPlatformCheck::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bool needRegister = 1;</code>
     * @return bool
     */
    public function getNeedRegister()
    {
        return $this->needRegister;
    }

    /**
     * Generated from protobuf field <code>bool needRegister = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedRegister($var)
    {
        GPBUtil::checkBool($var);
        $this->needRegister = $var;

        return $this;
    }

}
