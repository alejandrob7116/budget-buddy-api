<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveExpenseRequest;
use App\Models\Expense;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ExpenseController extends Controller
{
    /**
     * mostrar la lista
     */
    public function index(): JsonResponse
    {
        $expenses = Expense::latest()->get();

        return response()->json($expenses, Response::HTTP_OK);
    }

    /**
     * pa almacenar un recurso recién creado en el almacenamiento.
     */
    public function store(SaveExpenseRequest $request): JsonResponse
    {
        $expense = Expense::create($request->validated());

        return response()->json($expense, Response::HTTP_CREATED);
    }

    /**
     * mostrar un recurso en especifdico
     */
    public function show(string $id): JsonResponse
    {
        $expense = Expense::findOrFail($id);

        return response()->json($expense, Response::HTTP_OK);
    }

    /**
     * actualizar el recurso en los datos
     */
    public function update(SaveExpenseRequest $request, string $id): JsonResponse
    {
        $expense = Expense::findOrFail($id);

        $expense->update($request->validated());

        return response()->json($expense, Response::HTTP_OK);
    }

    /**
     * remover un recurso de los datos
     */
    public function destroy(string $id): JsonResponse
    {
        $expense = Expense::findOrFail($id);

        $expense->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
