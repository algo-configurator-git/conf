<?php

namespace App\Controllers;

use App\Services\AssemblyService;
use CodeIgniter\Controller;

class CatalogController extends Controller
{
    protected AssemblyService $assemblyService;
    protected int $paginate;
    protected string $orderBy;

    public function __construct()
    {
        $this->assemblyService = service('assemblyService');
        $this->paginate = 9;
        $this->orderBy = "rating";
    }
    public function index($type)
    {
        $validTypes = ['all', 'home', 'office', 'gamer', 'developer', 'designer'];

        if (!in_array($type, $validTypes)) {
            return redirect()->to('/catalog/all'); // Редирект, если тип неверный
        }

        $sort = $this->request->getGet('sort');

        $this->orderBy = match ($sort) {
            'rating' => 'average_rating DESC',
            'new'     => 'created_at DESC',
            'price'   => 'price ASC',
            default   => 'average_rating DESC',
        };

        $assemblies = $this->assemblyService
            ->getAssembliesByType($type, $this->orderBy) ?? [];

        $popularAssemblies = $this->assemblyService
            ->getTop6PopularAssemblies();

        return view('catalog/index', [
            'assemblies' => $assemblies,
            'popularAssemblies' => $popularAssemblies,
            'type' => $type,
            'sort' => $sort,
        ]);
    }

    public function toCart(int $assemblyId): void
    {
        $session = session();
        $cart = $this->getCart();
        $cart[] = $this->assemblyService->getAssembly($assemblyId);
        $session->set('cart', $cart);
    }

    public function getCart(): array
    {
        $session = session();
        return $session->get('cart') ?? [];
    }

    public function removeFromCart(int $index): void
    {
        $session = session();
        $cart = $this->getCart();

        if (isset($cart[$index])) {
            unset($cart[$index]);
            $session->set('cart', array_values($cart)); // Убираем пустые индексы
        }
    }

    public function clearCart(): void
    {
        session()->remove('cart');
    }
}