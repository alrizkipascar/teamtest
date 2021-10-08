<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class EmailController extends Controller
{
    /**
     * Retrieve countries data
     *
     * @return void
     */
    // public function getEmail()
    // {
    //     $data = User::get();
    //     return response()->json($data);
    // }
    /**
     * Retrieve states data
     *
     */
    public function getEmail(Request $request)
    {
        $data = User::where('email', $request->country_id)->get();
        return response()->json($data);
    }
}
