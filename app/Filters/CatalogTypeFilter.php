<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class CatalogTypeFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $validTypes = ['all', 'home', 'office', 'gamer', 'developer', 'designer'];
        $uri = service('uri');
        $type = $uri->getSegment(2);

        if (!in_array($type, $validTypes)) {
            return redirect()->to('/catalog/all');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}
