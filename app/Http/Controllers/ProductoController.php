<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductoController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $page = request()->query("page", 1);
            $limit = request()->query("limit", 10);
            $search = request()->query("search", null);

            $productos = Producto::when($search, function ($query, $search) {
                $query->where("PRO_NOMBRE", "LIKE", "%{$search}%")
                    ->orWhere("PRO_DESCRIPCION", "LIKE", "%{$search}%");
            })
                ->paginate($limit, ["*"], "page", $page);

            return $this->sendResponse("Productos recuperados correctamente", $productos);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
