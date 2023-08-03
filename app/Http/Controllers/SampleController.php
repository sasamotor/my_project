<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //DB接続

class SampleController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sample テキストです。";

        // $inserResurt = DB::connection("mysql")->insert("insert into usersA (id,email,name,password) value (null,'vvv','伊藤','qrst')");
        // dd( $inserResurt );

        $deleteResult = DB::connection("mysql")->delete("delete from usersA where name = '田中'");
        dd( $deleteResult );

        return view("top/index" , ["sampleValue" => $sampleValue ]);
    }
}

?>