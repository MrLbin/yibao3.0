@extends('grzx')

@section('content')
<link rel="stylesheet" type="text/css" href="/homes/css/vipcenter.css">
<script src="/homes/js/jquery-1.8.3.min.js"></script>
<script src="/homes/js/city.js/cityJson.js"></script>
<script src="/homes/js/city.js/citySet.js"></script>
<script src="/homes/js/city.js/Popt.js"></script>

<div class="zuirifip">
        	<!--基本信息-->
            <div class="basedexinxi">
            	<a href="/address">收货地址管理</a>
            </div>

            <!--基本信息结束-->
            <!--修改基本信息开始-->
            <div class="baseopxg">
            	<!--第一部分-->
                <form action="/address" method="post">
                <!--第二部分-->
                <div class="thetwobf">
                	<em>收货人：</em><input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px" type="text" name="name" class="shuru" placeholder="收货人" required />
                </div>
                 <div class="thetwobf">
                	<em>电话：</em><input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px" type="text" class="shuru" name="phone" placeholder="收货人联系方式" required />
                </div>
                <div class="thetwobf">
                	<em>选择地址：</em><input type="text" id="city" name="address" value="点击选择地区"/ style=" height:28px; font-size:12px; border:1px solid #bbb; float:left">
                    <script type="text/javascript">
						$("#city").click(function (e) {
						SelCity(this,e);
						});
					</script>
                    <em style=" width:60px">街道：</em>
                    <input style="float:left; border:1px solid #bbb; box-shadow:none; height:28px; font-size:12px; text-indent:6px; width:420px" type="text" class="shuru" name="street"placeholder="请输入详细地址" required />
                </div>
                 <div class="thetwobf">
                	<em>是否设为默认地址：</em>
                    <input type="radio" name="is_default" value="0" style=" float:left; display:block; width:13px; height:13px; margin-top:9px"><span>是</span>
                    <input type="radio" name="is_default" value="1" style=" float:left; display:block; width:13px; height:13px; margin-top:9px"><span>否</span>
                </div>
                
                <div class="thetwobf">

                	<button style=" display:block; padding-left:20px; padding-right:20px; line-height:40px;float:left; font-size:14px; color:#FFF; margin-left:213px"> 
                		保存
                	</button>
                	{{csrf_field()}}
                </div>
                </form>
            </div>	
			
            <!--修改基本信息结束-->
        </div>
@endsection