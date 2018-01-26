<?php
namespace App\GraphQL\Resolver;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManager;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

class ProductResolver implements ResolverInterface, AliasedInterface {

    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function resolve(Argument $args)
    {
        $product = $this->em->getRepository('App:Product')->find($args['id']);
        return $product;
    }

    public static function getAliases()
    {
        return [
            'resolve' => 'Product'
        ];
    }
}
