<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClienteController extends Controller
{
    /**
     * Get all clients
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $search = request()->query("search", null);
            $limit = request()->query("limit", 10);
            $page = request()->query("page", 1);

            $clientes = Cliente::when($search, function ($query) use ($search) {
                $query->where("CLI_CI", "like", "%{$search}%")
                    ->orWhere("CLI_APELLIDOS", "like", "%{$search}%")
                    ->orWhere("CLI_APELLIDOS", "like", "%{$search}%")
                    ->orWhere("CLI_EMAIL", "like", "%{$search}%");
            })->paginate($limit, ["*"], "page", $page);

            return $this->sendResponse("Clientes recuperados correctamente", $clientes);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
