<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 9:09
 */

namespace app\api\controller;


use think\Controller;use think\Hook;
use think\Request;

class BaseController extends Controller
{
	public function __construct(Request $request = null)
	{
		parent::__construct($request);
		Hook::listen('response_send');
	}
}