<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

class TestController extends AbstractController
{
    #[Route('/test/{name}', name: 'app_test')]
    public function index(Request $request, string $name ="GAI"): Response
    {
       //$name = $request->attributes->get(key: 'name');
        //$page = $request->query->getInt(key: 'page', default: 1);
        //$name = $request->query->get(key: 'name');
        //dd($request);
        $html = <<<EOF
<HTML>
<head>
<title>第一个页面</title>
</head>
<body>
<h1>$name </h1>
</body>
</HTML>
EOF;

        return new Response($html);
    }
}
