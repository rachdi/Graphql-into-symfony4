<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'overblog_graphql.type_resolver' shared service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/ResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/AbstractResolver.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Resolver/TypeResolver.php';

$this->services['overblog_graphql.type_resolver'] = $instance = new \Overblog\GraphQLBundle\Resolver\TypeResolver(NULL);

$instance->addSolution('String', array(0 => $this, 1 => 'get'), array(0 => 'overblog_graphql.definition.string_type'), array('alias' => 'String', 'id' => 'overblog_graphql.definition.string_type'));
$instance->addSolution('GraphQL\\Type\\Definition\\StringType', array(0 => $this, 1 => 'get'), array(0 => 'overblog_graphql.definition.string_type'), array('alias' => 'GraphQL\\Type\\Definition\\StringType', 'id' => 'overblog_graphql.definition.string_type'));
$instance->addSolution('Int', array(0 => $this, 1 => 'get'), array(0 => 'overblog_graphql.definition.int_type'), array('alias' => 'Int', 'id' => 'overblog_graphql.definition.int_type'));
$instance->addSolution('GraphQL\\Type\\Definition\\IntType', array(0 => $this, 1 => 'get'), array(0 => 'overblog_graphql.definition.int_type'), array('alias' => 'GraphQL\\Type\\Definition\\IntType', 'id' => 'overblog_graphql.definition.int_type'));
$instance->addSolution('Float', array(0 => $this, 1 => 'get'), array(0 => 'overblog_graphql.definition.float_type'), array('alias' => 'Float', 'id' => 'overblog_graphql.definition.float_type'));
$instance->addSolution('GraphQL\\Type\\Definition\\FloatType', array(0 => $this, 1 => 'get'), array(0 => 'overblog_graphql.definition.float_type'), array('alias' => 'GraphQL\\Type\\Definition\\FloatType', 'id' => 'overblog_graphql.definition.float_type'));
$instance->addSolution('Boolean', array(0 => $this, 1 => 'get'), array(0 => 'overblog_graphql.definition.boolean_type'), array('alias' => 'Boolean', 'id' => 'overblog_graphql.definition.boolean_type'));
$instance->addSolution('GraphQL\\Type\\Definition\\BooleanType', array(0 => $this, 1 => 'get'), array(0 => 'overblog_graphql.definition.boolean_type'), array('alias' => 'GraphQL\\Type\\Definition\\BooleanType', 'id' => 'overblog_graphql.definition.boolean_type'));
$instance->addSolution('ID', array(0 => $this, 1 => 'get'), array(0 => 'overblog_graphql.definition.id_type'), array('alias' => 'ID', 'id' => 'overblog_graphql.definition.id_type'));
$instance->addSolution('GraphQL\\Type\\Definition\\IDType', array(0 => $this, 1 => 'get'), array(0 => 'overblog_graphql.definition.id_type'), array('alias' => 'GraphQL\\Type\\Definition\\IDType', 'id' => 'overblog_graphql.definition.id_type'));
$instance->addSolution('PageInfo', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType'), array('alias' => 'PageInfo', 'generated' => true, 'id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType'));
$instance->addSolution('Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType'), array('alias' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType', 'generated' => true, 'id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\PageInfoType'));
$instance->addSolution('ProductList', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductListType'), array('alias' => 'ProductList', 'generated' => true, 'id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductListType'));
$instance->addSolution('Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductListType', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductListType'), array('alias' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductListType', 'generated' => true, 'id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductListType'));
$instance->addSolution('Query', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType'), array('alias' => 'Query', 'generated' => true, 'id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType'));
$instance->addSolution('Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType'), array('alias' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType', 'generated' => true, 'id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\QueryType'));
$instance->addSolution('Product', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductType'), array('alias' => 'Product', 'generated' => true, 'id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductType'));
$instance->addSolution('Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductType', array(0 => $this, 1 => 'get'), array(0 => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductType'), array('alias' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductType', 'generated' => true, 'id' => 'Overblog\\GraphQLBundle\\__DEFINITIONS__\\ProductType'));

return $instance;
