<?php

namespace Grocy\Middleware;

use Grocy\Services\ApplicationService;
use DI\Container;
use Psr\Http\Message\ResponseFactoryInterface;

class BaseMiddleware
{
	public function __construct(Container $container, ResponseFactoryInterface $responseFactory)
	{
		$this->AppContainer = $container;
		$this->ResponseFactory = $responseFactory;
		$this->ApplicationService = ApplicationService::getInstance();
	}

	protected $AppContainer;
	protected $ResponseFactory;
	protected $ApplicationService;
}
