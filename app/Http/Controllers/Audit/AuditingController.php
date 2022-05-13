<?php

namespace App\Http\Controllers\Audit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use \OwenIt\Auditing\Models\Audit;

class AuditingController extends Controller
{
    public function getUserAudits($id)
    {
        $audits = Audit::where('user_id', $id)->with('user')->latest()->get();
        return response()->json(["status"=> "success", "audits" => $audits], 200);
    }
    public function getAudit($id)
    {
        $audits = Audit::where('id',$id)->with('user')->get();
        return response()->json(["status"=> "success", "audits" => $audits], 200);
    }

    public function getAllAudits()
    {
        $audits = Audit::with('user')->latest()->get();
        return response()->json(["status"=> "success", "audits" => $audits], 200);
    }


}
