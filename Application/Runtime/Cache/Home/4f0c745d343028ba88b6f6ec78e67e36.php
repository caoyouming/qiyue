<?php if (!defined('THINK_PATH')) exit();?>+<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>我的</title>
  <link rel="stylesheet" type="text/css" href="/qiyue/Public/Css/common.css" />
	<link rel="stylesheet" type="text/css" href="/qiyue/Public/Css/person.css" />
</head>
<body>
	<!-- 头部的搜索框开始 -->
	<div id="head">
	     <a href="/qiyue/index.php/Home/Index/index"><img src="/qiyue/Public/Images/house.png" alt="主页" id="house" /></a>
		 <p id="person-center">个人中心</p>
	</div>
	<!-- 头部的搜索框结束 -->

	<!-- 轮播图的开始 -->
	<div id="nav">
		<img src="/qiyue/Public/Images/one.jpg" width="100%" height="100%" />
	</div>
	<!-- 轮播图的结束 -->
   
   <!-- 类似于选项卡的东西的开始 -->
   <table class="choice">
   	 <tr>
   	 	<td class="choicebtn">
   	 		<a href="/qiyue/index.php/Home/User/ShowUserInfo"><img src="/qiyue/Public/Images/shopping.png"  alt=""  /></a>
   	 		<p>个人信息</p>
   	 	</td>
   	 	<td class="choicebtn">
   	 		<a href="/qiyue/index.php/Home/Conllect/ShowConllect"><img src="/qiyue/Public/Images/shopping.png"  alt=""  /></a>
   	 		<p>我的收藏</p>
   	 	</td>
   	 	<td class="choicebtn">
   	 		<a href="/qiyue/index.php/Home/Comment/UserComment"><img src="/qiyue/Public/Images/shopping.png"  alt=""  /></a>
   	 		<p>我的评论</p>
   	 	</td>
   	 </tr>
   </table>
    <!-- 类似于选项卡的东西的结束-->

    <!-- 这里是我的收藏的部分 -->
    <ul id="collect"  class="choice-box" >
    	<?php if(is_array($Conllect)): foreach($Conllect as $key=>$vo): ?><li>
    	    <h5>编号：<?php echo ($vo["a_num"]); ?></h5>
    	    <hr/>
    		<a href="/qiyue/index.php/Home/ApplianceInfo/ApplianceInfo/a_id/<?php echo ($vo["a_id"]); ?>/a_name/<?php echo ($vo["a_name"]); ?>/a_photo/'/qiyue/Public/Images/book.jpg'/l_name/计算机应用技术协会/a_num/XX55-3"><img src="/qiyue/Public/Images/cloth.jpg" /></a>
        <div>
          <P>
             <span class="name">仪器名称</span>
             <span class="value"><?php echo ($vo["a_name"]); ?></span>
          </P>
          <p class="laboratoryKind">
              <span class="name">所属实验室</span>
              <span class="value"><?php echo ($vo["l_name"]); ?></span>
          </p>
        </div>
    	</li><?php endforeach; endif; ?>
    </ul>

  <!--  这里是页脚里面的部分的开始 -->
    <div style="width:100%;height:3rem;"></div>
    <table  id="footer" class="choice">
     <tr>
          <td>
          <a href="/qiyue/index.php/Home/Index/index">
          <img src="/qiyue/Public/Images/book.png"  alt="" style="background-color: #CCFF00;" />
          <p>首页</p></a>
          </td>
          <td>
          <a href="/qiyue/index.php/Home/OrderForm/ViewOrderForm">
          <img src="/qiyue/Public/Images/book.png"  alt="" style="background-color: #FF6666;" />
          <p>订单</p></a>
          </td>
        <td>
        <a href="/qiyue/index.php/Home/Person/Person">
          <img src="/qiyue/Public/Images/book.png"  alt="" style="background-color: #009999;" />
          <p>我的</p></a>
          </td>
     </tr>
   </table>
  <!--  这里是页脚里面的部分的结束 -->
</body>
</html>