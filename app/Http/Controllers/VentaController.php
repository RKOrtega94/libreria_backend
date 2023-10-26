<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $tipo = request()->query("tipo", null);
            $limit = request()->query("limit", 10);
            $page = request()->query("page", 1);

            $ventas = Venta::with(["tipoVenta"])
                ->when($tipo, function ($query, $tipo) {
                    return $query->where("TIP_VEN_CODIGO", $tipo);
                })
                ->paginate($limit, ["*"], "page", $page);

            return $this->sendResponse("Ventas recuperadas correctamente", $ventas);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
