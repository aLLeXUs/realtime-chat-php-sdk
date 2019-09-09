<?php

declare(strict_types=1);

namespace RealtimeChat;

use RealtimeChat\Rpc\CreateUserRequest;
use RealtimeChat\Rpc\CreateUserResponse;
use RealtimeChat\Rpc\DeleteUserByIdRequest;
use RealtimeChat\Rpc\DeleteUserByIdResponse;
use RealtimeChat\Rpc\FindUserByIdRequest;
use RealtimeChat\Rpc\FindUserByIdResponse;
use RealtimeChat\Rpc\FindUserByEmailRequest;
use RealtimeChat\Rpc\FindUserByEmailResponse;
use RealtimeChat\Rpc\Models\User;
use RealtimeChat\Rpc\UpdateUserByIdRequest;
use RealtimeChat\Rpc\UpdateUserByIdResponse;
use RealtimeChat\Rpc\UserServiceInterface;
use RealtimeChat\Rpc\VerifyUserPasswordRequest;
use RealtimeChat\Rpc\VerifyUserPasswordResponse;

class UserClient extends Client implements UserServiceInterface
{
    protected $route = 'users';

    public function findById(FindUserByIdRequest $request): User
    {
		$response = new FindUserByIdResponse();
        $response->mergeFromString($this->makeRequest($request, $this->route, 'findById'));

        $this->handleError($response->getStatus());

        return $response->getData();
	}
	
    public function findByEmail(FindUserByEmailRequest $request): User
    {
		$response = new FindUserByEmailResponse();
        $response->mergeFromString($this->makeRequest($request, $this->route, 'findByEmail'));

		$this->handleError($response->getStatus());

        return $response->getData();
    }

    public function create(CreateUserRequest $request): User
    {
        $response = new CreateUserResponse();
        $response->mergeFromString($this->makeRequest($request, $this->route, 'create'));

		$this->handleError($response->getStatus());

        return $response->getData();
    }

    public function updateById(UpdateUserByIdRequest $request): User
	{
		$response = new UpdateUserByIdResponse();
		$response->mergeFromString($this->makeRequest($request, $this->route, 'updateById'));

		$this->handleError($response->getStatus());

		return $response->getData();
	}

	public function deleteById(DeleteUserByIdRequest $request): bool
	{
		$response = new DeleteUserByIdResponse();
		$response->mergeFromString($this->makeRequest($request, $this->route, 'deleteById'));

		$this->handleError($response->getStatus());

		return true;
	}

	public function verifyPassword(VerifyUserPasswordRequest $request): bool
	{
		$response = new VerifyUserPasswordResponse();
		$response->mergeFromString($this->makeRequest($request, $this->route, 'verifyPassword'));

		$this->handleError($response->getStatus());

		return true;
	}
}