<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ModuleController extends AbstractController
{
    #[Route('/modules', name: 'module_list')]
    public function list()
    {
        $modules = [];

        return $this->render('module-list.html.twig', [
            'modules' => $modules
        ]);

    }
}