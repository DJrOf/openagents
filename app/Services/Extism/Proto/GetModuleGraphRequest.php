<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace App\Services\Extism\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `POST /api/v1/module_graph:`
 * Return a single module_graph.
 *
 * Generated from protobuf message <code>GetModuleGraphRequest</code>
 */
class GetModuleGraphRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 module_id = 1;</code>
     */
    protected $module_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $module_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 module_id = 1;</code>
     * @return int|string
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * Generated from protobuf field <code>int64 module_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setModuleId($var)
    {
        GPBUtil::checkInt64($var);
        $this->module_id = $var;

        return $this;
    }

}
