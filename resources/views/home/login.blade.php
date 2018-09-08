<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>Sign Up Login</title>
<link rel="stylesheet" href="/homes/login/css/style.css">
</head>

<body>

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>


<div class="cotn_principal">
  <div class="cont_centrar">
    <div class="cont_login">
      <div class="cont_info_log_sign_up">
        <div class="col_md_login">
          <div class="cont_ba_opcitiy">
            <h2>用户登录</h2>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
            <button class="btn_login" onClick="cambiar_login()">LOGIN</button>
          </div>
        </div>
        <div class="col_md_sign_up">
          <div class="cont_ba_opcitiy">
            <h2>SIGN UP</h2>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
            <button class="btn_sign_up" onClick="cambiar_sign_up()">SIGN UP</button>
          </div>
        </div>
      </div>
      <div class="cont_back_info">
        <div class="cont_img_back_grey"> <img src="/homes/login/po.jpg" alt="" /> </div>
      </div>
      <div class="cont_forms" >
        <div class="cont_img_back_"> <img src="/homes/login/po.jpg" alt="" /> </div>
        <form action="/home/login" method="post">
        <div class="cont_form_login"> <a href="#" onClick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
          <h2>用户登录</h2>
          <input type="text" name="username" placeholder="Username" />
          <input type="password" name="password" placeholder="Password" />
          <button class="btn_login" onClick="cambiar_login()">LOGIN</button>
        </div>
        {{csrf_field()}}
        </form>
       <form action="/register" method="POST">
        <div class="cont_form_sign_up"> <a href="#" onClick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
          <h2>SIGN UP</h2>
          
          {{csrf_field()}}
            <input type="text"  name="username"  value="{{old('username')}}" placeholder="请输入账号" />
            <input type="password" name="password"  placeholder="请输入密码" />
            <input type="text"  name="tel" value="{{old('tel')}}"  placeholder="请输入您的手机号" />
           
            <button class="btn_sign_up" onClick="cambiar_sign_up()">注册</button>
          
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="/homes/login/js/index.js"></script>

</body>
</html>
