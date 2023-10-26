<?php

namespace App\Http\Controllers;

use App\Models\OrdenTrabajo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrdenTrabajoController extends Controller
{
    /**
     * Obtener todas las ordenes de trabajo
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $page = request()->query("page", 1);
            $limit = request()->query("limit", 10);
            $ordenes = OrdenTrabajo::orderBy("OR_FECHA", "DESC")
                ->orderBy("OR_CODIGO", "DESC")
                ->paginate($limit, ["*"], "page", $page);

            return $this->sendResponse("Ordenes de trabajo recuperadas correctamente", $ordenes);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
