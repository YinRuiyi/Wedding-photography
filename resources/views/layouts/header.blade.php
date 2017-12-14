<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>@section('title') 66 @show</title>
   <link rel="stylesheet" href="/home/css/bootstrap.css">
   <script src="/home/js/jquery.js"></script>
   <script src="/home/js/bootstrap.js"></script>
   <script src="/home/js/holder.min.js"></script>
   <link rel="stylesheet" type="text/css" href="/home/css/zy.css">
   <script src="/home/js/zy.js"></script>
   @section('csjs')
   
   @show

</head>
<body>
   <header>
      <div class="logo">
            <a href="hunsha.html"><img src="/layouts/images/logo.png" alt=""></a>
      </div>
      <div class="nav">
            <ul>     
               <li style="border: none;"><a href="/" class="nav_a">首页</a></li>
               <li><a href="case.html"  class="nav_a">经典系列</a>
                  <div class="list">
                     <a href="case.html"  class="nav_a"><p>人气</p></a>
                     <a href="case.html"  class="nav_a"><p>色系</p></a>
                     <a href="case.html"  class="nav_a"><p>价格</p></a>
                  </div>
               </li>
               <li><a href="kehu.html" class="nav_a">客照专区</a>
                  <div class="list">
                     <a href="kehu.html"  class="nav_a"><p>北京</p></a>
                     <a href="kehu.html"  class="nav_a"><p>上海</p> </a>
                     <a href="kehu.html"  class="nav_a"><p>天津</p></a>
                  </div>
               </li>
               <li><a href="about.html" class="nav_a">关于我们</a>
                  <div  class="list">
                     <a href="about.html"  class="nav_a"><p>公司简介</p></a>
                     <a href="about_fuwu.html"  class="nav_a"><p>我们的服务</p></a>
                     <a href="about_wh.html"  class="nav_a"><p>企业文化</p></a>
                  </div>
               </li>
               <li><a href="/teamA" class="nav_a">服务团队</a>
                  <div  class="list">
                     <a href="/teamA"  class="nav_a"><p>北京</p></a>
                     <a href="/teamB"  class="nav_a"><p>上海</p></a>
                     <a href="/teamC"  class="nav_a"><p>天津</p></a>
                  </div>
               </li>
               <li><a href="fuwu_price.html" class="nav_a">服务报价</a></li>
               <li><a href="news.html" class="nav_a">新闻资讯</a>
                  <div  class="list">
                     <a href="news.html"  class="nav_a"><p>最新优惠</p></a>
                     <a href="news.html"  class="nav_a"><p>公司新闻</p></a>
                     <a href="news.html"  class="nav_a"><p>行业新闻</p></a>
                  </div>
               </li>
               <li><a href="contact.html" class="nav_a">联系我们</a>
                  <div  class="list">
                     <a href="contact.html"  class="nav_a"><p>联系我们</p></a>
                     <a href="feedback.html"  class="nav_a"><p>在线留言</p></a>
                  </div>
               </li>
            </ul>
            <div class="cen">
               <a href="">CN</a>
               <a href="">EN</a>
            </div>
      </div>
   </header>
   
   @section('content')
   
   @show
      <!-- 结尾 start -->
   <footer>
      <div class="end">
         <div class="container">
            <div class="col-md-12 jw">
               <div class="jw_l col-md-8">
                  <ul style="margin-left: 0px;">
                     <p class="jw_a"><a href="#">经典案例</a></p>
                     <li class="jw_a"><a href="#">人气</a></li>
                     <li class="jw_a"><a href="#">色系</a></li>
                     <li class="jw_a"><a href="#">价格</a></li>
                  </ul>

                  <ul>
                     <p class="jw_a"><a href="#">客照专区</a></p>
                     <li class="jw_a"><a href="#">北京</a></li>
                     <li class="jw_a"><a href="#">上海</a></li>
                     <li class="jw_a"><a href="#">天津</a></li>
                  </ul>

                  <ul>
                     <p class="jw_a"><a href="#">关于我们</a></p>
                     <li class="jw_a"><a href="#">公司简介</a></li>
                     <li class="jw_a"><a href="#">我们的服务</a></li>
                     <li class="jw_a"><a href="#">企业文化</a></li>
                  </ul>

                  <ul>
                     <p class="jw_a"><a href="#">服务团队</a></p>
                     <li class="jw_a"><a href="#">服务团队</a></li>
                     <li class="jw_a"><a href="#">服务团队</a></li>
                     <li class="jw_a"><a href="#">服务团队</a></li>
                  </ul>

                  <p class="jw_a" style="width: 60px; margin-top: 70px;margin-left: 50px ; float: left;"><a href="#" style="color: #fff; font-size: 13px;">服务报价</a></p>

                  <ul>
                     <p class="jw_a"><a href="#">新闻资讯</a></p>
                     <li class="jw_a"><a href="#">最新优惠</a></li>
                     <li class="jw_a"><a href="#">公司新闻</a></li>
                     <li class="jw_a"><a href="#">行业新闻</a></li>
                  </ul>
               </div>
               <div class="jw_r col-md-4">
                  <div class="jw_r1">
                     <p class="jw_a r1"><a href="#">CONTACT</a></p>

                     <p class="jw_a r2"><a href="#">联系我们</a></p>

                     <p style="color: #fff; font-size: 13px;">联系地址：</p>
                     <p class="jw_a r3"><a href="#">上海市虹口区水电路33号楼3单元3层</a></p>

                     <p style="color: #fff; font-size: 13px;">手机：</p>
                     <p class="jw_a r4"><a href="#">177 1610 1908</a></p>

                     <p style="color: #fff; font-size: 13px;">邮箱：</p>
                     <p class="jw_a r5"><a href="#">1776101908@163.com</a></p>
                  </div>
                  <div class="jw_r2">
                     <a href="#"><img src="/layouts/images/qq.png" alt=""></a>
                     <a href="#"><img src="/layouts/images/qq.png" alt=""></a>
                     <a href="#"><img src="/layouts/images/qq.png" alt=""></a>
                     <a href="#"><img src="/layouts/images/qq_01.png" alt=""></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="bottom col-md-12">
            <div class="container">
               <p>COPYRIGHT(C)2015-2024 上海唯星婚纱摄影有限公司&nbsp;&nbsp;&nbsp;<a href="" class="bottom_z">站点地图</a></p>
               <a href="#" class="t1"><img src="/layouts/images/yu.png" alt=""></a>
               <a href="#" class="t2"><img src="/layouts/images/er.png" alt=""></a>
            </div>   
         </div>
      </div>
   </footer>
   <!-- 结尾 end -->
</body>
</html>