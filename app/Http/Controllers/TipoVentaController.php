<?php

namespace App\Http\Controllers;

use App\Models\TipoVenta;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class TipoVentaController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $tipoVentas = TipoVenta::all();

            return $this->sendResponse("Tipo ventas recuperadas correctamente", $tipoVentas);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function create(Request $request): JsonResponse
    {
        try {
            $validated = Validator::make($request->all(), [
                "TIP_VEN_NOMBRE" => "required|string|max:50|unique:TIPO_VENTA",
                "TIP_VEN_DESCRIPCION" => "required|string|max:250",
            ]);

            if ($validated->fails()) {
                return $this->sendError("Error de validación", $validated->errors(), Response::HTTP_BAD_REQUEST);
            }

            $tipoVenta = TipoVenta::create($request->all());

            return $this->sendResponse("Tipo venta creada correctamente", $tipoVenta, Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
