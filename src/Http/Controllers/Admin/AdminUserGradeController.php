<?php
namespace Jiny\Shop\Account\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Jiny\WireTable\Http\Controllers\WireTablePopupForms;
class AdminUserGradeController extends WireTablePopupForms
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['table'] = "user_grade"; // 테이블 정보

        $this->actions['view_list'] = "jiny-shop-account::admin.user_grade.list";
        $this->actions['view_form'] = "jiny-shop-account::admin.user_grade.form";

    }





}
