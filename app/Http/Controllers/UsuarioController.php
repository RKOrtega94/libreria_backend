<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    /**
     * Get all users
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $usuarios = Usuario::all();

            return $this->sendResponse("Usuarios recuperados correctamente", $usuarios);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
