<?php

namespace App\Controller;

use App\Entity\Product;
use Faker\Factory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Cache\Simple\FilesystemCache;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends Controller
{
    /**
     * @Route(path="/", name="test")
     */
    public function indexAction(){

        $faker = Factory::create();

        return $this->render('article.html.twig',
            ['Id' => $faker->uuid(),
            'title' => $faker->title(),
            'name' => $faker->name(),
            'text' => $faker->text()
            ]);
    }

}
