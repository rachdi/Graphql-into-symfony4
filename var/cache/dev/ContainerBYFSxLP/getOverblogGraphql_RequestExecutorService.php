<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'overblog_graphql.request_executor' shared service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Executor/ExecutorInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Executor/Executor.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Error/ErrorHandler.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Definition/Builder/SchemaBuilder.php';
include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Type/Schema.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Request/Executor.php';
include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Executor/Promise/PromiseAdapter.php';
include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Executor/Promise/Adapter/SyncPromiseAdapter.php';

$a = new \Overblog\GraphQLBundle\Error\ErrorHandler(NULL, ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()), array(), false);
$a->setUserWarningClass('Overblog\\GraphQLBundle\\Error\\UserWarning');
$a->setUserErrorClass('Overblog\\GraphQLBundle\\Error\\UserError');

$this->services['overblog_graphql.request_executor'] = $instance = new \Overblog\GraphQLBundle\Request\Executor(new \Overblog\GraphQLBundle\Executor\Executor(), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), true, $a, false, ($this->privates['overblog_graphql.promise_adapter.default'] ?? $this->privates['overblog_graphql.promise_adapter.default'] = new \GraphQL\Executor\Promise\Adapter\SyncPromiseAdapter()), $this->parameters['overblog_graphql.default_resolver']);

$instance->setMaxQueryComplexity(false);
$instance->setMaxQueryDepth(false);
$instance->addSchema('default', (new \Overblog\GraphQLBundle\Definition\Builder\SchemaBuilder(($this->services['overblog_graphql.type_resolver'] ?? $this->load(__DIR__.'/getOverblogGraphql_TypeResolverService.php')), true))->create('Query', NULL, NULL));

return $instance;
