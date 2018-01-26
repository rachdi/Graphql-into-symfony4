<?php

namespace App\GraphQL\Resolver;

use App\Entity\Product;
use Doctrine\ORM\EntityManager;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

class ProductListResolver implements ResolverInterface, AliasedInterface {
    private $em;
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function resolve(Argument $args)
    {
        $products = $this->em->getRepository(Product::class)->findBy(
            [],
            ['id' => 'desc'],
            $args['limit'],
            0
        );
        return ['products' => $products];
    }

    public static function getAliases()
    {
        return [
            'resolve' => 'ProductList'
        ];
    }
}
