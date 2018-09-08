@extends('grzx')

@section('content')
<link rel="stylesheet" type="text/css" href="/homes/css/vipcenter.css">
<script src="/homes/js/jquery-1.8.3.min.js"></script>
<script src="/homes/js/city.js/cityJson.js"></script>
<script src="/homes/js/city.js/citySet.js"></script>
<script src="/homes/js/city.js/Popt.js"></script>
<div class="zuirifip">
            <!--账户余额滴干活-->
            <div class="locfre">
                
                <a href="#" class="zuliyesi">收货地址</a>
                <a href="/address/create" >添加收货地址</a>
                
                
                <a href="#" style="float:right; color:#FFF" class="paopaodg">在线充值</a>
            </div>
            <script>
            $(function(){
                $(".locfre a").click(function(){
                    $(this).addClass("zuliyesi").siblings().removeClass("zuliyesi")
                    })
                    $(".feifeidg").mouseenter(function(){
                        $(this).css({background:"#0059a7"})
                        })
                    $(".feifeidg").mouseleave(function(){
                        $(this).css({background:"#006DCC"})
                        })
                    $(".tutudg").mouseenter(function(){
                        $(this).css({background:"#3a9d3a"})
                        })
                    $(".tutudg").mouseleave(function(){
                        $(this).css({background:"#5BB75B"})
                        })
                    $(".paopaodg").mouseenter(function(){
                        $(this).css({background:"#dd7200"})
                        })
                    $(".paopaodg").mouseleave(function(){
                        $(this).css({background:"#fe8300"})
                        })          
                })
            </script>
            <!--可用金额和冻结余额滴干活-->
            <div class="pipixia">
                <span>可用金额：</span>
                <em><s>0.00</s>元</em>
                <span>冻结金额：</span>
                <em><s>0.00</s>元</em>
            </div>
            <!--列表导航滴干活-->
            <div class="zhuzhuxiabi">
                <span>收货人姓名</span>
                <span>手机号</span>
                <span>收货人地址</span>
                <span>具体地址</span>
                <span></span>

                <span>操作</span>
            </div>
            <!--一条列表开始-->
            @foreach($address as $v)
            <div class="zhuzhuxiabi">
                <span>{{$v['name']}}</span>
                <span>{{$v['phone']}}</span>
                <span>{{$v['city']}}</span>
                <span style="height:50px;line-height: 16px;">{{$v['street']}}</span>
                <span>
                    @if($v['is_default']==0)
                    默认收货地址
                    @endif
                </span>
                <span style="width:100px;"><a href="/address/{{$v['id']}}/edit" float:left>编辑</a>&nbsp;&nbsp;    </span>
                <form action="/address/{{$v['id']}}" method="post" float:left>
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <button style=" color:#acf;background:red">删除</button>
                </form>
            </div>
            @endforeach
        </div>
@endsection