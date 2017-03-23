@extends('layouts.home')

@section('head')
<link rel="stylesheet" href="/css/index.css" />
@stop

@section('body')
<main>
    <a href="https://ss.zhen-chen.xyz/">
        <div class="index-item bg-red" id="ss">
            <h2>彩虹影梭</h2>
            <h2>Shadowsocks</h2>
            <h3 class="text-uppercase">ss.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-orange" id="todo">
            <h2>彩虹清单</h2>
            <h2>TodoList</h2>
            <h3 class="text-uppercase">todo.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-yellow" id="cash">
            <h2>彩虹记账</h2>
            <h2>Cashflow</h2>
            <h3 class="text-uppercase">cash.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-green" id="han">
            <h2>彩虹汉化</h2>
            <h2>Localization</h2>
            <h3 class="text-uppercase">han.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-cyan" id="coming">
            <h2>即将开坑</h2>
            <h2>Coming</h2>
            <h3 class="text-uppercase">??.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-blue" id="coming">
            <h2>即将开坑</h2>
            <h2>Coming</h2>
            <h3 class="text-uppercase">??.zhen-chen.xyz</h3>
        </div>
    </a>

    <a>
        <div class="index-item bg-purple" id="coming">
            <h2>即将开坑</h2>
            <h2>Coming</h2>
            <h3 class="text-uppercase">??.zhen-chen.xyz</h3>
        </div>
    </a>
</main>
@stop

@section('foot')
<script>
// fade in index-item
$(document).ready(function() {
    $('#body .index-item').each(function(index) {
        $(this).delay(index * 500).fadeIn(500);
    });
});
</script>
@stop
