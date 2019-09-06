<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelMessageService.proto

namespace RealtimeChat\Rpc;

/**
 * Protobuf type <code>realtimeChat.rpc.ChannelMessageService</code>
 */
interface ChannelMessageServiceInterface
{
    /**
     * Method <code>findById</code>
     *
     * @param \RealtimeChat\Rpc\FindChannelMessageByIdRequest $request
     * @return \RealtimeChat\Rpc\FindChannelMessageByIdResponse
     */
    public function findById(\RealtimeChat\Rpc\FindChannelMessageByIdRequest $request);

    /**
     * Method <code>create</code>
     *
     * @param \RealtimeChat\Rpc\CreateChannelMessageRequest $request
     * @return \RealtimeChat\Rpc\CreateChannelMessageResponse
     */
    public function create(\RealtimeChat\Rpc\CreateChannelMessageRequest $request);

    /**
     * Method <code>updateById</code>
     *
     * @param \RealtimeChat\Rpc\UpdateChannelMessageByIdRequest $request
     * @return \RealtimeChat\Rpc\UpdateChannelMessageByIdResponse
     */
    public function updateById(\RealtimeChat\Rpc\UpdateChannelMessageByIdRequest $request);

    /**
     * Method <code>deleteById</code>
     *
     * @param \RealtimeChat\Rpc\DeleteChannelMessageByIdRequest $request
     * @return \RealtimeChat\Rpc\DeleteChannelMessageByIdResponse
     */
    public function deleteById(\RealtimeChat\Rpc\DeleteChannelMessageByIdRequest $request);

}

