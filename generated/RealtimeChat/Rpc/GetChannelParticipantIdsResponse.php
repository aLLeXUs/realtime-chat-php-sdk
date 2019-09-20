<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelService.proto

namespace RealtimeChat\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>realtimeChat.rpc.GetChannelParticipantIdsResponse</code>
 */
class GetChannelParticipantIdsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.realtimeChat.rpc.models.Status status = 1;</code>
     */
    private $status = null;
    /**
     * Generated from protobuf field <code>repeated int32 data = 2;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RealtimeChat\Rpc\Models\Status $status
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ChannelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.realtimeChat.rpc.models.Status status = 1;</code>
     * @return \RealtimeChat\Rpc\Models\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.realtimeChat.rpc.models.Status status = 1;</code>
     * @param \RealtimeChat\Rpc\Models\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \RealtimeChat\Rpc\Models\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 data = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>repeated int32 data = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->data = $arr;

        return $this;
    }

}
