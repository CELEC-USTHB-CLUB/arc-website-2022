<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Validator;

class UserController extends Controller {

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            "leader_name"           =>      "required",
            "email"                 =>      "required|email|unique:users,email",
            "phone_1"               =>      "required",
            "phone_2"               =>      "required",
            "from"                  =>      "required",
            "study_level_1"         =>      "required",
            "wilaya"                =>      "required",
            "participations_number" =>      "required|integer",
            "project"               =>      "required"
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
        User::create([
            "leader_name" => $request->leader_name,
            "email" => $request->email,
            "phone" => $request->phone_1."/".$request->phone_2,
            "wilaya" => $request->wilaya,
            "from"      => $request->from,
            "study_level_1" => $request->study_level_1,
            "member_2" => ($request->has("member_2") AND !empty($request->member_2)) ? $request->member_2 : null,
            "study_level_2" => ($request->has("study_level_2") AND !empty($request->study_level_2)) ? $request->study_level_2 : null,
            "member_3" => ($request->has("member_3") AND !empty($request->member_3)) ? $request->member_3 : null,
            "study_level_3" => ($request->has("study_level_3") AND !empty($request->study_level_3)) ? $request->study_level_3 : null,
            "member_4" => ($request->has("member_4") AND !empty($request->member_4)) ? $request->member_4 : null,
            "study_level_4" => ($request->has("study_level_4") AND !empty($request->study_level_4)) ? $request->study_level_1 : null,
            "participations_number" => $request->participations_number,
            "skills" => ($request->has("skills") AND !empty($request->skills)) ? $request->skills : "",
            "projects" => $request->project
        ]);
        return back()->withSuccess('Merci, votre inscription ?? ??t?? effectu??e avec succ??s, un e-mail de confirmation vous sera bient??t envoy??.');
    }

    public function update(Request $request) {
        User::findOrFail($request->id)->update($request->except("id", "created_at"));
        return redirect()->back();
    }

    public function delete(Request $request) {
        User::findOrFail($request->id)->delete();
        return redirect()->back();
    }

}
