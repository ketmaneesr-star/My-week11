<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    public function about()
    {
        return view("about");
    }

    public function blog()
    {
        return view("blog");
    }

    public function create()
    {
        return view("create");
    }

    public function insert(Request $request)
    {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->save();
        return redirect()->route("abouts");
    }

    public function delete($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route("abouts");
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return view("edit", compact("admin"));
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->save();
        return redirect()->route("abouts");
    }
}
