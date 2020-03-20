<?php



namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
  public function show(){
    return account::all();
  }
}
