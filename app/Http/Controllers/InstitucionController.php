<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class InstitucionController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $page = request()->query("page", 1);
            $limit = request()->query("limit", 10);
            $search = request()->query("search", null);

            $instituciones = Institucion::
                when(
                    $search,
                    function ($query, $search) {
                        return $query->where("INS_NOMBRE", "LIKE", "%{$search}%")
                            ->orWhere("INS_NOMBRE_JURIDICO", "LIKE", "%{$search}%")
                            ->orWhere("INS_NOMBRE_COMERCIAL", "LIKE", "%{$search}%");
                    }
                )
                ->paginate($limit, ["*"], "page", $page);

            return $this->sendResponse("Instituciones recuperadas correctamente", $instituciones);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function create(Request $request): JsonResponse
    {
        try {
            $validated = Validator::make($request->all(), [
                "CIU_CODIGO" => "required|integer|exists:CIUDAD,CIU_CODIGO",
                "TIP_INS_CODIGO" => "required|integer|exists:TIPO_INSTITUCION,TIP_INS_CODIGO",
                "CIC_CODIGO" => "required|integer|exists:CICLO,CIC_CODIGO",
                "INS_NOMBRE" => "required|string|max:200",
                "INS_DIRECCION" => "required|string|max:300",
                "INS_TELEFONO" => "required|string|max:20",
                "INS_ALIAS" => "required|string|max:50",
                "INS_MAIL" => "required|string|max:200",
                "INS_SITIO_WEB" => "required|string|max:200",
                "INS_NOMBRE_JURIDICO" => "required|string|max:200",
                "INS_NOMBRE_COMERCIAL" => "required|string|max:200",
                "INS_REPRESENTANTE_LEGAL" => "required|string|max:200",
                "INS_RUC" => "required|string|max:50",
                "INS_SECTOR" => "required|string|max:500",
            ]);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
