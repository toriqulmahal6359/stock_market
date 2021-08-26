<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function addStock(){
        return view('add-stock');
    }

    public function createStock(Request $request)
    {
        $stock = new Stock();
        $stock->date = $request->date;
        $stock->trade_code = $request->trade_code;
        $stock->high = $request->high;
        $stock->low = $request->low;
        $stock->open = $request->open;
        $stock->close = $request->close;
        $stock->volume = $request->volume;
        $stock->save();

        return back()->with("stock_created", "The Stock has been created Successfully !!!");

    }

    public function editStock($id)
    {
        $stock = Stock::find($id);
        return view('edit-stock', compact('stock'));
    }

    public function updateStock(Request $request)
    {
        $update_stock = Stock::find($request->id);
        $update_stock->date = $request->date;
        $update_stock->trade_code = $request->trade_code;
        $update_stock->high = $request->high;
        $update_stock->low = $request->low;
        $update_stock->open = $request->open;
        $update_stock->close = $request->close;
        $update_stock->volume = $request->volume;
        $update_stock->save();

        return back()->with("stock_updated", "The Stock has been Updated Successfully !!!");

    }

    public function getStock()
    {
        $stocks = Stock::orderBy('id', 'DESC')->get();
        return view('stocks', compact('stocks'));
    }

    public function deleteStock($id)
    {
        Stock::where('id', $id)->delete();
        return back()->with('stock_deleted', "Stock has been deleted Successfully !!!");
    }
}
