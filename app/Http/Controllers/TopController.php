<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //DB接続

class TopController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sample テキストです。";

        $records = DB::connection('mysql')->select("select * from items");
        $name = $records[0]->name;

        // $inserResurt = DB::connection("mysql")->insert("insert into items (id,name,price) value (null,'いちご',2000)");
        // dd( $inserResurt );

        // $updateResurt = DB::connection("mysql")->update("update items set price = 5000 where name = 'いちご'");
        // dd( $updateResurt );

        $deleteResult = DB::connection("mysql")->delete("delete from items where name = 'メロン'");
        dd( $deleteResult );

        return view("top/index" , ["sampleValue" => $sampleValue ]);
    }
}

?>