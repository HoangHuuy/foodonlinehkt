<?php
use App\User;
use App\Seller;
use Illuminate\Support\Facades\Auth;
function getIdUser()
{
    $username = Auth::user()->username;
    $username1 = User::query()->where('username', $username)->get();
    return isset($username1[0]->id) ? $username1[0]->id : ' ';
}
function getIdSeller()
{
    $username = Auth::user()->username;
    $username1 = Seller::query()->where('username', $username)->get();
    return isset($username1[0]->id) ? $username1[0]->id : ' ';
}
?>
