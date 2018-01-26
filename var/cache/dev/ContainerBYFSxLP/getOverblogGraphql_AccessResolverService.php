<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'overblog_graphql.access_resolver' shared service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/AccessResolver.php';
include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Executor/Promise/PromiseAdapter.php';
include_once $this->targetDirs[3].'/vendor/webonyx/graphql-php/src/Executor/Promise/Adapter/SyncPromiseAdapter.php';

return $this->services['overblog_graphql.access_resolver'] = new \Overblog\GraphQLBundle\Resolver\AccessResolver(($this->privates['overblog_graphql.promise_adapter.default'] ?? $this->privates['overblog_graphql.promise_adapter.default'] = new \GraphQL\Executor\Promise\Adapter\SyncPromiseAdapter()));