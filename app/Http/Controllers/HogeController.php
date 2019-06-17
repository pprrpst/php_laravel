<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HogeController extends Controller
{
	public function getIndex() {}
 
    public function getCreate() {
		print_r(\Request::all());
		print_r($_GET);
	}
 
    public function postStore() {}
 
    public function getShow($id) {}
 
    public function getEdit($id) {}
 
    public function patchUpdate($id) {}
 
    public function deleteDestroy($id) {}
 
    public function noneRoutedMethod() {} // ルーティングされない
}
