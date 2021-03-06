<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'overblog_graphql.resolver_resolver' shared service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/ResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/AbstractResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/AbstractProxyResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/ResolverResolver.php';

$this->services['overblog_graphql.resolver_resolver'] = $instance = new \Overblog\GraphQLBundle\Resolver\ResolverResolver();

$instance->addSolution('App\\GraphQL\\Resolver\\ProductListResolver::resolve', array(0 => $this, 1 => 'get'), array(0 => 'App\\GraphQL\\Resolver\\ProductListResolver'), array('alias' => 'App\\GraphQL\\Resolver\\ProductListResolver::resolve', 'method' => 'resolve', 'id' => 'App\\GraphQL\\Resolver\\ProductListResolver'));
$instance->addSolution('ProductList', array(0 => $this, 1 => 'get'), array(0 => 'App\\GraphQL\\Resolver\\ProductListResolver'), array('alias' => 'ProductList', 'method' => 'resolve', 'id' => 'App\\GraphQL\\Resolver\\ProductListResolver'));
$instance->addSolution('App\\GraphQL\\Resolver\\ProductResolver::resolve', array(0 => $this, 1 => 'get'), array(0 => 'App\\GraphQL\\Resolver\\ProductResolver'), array('alias' => 'App\\GraphQL\\Resolver\\ProductResolver::resolve', 'method' => 'resolve', 'id' => 'App\\GraphQL\\Resolver\\ProductResolver'));
$instance->addSolution('Product', array(0 => $this, 1 => 'get'), array(0 => 'App\\GraphQL\\Resolver\\ProductResolver'), array('alias' => 'Product', 'method' => 'resolve', 'id' => 'App\\GraphQL\\Resolver\\ProductResolver'));
$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver'), array('alias' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver', 'method' => '__invoke', 'id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver'));
$instance->addSolution('relay_mutation_field', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver'), array('alias' => 'relay_mutation_field', 'method' => '__invoke', 'id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Mutation\\MutationFieldResolver'));
$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver'), array('alias' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver', 'method' => '__invoke', 'id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver'));
$instance->addSolution('relay_node_field', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver'), array('alias' => 'relay_node_field', 'method' => '__invoke', 'id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\NodeFieldResolver'));
$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver'), array('alias' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver', 'method' => '__invoke', 'id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver'));
$instance->addSolution('relay_globalid_field', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver'), array('alias' => 'relay_globalid_field', 'method' => '__invoke', 'id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\GlobalIdFieldResolver'));
$instance->addSolution('Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver'), array('alias' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver', 'method' => '__invoke', 'id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver'));
$instance->addSolution('relay_plural_identifying_field', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver'), array('alias' => 'relay_plural_identifying_field', 'method' => '__invoke', 'id' => 'Overblog\\GraphQLBundle\\GraphQL\\Relay\\Node\\PluralIdentifyingRootFieldResolver'));

return $instance;
