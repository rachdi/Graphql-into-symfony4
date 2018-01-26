<?php

namespace App\Controller;

use App\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * @Route("/product", name="product")
     */
    public function index()
    {
       $em = $this->getDoctrine()->getManager();

       $products = $this->getDoctrine()->getRepository(Product::class)->findAll();

        // tell Doctrine you want to (eventually) save the Product (no queries yet)

        // actually executes the queries (i.e. the INSERT query)
            return $this->render('product.html.twig', [
               'product' => $products]);
    }
}
