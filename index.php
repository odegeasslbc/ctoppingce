<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="baidu-site-verification" content="JKYNtO0AmY" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<title>CToP评测</title>
	<meta name="keywords" content="手机, 评测, 视频, ctop" />
	<meta name="description" content="ctop - 简单的手机评测" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="templatemo_style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  	<script src="slider/modernizr.js"></script>
    <!--this is google analyze-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-50078754-1', 'ctoppingce.com');
        ga('send', 'pageview');

    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 广告 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-4832408038116631"
     data-ad-slot="4601956905"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	<!-- HTML 5 shim for IE backwards compatibility -->
		<!-- [if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
		</script>
		<![endif]-->
	<!-- 
	Credits
	Equal Height Columns http://www.hongkiat.com/blog/css-equal-height/ -->
</head>
<body class="templatemo_juice_bg">
	<div class="regtop">
	
		
		<a href="login.php"  style=" margin-top:20px;margin-left:85%">登陆 </a>
		<a href="register.php" style=" margin-top:20px">注册</a>
		<a>
		<?php 

		if(isset($_SESSION["username"]))
      		{	
      			
      			$a=$_SESSION['username'];
      			echo '欢迎您， '.$a."!";
			}
		?>
		</a>

</div>
	<div id="main_container">
		<div class="container" id="home">
			<div class="row col-wrap">			 
				<div id="left_container" class="col col-md-3 col-sm-12">
                	<div class="templatemo_logo">
						<a  href="#"><img src="images/templatemo_logo.png" alt="Botany Theme"></a>
					</div>
					<nav id="main_nav">
						<ul class="nav">
							<li class="active"><a href="#">主页</a></li>
							<li><a href="about.html">我们想说</a></li>
							<li><a href="services.html">未来展望</a></li>
							<li><a href="portfolio.html">视频库</a></li>
							<li><a href="contact.html">联系我们</a></li>
						</ul>
					</nav> <!-- nav -->	
					
					<form method="get" class="navbar-form" role="search" action="http://www.google.com/search" target="_block">
	
	                    <div class="form-group">
		                    <input type= text class="form-control" placeholder="Search" id="keyword" name=q value="">
	                    </div>
	                    <button type= submit class="btn btn-primary" name="Search">Go</button>
                    </form>

					<div>
						<div class="bshare-custom icon-medium"><div class="bsPromo bsPromo2"></div><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到微信" class="bshare-weixin" href="javascript:void(0);"></a><a title="分享到i贴吧" class="bshare-itieba" href="javascript:void(0);"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count" style="float: none; ">26.5K</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>

					</div>
				</div>
				<div id="right_container" class="col col-md-9 col-sm-12">
                
					<div class="row">
                    	<div class="col col-md-12">
                             
                            <a  href="#"><img src="images/phone review.png" alt="Botany Theme"></a>
                    		 

                            <div class="flexslider">
                              <ul class="slides">
                                <li><img src="images/templatemo_slide_1.jpg" alt="slide 1" /></li>
                                <li><img src="images/templatemo_slide_2.jpg" alt="slide 2" /></li>
                                <li><img src="images/templatemo_slide_3.jpg" alt="slide 3" /></li>
                              </ul>
                            </div>
                            
        				</div>
                    </div>
					<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Website Template</a></div>
                    <article class="row">
						<div class="col col-md-12">
							<img src="images/templatemo_tn_1.jpg" alt="Templatemo Pic 1" class="img-thumbnail img-responsive img_left">
                            <h3>关于我们</h3> 
							<p>我们的名字叫 <b>年轻</b> 在追逐梦想的道路上，我们<b>不断向前</b><br/>去<b>探索</b><br/>去<b>改变</b><br/>去<b>拼搏</b><br/>我们用手机<b>记录</b>属于我们的<b>灿烂花火</b>
							<p><a href="about.html" class="btn btn-primary" role="button">View More</a></p>
						</div>								            
					</article>
					<article class="row">
						<div class="col col-md-12">
							<img src="images/templatemo_tn_2.jpg" alt="Templatemo Pic 2" class="img-thumbnail img-responsive img_left">
                            <h3>视频记录</h3>
							<p>相较于传统的手机评测，我们使用<b>简单高效</b>的方法<br/>以最<b>客观</b>的形式<br/>通过手机运行各种APP的性能表现<br/>把手机的<b>大体</b>性能呈现给大家</p>
							<p><a href="portfolio.html" class="btn btn-primary" role="button">View More</a></p>
						</div>							
					</article>	
					<article class="row">
						<div class="col col-md-12">
							<img src="images/templatemo_tn_3.jpg" alt="Templatemo Pic 3" class="img-thumbnail img-responsive img_left">
                            <h3>长期报告</h3>
							<p>如果说短视频能带给你初恋般的迷幻<br/>那只有<b>长期细致</b>的使用记录，才能成为判断一部手机<br/>能否成为一个<b>好老婆</b>的最佳参考<br/><b>时间</b>的沉淀，才是<b>检验真爱</b>最好的标尺</p>
							<p><a  href="http://www.igao7.com/" class="btn btn-primary" role="button">View More</a></p>
						</div>			            
					</article>                
				</div>
			</div>
			<footer class="row credit">
				<div class="col col-md-12">
					<div id="templatemo_footer">
						Copyright © 2084 <a href="#">C To P 团队</a> | Collect from <a title="" target="_blank">daily life</a> | More Happiness <a href="http://tieba.baidu.com/f?kw=wp7&fr=ala0" target="_blank" title="">百度wp7吧</a>
					</div>
				</div>
			</footer>
		</div>		
	</div>
    
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="slider/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  
</body>
<script type='text/javascript' src='js/logging.js'></script>
</html>