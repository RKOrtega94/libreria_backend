<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PaisController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $paises = Pais::all();

            return $this->sendResponse("Paises recuperados correctamente", $paises);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function create(Request $request): JsonResponse
    {
        try {
            $validated = Validator::make($request->all(), [
                "PAI_NOMBRE" => "required|string|max:50|unique:PAIS",
            ]);

            if ($validated->fails()) {
                return $this->sendError("Error de validación", $validated->errors(), Response::HTTP_BAD_REQUEST);
            }

            $pais = Pais::create($request->all());

            return $this->sendResponse("Pais creado correctamente", $pais, Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update($id, Request $request): JsonResponse
    {
        try {
            $validated = Validator::make($request->all(), [
                "PAI_NOMBRE" => "required|string|max:50|unique:PAIS,PAI_NOMBRE," . $id . ",PAI_CODIGO",
            ]);

            if ($validated->fails()) {
                return $this->sendError("Error de validación", $validated->errors(), Response::HTTP_BAD_REQUEST);
            }

            $pais = Pais::findOrFail($id);

            $pais->update($request->all());

            return $this->sendResponse("Pais actualizado correctamente", $pais, Response::HTTP_OK);
        } catch (ModelNotFoundException $e) {
            return $this->sendError("Pais no encontrado", null, Response::HTTP_NOT_FOUND);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function delete($id): JsonResponse
    {
        try {
            $pais = Pais::findOrFail($id);

            $pais->delete();

            return $this->sendResponse("Pais eliminado correctamente", null, Response::HTTP_OK);
        } catch (ModelNotFoundException $e) {
            return $this->sendError("Pais no encontrado", null, Response::HTTP_NOT_FOUND);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), null, Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
