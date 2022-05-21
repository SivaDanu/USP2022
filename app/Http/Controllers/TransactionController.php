<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('transactions')
        ->leftjoin('type_cars', 'type_cars.typecar', '=', 'transactions.type')
        ->get();
        return view('Transaction.index', ['data_transaction'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction = new Transaction();
        $transaction->fill($request->all());
        $transaction->save();

        return redirect()->route('transaction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('Transaction.index', ['transaction' => Transaction::findOrFail($id)]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail()
    {
        // $data = DB::table('transactions')
        // ->leftjoin('type_cars', 'type_cars.typecar', '=', 'transactions.type')
        // ->get();
        // $data = DB::table('transaction')->nota;
        // $data = ['nota' => $this->Transaction->detailtrans($nota)];
        // return view('Etc.income', ['data_transaction'=>$nota]);
        $data_print = DB::table('transactions')
        ->leftjoin('type_cars', 'type_cars.typecar', '=', 'transactions.type')
        ->get();
        return view('Etc.print', ['data_print'=>$data_print]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function income()
    {
        $data_income = DB::table('transactions')
        ->leftjoin('type_cars', 'type_cars.typecar', '=', 'transactions.type')
        ->get();
        return view('Etc.income', ['data_income'=>$data_income]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('Transaction.edit', ['transaction'=>$transaction]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $transaction->update($request->all());
        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transaction.index');
    }
}
