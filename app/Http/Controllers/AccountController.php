<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\account;

class AccountController extends Controller
{
  public function show(){
    return Account::all();
  }
}
