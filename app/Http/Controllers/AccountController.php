<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index(){
        $accounts = Account::all();
        return view('accounts.index', ['accounts'=>$accounts]);
    }

    public function create(){
        return view('accounts.create');
    }

    public function list(Request $request){
        $data = $request->validate([
            'hming' => 'required',
            'kum' => 'required|numeric',
            'gender' => 'required',
            'veng' => 'required'
        ]);

        // for saving to database automatically use $data
        \Log::info('Request data:', $data);
        $newAccount = Account::create($data);
        return redirect(route('account.index'));
    }
    public function edit(Account $account) {
        return view('accounts.edit', ['account'=>$account]);
    }

    public function update(Account $account , Request $request ){
        $data = $request->validate([
            'hming' => 'required',
            'kum' => 'required|numeric',
            'gender' => 'required|decimal:0,2',
            'veng' => 'nullable'

        ]);
        //to call a account
        $account -> update($data);

        return redirect(route('account.index'))->with('success', 'account Updated Successfully');

    }

    public function destroy(Account $account){
        $account->delete();
        return redirect(route('account.index'))->with('success', 'account Deleted Successfully');
    }
}


