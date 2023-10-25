<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class VentaController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $limit = request()->query("limit", 10);
            $page = request()->query("page", 1);

            $ventas = Venta::paginate($limit, ["*"], "page", $page);

            return $this->sendResponse("Ventas recuperadas correctamente", $ventas);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
