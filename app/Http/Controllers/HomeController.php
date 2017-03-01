<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $request;
    protected $isAjax;

    public function __construct(Request $request) {
        $this -> request = $request;
        $this -> isAjax = $request -> ajax();
    }

    protected function handle($view, $data) {
        $sections = view($view, $data) -> renderSections();

        $data['body'] = $sections['body'];

        return $data;
    }

    public function index() {
        $data['keywords'] = '彩虹工作室, 飞越彩虹, Rainbow Studio, Zhen Chen';
        $data['title'] = '彩虹工作室 | Rainbow Studio';
        $data['canonical'] = env('APP_URL') . '/';
        $data['pageIdentifier'] = 'index';

        if ($this -> isAjax) {
            return $this -> handle('index', $data);
        }
        return view('index', $data);
    }
}
