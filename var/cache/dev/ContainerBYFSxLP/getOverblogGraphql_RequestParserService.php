<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'overblog_graphql.request_parser' shared service.

include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Request/ParserInterface.php';
include_once $this->targetDirs[3].'/vendor/overblog/graphql-bundle/Request/Parser.php';

return $this->services['overblog_graphql.request_parser'] = new \Overblog\GraphQLBundle\Request\Parser();
