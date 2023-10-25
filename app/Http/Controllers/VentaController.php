<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VentaController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $ventas = Venta::all();

            return $this->sendResponse("Ventas recuperadas correctamente", $ventas);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
