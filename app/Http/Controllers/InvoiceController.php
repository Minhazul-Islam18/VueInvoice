<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function GetAllInvlices()
    {
        $invoices = Invoice::with('customer')->orderBy('id', 'DESC')->get();
        return response()->json([
            'invoices' => $invoices
        ], 200);
    }
    function search_invoices(Request $request)
    {
        $search = $request->get('s');
        if ($search != null) {
            $invoices = Invoice::with('customer')
                ->where('id', $search)
                ->get();
            return response()->json([
                'invoices' => $invoices
            ], 200);
        } else {
            return $this->GetAllInvlices();
        }
    }
}
