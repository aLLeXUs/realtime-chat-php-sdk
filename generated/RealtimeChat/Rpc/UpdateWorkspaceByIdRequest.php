<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: WorkspaceService.proto

namespace RealtimeChat\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>realtimeChat.rpc.UpdateWorkspaceByIdRequest</code>
 */
class UpdateWorkspaceByIdRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Generated from protobuf field <code>int32 owner_id = 4;</code>
     */
    private $owner_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type string $name
     *     @type string $description
     *     @type int $owner_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\WorkspaceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 owner_id = 4;</code>
     * @return int
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Generated from protobuf field <code>int32 owner_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOwnerId($var)
    {
        GPBUtil::checkInt32($var);
        $this->owner_id = $var;

        return $this;
    }

}

