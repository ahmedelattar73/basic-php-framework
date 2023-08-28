<?php

namespace Product\Controller;

use Product\Model\LeapYear;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductsController
{
    public function list(Request $request)
    {
        $leapYear = new LeapYear();
        $data = $leapYear->listProducts();

        return new JsonResponse(['data' => $data]);
//        return new Response($data);
    }

    public function show(Request $request, int $id)
    {
        $leapYear = new LeapYear();
        $data = $leapYear->getProductById($id);

        return new Response('33');
        return new JsonResponse(['data' => $data]);
//        return new Response($data);
    }
}