<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'overblog_graphql.mutation_resolver' shared service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/ResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/AbstractResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/AbstractProxyResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/MutationResolver.php';

return $this->services['overblog_graphql.mutation_resolver'] = new \Overblog\GraphQLBundle\Resolver\MutationResolver();
