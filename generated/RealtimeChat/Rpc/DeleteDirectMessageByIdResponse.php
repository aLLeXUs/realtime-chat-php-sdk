<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: DirectMessageService.proto

namespace RealtimeChat\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>realtimeChat.rpc.DeleteDirectMessageByIdResponse</code>
 */
class DeleteDirectMessageByIdResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.realtimeChat.rpc.models.Status status = 1;</code>
     */
    private $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RealtimeChat\Rpc\Models\Status $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DirectMessageService::initOnce();
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

}
