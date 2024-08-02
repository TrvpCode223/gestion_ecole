<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Payment::class);
        $payments = Payment::all();
        return response()->json($payments);
    }

    public function show($id)
    {
        $payment = Payment::find($id);
        if ($payment) {
            $this->authorize('view', $payment);
            return response()->json($payment);
        } else {
            return response()->json(['error' => 'Payment not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $this->authorize('create', Payment::class);

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
            'status' => 'required|string|in:pending,completed,failed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $payment = Payment::create($request->all());

        return response()->json(['message' => 'Payment created successfully', 'payment' => $payment], 201);
    }

    public function update(Request $request, $id)
    {
        $payment = Payment::find($id);
        if ($payment) {
            $this->authorize('update', $payment);

            $validator = Validator::make($request->all(), [
                'amount' => 'required|numeric',
                'description' => 'nullable|string',
                'status' => 'required|string|in:pending,completed,failed',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $payment->update($request->all());

            return response()->json(['message' => 'Payment updated successfully', 'payment' => $payment], 200);
        } else {
            return response()->json(['error' => 'Payment not found'], 404);
        }
    }

    public function destroy($id)
    {
        $payment = Payment::find($id);
        if ($payment) {
            $this->authorize('delete', $payment);
            $payment->delete();
            return response()->json(['message' => 'Payment deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Payment not found'], 404);
        }
    }
}
