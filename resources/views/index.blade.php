@extends('layouts.home')

@section('keywords', '彩虹工作室, 飞越彩虹, Rainbow Studio, Zhen Chen')

@section('title', '彩虹工作室 | Rainbow Studio')

@section('canonical', 'https://zhen-chen.xyz/')

@section('head')
<link rel="stylesheet" href="/css/index.css" />
@stop

@section('body')
<main>
    <a href="https://ss.zhen-chen.xyz/">
        <div class="index-item bg-red" id="ss">
            <h2>彩虹影梭</h2>
            <h2>Shadowsocks</h2>
            <h3 class="uppercase">ss.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-orange" id="todo">
            <h2>彩虹清单</h2>
            <h2>TodoList</h2>
            <h3 class="uppercase">todo.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-yellow" id="cash">
            <h2>彩虹记账</h2>
            <h2>Cashflow</h2>
            <h3 class="uppercase">cash.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-green" id="coming">
            <h2>即将开坑</h2>
            <h2>Coming</h2>
            <h3 class="uppercase">??.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-cyan" id="coming">
            <h2>即将开坑</h2>
            <h2>Coming</h2>
            <h3 class="uppercase">??.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-blue" id="coming">
            <h2>即将开坑</h2>
            <h2>Coming</h2>
            <h3 class="uppercase">??.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-purple" id="coming">
            <h2>即将开坑</h2>
            <h2>Coming</h2>
            <h3 class="uppercase">??.zhen-chen.xyz</h3>
        </div>
    </a>
</main>
@stop
