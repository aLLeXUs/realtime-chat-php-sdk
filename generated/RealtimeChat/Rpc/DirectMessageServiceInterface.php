<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: DirectMessageService.proto

namespace RealtimeChat\Rpc;

/**
 * Protobuf type <code>realtimeChat.rpc.DirectMessageService</code>
 */
interface DirectMessageServiceInterface
{
    /**
     * Method <code>findById</code>
     *
     * @param \RealtimeChat\Rpc\FindDirectMessageByIdRequest $request
     * @return \RealtimeChat\Rpc\FindDirectMessageByIdResponse
     */
    public function findById(\RealtimeChat\Rpc\FindDirectMessageByIdRequest $request);

    /**
     * Method <code>create</code>
     *
     * @param \RealtimeChat\Rpc\CreateDirectMessageRequest $request
     * @return \RealtimeChat\Rpc\CreateDirectMessageResponse
     */
    public function create(\RealtimeChat\Rpc\CreateDirectMessageRequest $request);

    /**
     * Method <code>updateById</code>
     *
     * @param \RealtimeChat\Rpc\UpdateDirectMessageByIdRequest $request
     * @return \RealtimeChat\Rpc\UpdateDirectMessageByIdResponse
     */
    public function updateById(\RealtimeChat\Rpc\UpdateDirectMessageByIdRequest $request);

    /**
     * Method <code>deleteById</code>
     *
     * @param \RealtimeChat\Rpc\DeleteDirectMessageByIdRequest $request
     * @return \RealtimeChat\Rpc\DeleteDirectMessageByIdResponse
     */
    public function deleteById(\RealtimeChat\Rpc\DeleteDirectMessageByIdRequest $request);

}

