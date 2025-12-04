<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showAdmin()
    {
        $admin = DB::table('admins')->get();
        // $admin = DB::table('admins')->where('id',5)->get();
        // $admin = DB::table('admins')->find(6);
        // $admin = DB::table('admins')->select('email')->get();    //this is for selected column
        //$admin = DB::table('admins')->select('email')->distinct()->get();    
        //this is for selected column and also it does uniq value single time show
        //$admin = DB::table('admins')->plunk('admin_name') //it also same as select it's laravel's method
        // return $admin;
        return view('admin-list', ['admin' => $admin]);
    }
    public function singleAdmin($id)
    {
        $admin = DB::table('admins')->where('id', $id)->get();
        return view('single-admin', ['admin' => $admin]);
    }

    public function addAdmin()
    {
        // $admin = DB::table('admins')->insert([
        //  $admin = DB::table('admins')->insertOrIgnore( [
        $admin = DB::table('admins')->upsert(
            [
                'admin_name' => 'Ramesh Roshan',
                'email' => 'rajeshrosan@gmai.com',
                'created_at' => now(),
                'updated_at' => now()
            ],
            ['email']
        );
        if ($admin) {
            echo "<h2>Data added</h2>";
        } else {
            echo "<h2>Data not added</h2>";
        }
    }

    public function updateAdmin()
    {
        $admin = DB::table('admins')->where('id', 28)->update([
            'admin_name' => 'Rajesh R'
        ]);

        if ($admin) {
            echo "<h2>Data updated</h2>";
        } else {
            echo "<h2>Data not updated</h2>";
        }
    }

    public function deleteAdmin($id)
    {
        $admin = DB::table('admins')
            ->where('id', $id)
            ->delete();

        if ($admin) {
            return redirect()->route('admin.show');
        }
    }

}
