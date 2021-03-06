<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册</title>

    <link rel="stylesheet" type="text/css" href="/qiyue/Public/Css/common.css" />
    <!-- <link rel="stylesheet" type="text/css" href="/qiyue/Public/Css/dateform.css" /> -->
    <style>
        body{
            background-image: url("/qiyue/Public/Images/login.jpg");
        }
        .content{
            margin-top: 1rem;
        }
        .content div{
            padding:0.25rem 0.15rem;
        }
        .content div label{
            display: block;
            width:4rem;
            font-size: 0.8rem;
            margin: 0.4rem 0 0.15rem 0;
        }
        .content div input{
            width:11rem;
            margin: 0.2rem  0 0.4rem 0;
            height:1.5rem;
            font-size: 0.8rem;
            padding:0 5px 0 5px;
            border:1px solid rgba(255,255,255,0.3);
            background-color: rgba(255,255,255,0.3);
            color:black;
            border-radius: 0.3rem;
            outline: none;
        }
        .content div input[type='submit']{
            width: 11.8rem;
            height:1.5rem;
            border:none;
            border-radius: 0.25rem;
            margin:1.5rem 0 1rem 1.5rem;
            background-color: rgba(113,165,242,0.7);
            color:white;
            font-size:0.8rem;
        }
        .content form .alert{
            width:0.4rem;
            height:0.4rem;
            display:none;
            position: absolute;
        }
        #logol{
    height:8rem;
    font-size:3rem;
    padding-top:4rem;
    text-align: center;
    color:white;
}
#form{
    width:90%;
    text-align:center;
    /*padding:0.25rem 0.15rem;opacity: 0.4;background-color:white;*/
    padding-top:1.7rem;
    border-radius: 0.5rem;
    margin:0 auto;
}
/*input框前图标的样式*/
.icon{
    width:1.4rem;
    height:1.4rem;
    margin-right: 0.1rem;
    vertical-align: middle;
}
    </style>
</head>
<body>
<!-- 头部的搜索框开始 -->
<div id="head">
    <a href="/qiyue/index.php/Home/Index/index"><img src="/qiyue/Public/Images/house.png" alt="主页" id="house" /></a>
    <p id="text">注册</p>
</div>
<!-- 头部的搜索框结束 -->

<div class="content">
    <div style="width:100%;text-align:center">
        <form method="POST" onsubmit="return testsign()" action="/qiyue/index.php/Home/Registered/UserInfo">
            <img src="/qiyue/Public/Images/mobile.png"><input id="user" type='text'  name = 'phone' placeholder="手机号" autocomplete="off"/><img class="alert" src="/qiyue/Public/Images/alert.png" style="width: 1.5rem;height:1.5rem"><br>
            <img src="/qiyue/Public/Images/password.png"><input type='password'  name = 'password'  placeholder="请输入密码" autocomplete="off"/><img class="alert" src="/qiyue/Public/Images/alert.png" style="width: 1.5rem;height:1.5rem"><br>
            <img src="/qiyue/Public/Images/password.png"<input type='password'  name = 'password1'  placeholder="请输入密码" autocomplete="off"/><img class="alert" src="/qiyue/Public/Images/alert.png" style="width: 1.5rem;height:1.5rem"><br>
          <!--   <a href="information.html"><input type="submit" value="注册" onclick="add()"/></a> -->
            <input type="submit" value="注册"/>
        </form>
    </div>
</div>
</body>
<script>
    // 判断是否为手机号
    function isPoneAvailable(phone) {
        var myreg = /^[1][3,4,5,7,8][0-9]{9}$/;
        if (!myreg.test(phone)) {
            return false;
        } else {
            return true;
        }
    }
    function testsign() {
        var div = document.getElementsByClassName('content')[0].getElementsByTagName('div')[0];
        var form = div.getElementsByTagName('form')[0];
        var inputs = form.getElementsByTagName('input');
        var imgs = form.getElementsByTagName('img');

        var flag=1;
        if(!isPoneAvailable(inputs[0].value) || inputs[0].value=="")
        {
            imgs[0].style.display="inline";
            flag=0;
            if(!(inputs[1].value === inputs[2].value))
            {
                imgs[2].style.display="inline";
                flag=0;
                if(inputs[1].value=="")
                {
                    imgs[1].style.display="inline";
                    flag=0;
                }
            }
        }
            
            if(!flag) return false;
            else return true;

            //console.log(flag);
            return false;
    }
/*
        if(!isPoneAvailable(inputs[0].value))
        {
            imgs[0].style.display="inline";
            return false;
        }
        else if(!(inputs[1].value === inputs[2].value))
        {
            imgs[2].style.display="inline";
            return false;
        }
        else{
            return true;
        }
    }
    */
    function add(){
        var div = document.getElementsByClassName('content')[0].getElementsByTagName('div')[0];
        var form = div.getElementsByTagName('form')[0];
        var a = form.getElementsByTagName('a')[0];
        a.href = "information.html";
    }
</script>

    <script type="text/javascript"> 
       $(function(){
           var error=new Array();
           //测试用户是否注册过
           $('#user').blur(function(){                 //绑定失去焦点方法
               var username=$(this).val();                //获取表单的值
               $.get('/qiyue/index.php/Home/Registered/checkName',{'username':username},function(jdata){  
                   if(jdata.status!=0){
                      error['info']=0;
                      $('#user').after('<p id="p" style="color:red">该用户已被注册</p>');
                      $('#user').focus(function(){
                          $('#p').remove();
                      }); 
                   }
                   if(jdata.status==0){       
                       error['info']=1;             
                       $('#p').remove();
                   }
               });
           });
           //提交表单
           $('#button').click(function(){
              if(error['info']==1){
                  $('form[name="myform"]').submit();
              }else{
                  return false;
              }
           });
     });

</script>

</html>