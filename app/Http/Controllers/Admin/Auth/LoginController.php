<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Common\Status\WebStatus;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends AdminBaseController
{
    /**
     * 登录页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.auth.login');
    }

    /**
     * 登录动作
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(UserRequest $request)
    {
        $auth = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (!Auth::attempt($auth, $request->remember)) {
            return redirect()->back()
                            ->withInput(['email' => $request->email, 'remember' => $request->remember])
                            ->with('danger', WebStatus::ERROR_PASSWORD);
        }
        return redirect()->route('admin.home')->with('success', WebStatus::SUCCESS_LOGIN);
    }

    /**
     * 注销动作
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login.index')->with('success', WebStatus::SUCCESS_LOGOUT);
    }
}
