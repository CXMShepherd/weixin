<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>功能介绍－<?php echo C('site_title');?></title>
<meta name="keywords" content="PIGCMS 微信帮手 微信公众账号 微信公众平台 微信公众账号开发 微信二次开发 微信接口开发 微信托管服务 微信营销 微信公众平台接口开发"/>
<meta name="description" content="微信公众平台接口开发、托管、营销活动、二次开发"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css"/>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/ie6.css"/>
<![endif]-->
<script type="text/javascript">window.onerror=function(){return true;}</script>
<script type="text/javascript" src="<?php echo RES;?>/js/lang.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/config.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/page.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.lazyload.js"></script>
<script type="text/javascript">
GoMobile('');
var searchid = 5;
</script>
</head>
<body>
<div class="topbg">
<div class="top">
<div class="toplink">
<div class="welcome">欢迎使用<?php echo ($f_siteTitle); ?> - <?php echo ($f_siteName); ?></div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?>你好&nbsp;&nbsp;<span class="f_red">游客</span>&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>	
	</div>
</div>
    <div class="logo">
        <div style="float:left"></div>
            <h1><a href="/" title="<?php echo ($f_siteName); ?>"><img src="<?php echo ($f_logo); ?>" /></a></h1>
            <div class="navr">
        <ul id="topMenu">           
			 <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/" >首页</a></li>
                <!--<li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>
                <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
                <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>
                <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">微信导航</a></li>
                --><li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
                <!--<li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="/agent.php">代理管理</a></li>
                --><li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>
            
            </ul>
        </div>
        </div>
    </div>
</div>
<style type="text/css">
.main{
padding: 10px 0 0 10px;;
border: 1px solid #c7cdd6;
background: #f5f6f7;
box-shadow: 0px 1px 3px #ccc;
}
<!--
#table {width:100%;background:#ffffff; overflow:auto;}
.menubg{
/*background: url(<?php echo RES;?>/images/img/current-.gif) repeat-y 170px top;*/
overflow-x: hidden;
overflow-y: auto;
border-top:1px solid #EEEEEE;
border-left:1px solid #EEEEEE;
}
.menu0 div{
line-height:20px;
display:block;
float:left;
padding:2px 0px;
width:155px;
text-align: left;
text-indent: 10px;
cursor:pointer;
color:  #000000;
border-right: 1px solid #EEEEEE;
border-bottom: 1px solid #EEEEEE;
font-size:12px;position: relative;
}
.menu0 div.hover{
color: #FFFFFF;
text-shadow: 0 1px 1px #467809;

background-color:#08a006;
/*background:#fff url(<?php echo RES;?>/images/img/current.gif) no-repeat right center;*/
}
.menu0 div span{
 background: url(<?php echo RES;?>/images/img/icon_new.gif) no-repeat scroll 0 0 transparent;
    border: 0 none;
    display: block;
    height: 11px;
    position: absolute;
    right: 0;
    top: 0;
    width: 23px;
    z-index: 10;
right: 5px;
    top: 6px;
}
#main0 div{margin:15px 10px;
display: none;text-decoration: none; word-wrap: break-word;
}
#main0 div.block{margin:15px;

display: block;text-decoration: none;word-wrap: break-word;
}
h3{ font-size: 16px; color:#08a006}
.marginb{ margin-bottom:15px;display: block;}
#mediaplayer {
	
    background-color: #000000;
    color: #FFFFFF;
    height: 615px;
    position: relative;
    width: 820px;
	top:0;
	right:0;
}
.section { border:0; margin:0; padding:0}
.section p{padding-top:0;margin-top:0; font-size:14px;/*text-indent: 2em;*/}
.normalContent {
    padding: 20px;
}
-->
</style>
<script>
function setTab(m,n){
var tli=document.getElementById("menu"+m).getElementsByTagName("div");
var mli=document.getElementById("main"+m).getElementsByTagName("div");
for(i=0;i<tli.length;i++){
   tli[i].className=i==n?"hover":"";
   mli[i].style.display=i==n?"block":"none";
}
}
</script>

<div class="main" style="margin-top:20px;">
   
<div class="qtcontent">
        <div class="intro">
            <div class="normalTitle"><h2><?php echo C('site_name');?>功能简介</h2></div>
            <div class="normalContent">
<div class="section">
                    <div id="table">
                    <div class="menubg">
                        <div class="menu0" id="menu0">
                            <div class="" onClick="setTab(0,0)">1.天气查询</div>
                            <div class="" onClick="setTab(0,1)">2.快递查询</div>
                            <div class="" onClick="setTab(0,2)">3.手机归属地查询</div>
                            <div class="" onClick="setTab(0,3)">4.身份证查询</div>
                            <div class="" onClick="setTab(0,4)">5.公交查询</div>
                            <div class="" onClick="setTab(0,5)">6.火车查询</div>
                            <div class="" onClick="setTab(0,6)">7.健康指数查询</div>
                            <div class="" onClick="setTab(0,7)">8.实时翻译(语音)</div>
                            <div class="" onClick="setTab(0,8)">9.百度百科</div>
                            <div class="" onClick="setTab(0,9)">10.百度问答</div>
                            <div class="" onClick="setTab(0,10)">11.人品计算</div>
                            <div class="" onClick="setTab(0,11)">12.笑话</div>
                            <div class="" onClick="setTab(0,12)">13.糗事</div>
                            <div class="" onClick="setTab(0,13)">14.谜语</div>
                            <div class="" onClick="setTab(0,14)">15.解梦</div>
                            <div class="" onClick="setTab(0,15)">16.成语接龙</div>
                            <div class="" onClick="setTab(0,16)">17.成语字典</div>
                            <div class="" onClick="setTab(0,17)">18.陪聊</div>
                            <div class="" onClick="setTab(0,18)">19.机器人学习功能</div>
							<div class="" onClick="setTab(0,19)">20.自定义图文回复</div>
							<div class="" onClick="setTab(0,20)">21.藏头藏尾诗</div>
							<div class="" onClick="setTab(0,21)">22.诗歌接龙</div>
							<div class="" onClick="setTab(0,22)">23.诗歌赏析</div>
							<div class="" onClick="setTab(0,23)">24.网络音乐搜索</div>
							<div class="" onClick="setTab(0,24)">25.网络电影搜索</div>
							<div class="" onClick="setTab(0,25)">26.文字转语音</div>
							<div class="" onClick="setTab(0,26)">27.股票查询</div>
							<div class="" onClick="setTab(0,27)">28.彩票查询</div>
							<div class="" onClick="setTab(0,28)">29.英语4-6级(12年12月)</div>
							<div class="" onClick="setTab(0,29)">30.黄金白银期货</div>
							<div class="" onClick="setTab(0,30)">31.文字转语音</div>
							<div class="" onClick="setTab(0,31)">32.淘宝客模块</div>
							<div class="" onClick="setTab(0,32)">33.周边商铺</div>
							<div class="" onClick="setTab(0,33)">34.刮刮卡刮奖活动</div>
							<div class="" onClick="setTab(0,34)">35.幸运大转盘活动</div>
							<div class="" onClick="setTab(0,35)">36.优惠券活动</div>
							<div class="" onClick="setTab(0,36)">37.周边生活地图版<span class="new"></span></div>
							<div class="" onClick="setTab(0,37)">38.步行导<span class="new"></span>航</div>
							<div class="" onClick="setTab(0,38)">39.驾车导<span class="new"></span>航</div>
							<div class="" onClick="setTab(0,39)">40.路况查询<span class="new"></span></div>
							<div class="" onClick="setTab(0,40)">41.直接显示周边<span class="new"></span></div>
							<div class="" onClick="setTab(0,41)">42.公交换乘地图版<span class="new"></span></div>
							<div class="" onClick="setTab(0,42)">43.查询药价<span class="new"></span></div>
							<div class="" onClick="setTab(0,43)" style="display:none">44.投票活动<span class="new"></span></div>
							<div class="" onClick="setTab(0,44)">44.自定义LBS数据<span class="new"></span></div>
							<div class="" onClick="setTab(0,45)">45.淘宝天猫店铺推广<span class="new"></span></div>
							<div class="" onClick="setTab(0,46)">46.DIY宣传页<span class="new"></span></div>
							<div class="" onClick="setTab(0,47)">47.3G产品相册<span class="new"></span></div>
							<div class="" onClick="setTab(0,48)">48.会员卡<span class="new"></span></div>
							<div class="" onClick="setTab(0,49)">49.通用酒店预订<span class="new"></span></div>
							<div class="" onClick="setTab(0,50)">50.无线订餐<span class="new"></span></div>
							<div class="" onClick="setTab(0,51)">51.微团购<span class="new"></span></div>
							<div class="" onClick="setTab(0,52)">52.微商城<span class="new"></span></div>
							<div class="" onClick="setTab(0,53)">53.万能表单<span class="new"></span></div>
								<div class="hover" onClick="setTab(0,54)">54.3G微网站<span class="new"></span></div>
							<div class="" onClick="setTab(0,55)">55.crm客户关系管理<span class="new"></span></div>
							<div class="" onClick="setTab(0,56)">56.智能语音识别接口<span class="new"></span></div>
							<div class="" onClick="setTab(0,57)">57.主动信息推送接口<span class="new"></span></div>
							<div class="" onClick="setTab(0,58)">58.360°全景看车看房<span class="new"></span></div>
							<div class="" onClick="setTab(0,59)">59.支付宝在线支付<span class="new"></span></div>
							<div class="" onClick="setTab(0,60)">60.婚庆喜帖<span class="new"></span></div>
							<div class="" onClick="setTab(0,61)">61.留言板<span class="new"></span></div>
							<div class="" onClick="setTab(0,62)">62.房地产行业应用<span class="new"></span></div>
						
                        </div>
                    </div>
                    <div class="main" id="main0">
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>1.天气查询</h3>
                                <p>输入城市+天气，可以马上得到近五天的气情况，出行无忧。</p>
                                <p>例如：上海天气</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn001.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>2.快递查询</h3>
                                <p>输入快递名称+运单号，可以快速查询快递的详细动态，收件从此不用愁。</p>
                                <p>例如：天天快递130004442691</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn002.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>3.手机归属地查询</h3>
                                <p>输入手机号码即可获得该手机相关信息，有手机归属地，手机类型，手机区号，邮编等。</p>
                                <p>例如：13625008699</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn003.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>4.身份证查询</h3>
                                <p>输入身份证号即可获得相关信息。</p>
                                <p>例如：342502198501250013</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn004.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>5.公交查询</h3>
                                <p>输入城市+公交+车次，有3.6万线路</p>
                                <p>例如线路查询：厦门公交92路</p>
                                <p>站点到站点查询：厦门公交厦大医院到软件园二期</p>
                                <p>站点查询：厦门公交厦大医院站</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn005.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>6.火车查询</h3>
                                <p>输入：火车 车次 或 火车 站点 站点，有4460列火车数据。</p>
                                <p>例如车次查询：火车k332 </p>
                                <p>站点到站点查询：火车 厦门 东乡</p>
                                </span>
                                
                                <img alt="" src="<?php echo RES;?>/images/demo/gn006-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>7.健康指数查询</h3>
                                <p>身高单位为cm 体重单位为公斤</p>
                                <p>输入：身高173 体重56  或输入：高173 重56</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn007.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>8.实时翻译(语音)</h3>
                                <p>支持几十种语言的实时翻译，中、英、日、韩、法、俄、等等全文翻译。</p>
								<p>输入翻译，可以查询支持的语种有哪些。</p>
								<p>英文我爱你：表示把中文翻译成英文，日语早上好：表示把中文翻译成日文</p>
								<p>法语我爱你：表示把中文翻译成法语，俄语我爱你：表示把中文翻译成俄语</p>
								<p>备注：如果后台开启翻译朗读功能，可以将翻译结果直接朗读出来，</p>
								<p>学习世界语言的必备武器！更有意思！</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn008.jpg">
                                <img alt="" src="<?php echo RES;?>/images/demo/gn008-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>9.百度百科</h3>
                                <p>输入百科（bk）+要查询的词，即可得到相关信息。</p>
                                <p>例如：百科刘德华 或 bk刘德华</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn009.jpg">
                                <img alt="" src="<?php echo RES;?>/images/demo/gn009-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>10.百度问答</h3>
                                <p>输入超过5个汉字自动回复相关问答内容。</p>
                                <p>例如：要怎么哄女人开心</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn010.jpg">
                                <img alt="" src="<?php echo RES;?>/images/demo/gn010-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>11.人品计算</h3>
                                <p>输入人品+姓名，计算当天人品。</p>
                                <p>例如：李白人品</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn011.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>12.笑话</h3>
                                <p>输入任何数字：0-9或者笑话或者笑脸的表情</p>
                                <p>可以随机查看笑话，有2.6万数据。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn012.jpg">
                                <img alt="" src="<?php echo RES;?>/images/demo/gn012-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>13.糗事</h3>
                                <p>输入糗事或者任意字母，可以随机查看糗事，有51.5万数据。</p>
                                <p>例如：糗事 或者 q</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn013.jpg">
                                <img alt="" src="<?php echo RES;?>/images/demo/gn013-2.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>14.谜语</h3>
                                <p>输入谜语，即可玩猜谜语游戏，有5万数据。</p>
                                <p>查答案可输入答案谜语编号，例如：谜语 232</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn014.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>15.解梦</h3>
                                <p>输入梦见发财或者梦到发财，立刻获得解梦信息。</p>
                                <p>例如：梦见我发财了</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn015.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>16.成语接龙</h3>
                                <p>输入正确的成语即可</p>
                                <p>例如：肝肠寸断</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn016.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>17.成语字典</h3>
                                <p>输入例如：成语 半死不活，得到该成语的解释。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn017.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>18.陪聊</h3>
                                <p>开启陪聊功能可以自动跟用户智能聊天</p>
                                <p>目前仅1000条陪聊库，在不断完善中...</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn018.jpg">
                            </div>
                            <div style="display: none;">
                                <span class="marginb">
                                <h3>19.机器人学习功能</h3>
                                <p>用手机直接发送：问 关键词 答 内容，这样教机器人回答问题，机器人就学会了。</p>
                                <p>例如：问 你是谁 答 我是欧阳啊！</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn019.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>20.自定义图文回复</h3>
                                <p>在pigcms微信后台设置关键词，编辑对应的回复内容，以图文形式显示。</p>
<p>还有关联的图文展示，推荐阅读。</p>
                                <p>效果更好，用户体验更佳。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn020.jpg" style="vertical-align: top">
<img alt="" src="<?php echo RES;?>/images/demo/gn020-2.jpg">
                            </div>
                    		<div style="display: none;">
                                <span class="marginb">
                                <h3>21.藏头藏尾诗</h3>
                                <p>输入：藏头诗 我爱你香港 或者 cts 我爱你香港 或者</p>
<p>藏尾诗 我爱你香港 或者 cws 我爱你香港</p>
<p>会根据输入的内容自动生成藏头诗或者藏尾诗，非常有意思。</p>
<p>例如：cts 我爱你香港 或者 cws 我爱你香港</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn021.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>22.诗歌接龙</h3>
                                <p>输入诗词的任意一句，会自动回复下一句。</p>
<p>例如：床前明月光</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn022.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>23.诗歌赏析</h3>
                                <p>输入：古诗+诗名或者古诗+诗名+作者，可以欣赏这首完整的诗歌。</p>
<p>例如：古诗 黄鹤楼</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn023.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>24.网络音乐搜索</h3>
                                <p>输入：音乐+歌手+歌名 或者 音乐+歌名 可以欣赏这首歌曲。</p>
<p>例如：音乐 谢霆锋谢谢你的爱</p>
<p>还可以输入：播放音乐|来首歌|来首音乐|放歌|音乐|mp3|点首歌|点歌|我要听歌</p>
<p>来随机播放音乐</p>
<p>还可以输入：陈奕迅的歌或者播放浮夸</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn024.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn024-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>25.网络电影搜索</h3>
                                <p>输入：电影+名称 可以欣赏这部电影了，当然有的电影是搜不到的，电影库会慢慢增加。</p>
<p>例如：电影 功夫熊猫</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn025.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>26.文字转语音</h3>
                                <p>输入：朗读+文字，就可以把文字转成语音播放。</p>
<p>例如：朗读你好，pigcms欢迎你！</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn026.jpg">
                            </div>
                     		<div style="display: none;">
                                <span class="marginb">
                                <h3>27.股票查询</h3>
                                <p>输入：股票+股票代号或名称或拼音缩写，股票二字可以用gp缩写</p>
<p>例如：股票601088 或者 股票西藏天路 或者 股票dqtl 或者 gp601088</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn027.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>28.彩票查询</h3>
                                <p>输入彩票+名称</p>
<p>可以查询彩票有：双色球、大乐透、七星彩、排列3、排列5、体彩22选5、胜负彩14场、任选9场、4场进球、6场半全场、老11选5、11选5、新11选5、双色球</p>
<p>例如：彩票双色球</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn028.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn028-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>29.英语4-6级查询(12年12月)</h3>
                                <p>查询例子：cet杨奕352011122103023</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn029.jpg">
                            </div>

<div style="display: none;">
                                <span class="marginb">
                                <h3>30.黄金白银期货</h3>
                                <p>查询例子：输入9999或9995</p>
<p>支持以下关键词 9995|9999|纸黄金|纸白银|美黄金|美白银|中行本币金|中行外币金|建行黄金|建行白银|建行铂金|纸铂金|纸钯金|美铂金|美钯金|白银td|黄金td|天通银|天通铂金|天通钯金|黄金9995|黄金9999|铂金9995|黄金100g|现货黄金|现货白银|现货铂金|现货钯金|美元指数|国际原油|NYMEX天然气|美元指数|美元人民币|欧元美元|澳元美元|英镑美元|新西兰元美元|美元加元|美元瑞郎|美元港元|美元日元|美元马币|美元新加坡元|美元台币|上证指数|Ａ股指数|Ｂ股指数|综合指数|上证380|上证180|上证50|新综指|沪深300|深证成指|成份Ａ指|成份Ｂ指|深证100R|中小板指|创业板指|新指数|道琼斯30种工业股票平均价格指数|纳斯达克综合指数|标准普尔500指数|道琼斯威尔希尔5000指数|香港恒生指数|台湾台北指数|韩国KOSPI指数|PHILA金银指数|富时100指数|德国DAX指数|法国CAC40指数|俄罗斯MICEX10指数|荷兰AEX指数</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn030.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>31.文字转语音</h3>
                                <p>开启此功能，聊天内容出现敏感词时会自动转成语音，</p><p>你也可以输入朗读+文字，例如：朗读你好呀</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn031.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>32.淘宝客模块</h3>
                                <p>开启此功能，输入：淘宝内衣或者淘宝鞋子，可以查询淘宝的商品。</p>
<p>pigcms还有专门的淘宝客功能，适合做手机淘宝客的人使用，粉丝购买后可以得到佣金，手机支付以后是个趋势，抓住先机，以后佣金倍增。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn032.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn032-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>33.周边商铺</h3>
                                <p>开启此功能，直接发送地理位置信息，然后输入“附近便利店”</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn033.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn033-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>34.刮刮卡刮奖活动</h3>
                                <p>开启此功能，直接发布刮刮卡刮奖活动，设置活动内容、奖项及中将比例，带给粉丝完全不同的感受。</p>
<p>输入“刮刮卡”体验此互动活动</p>
<p style=" color:#F00">备注：目前安卓4.1的系统跟微信4.5有些兼容性问题，导致刮刮卡不能刮，还是可以抽奖，就是少了刮的体验，其他都正常，如果介意的话，请等待微信升级解决此问题后再使用，或者换其他活动。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn034.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn034-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>35.幸运大转盘活动</h3>
                                <p>开启此功能，直接发布幸运大转盘活动，设置活动内容、奖项及中将比例，带给粉丝完全不同的感受。</p>
<p>输入"大转盘"体验此互动活动</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn035.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn035-2.jpg">
                            </div>
<div style="">
                                <span class="marginb">
                                <h3>36.优惠券活动</h3>
                                <p>开启此功能，直接发布优惠券活动，设置活动内容、奖项等，带给粉丝完全不同的感受。</p>
<p>输入"优惠券"体验此互动活动</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn036.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn036-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>37.周边生活地图版</h3>
                                <p>开启此功能，首先要发送地理位置信息，然后输入附近+关键词即可, </p>
<p>例如 附近酒吧,附近学校,附近工商银行,附近医院,附近小吃,附近美食,附近酒吧,附近咖啡厅,附近公交站,附近加油站.......</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn037.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn037-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>38.步行导航</h3>
                                <p>微信中输入“地图”会自动回复配置的商家地理信息，如果您选择步行，可以获取步行路书和地图导航。<br><br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/buxing.jpg"></p>
                                </span>
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>39.驾车导航</h3>
                                <p>微信中输入“地图”会自动回复配置的商家地理信息，如果您选择开车，可以获取驾车路书和地图导航。<br><br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/kaiche.jpg"></p>
                                </span>
                         
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>40.路况查询</h3>
                                <p>开启此功能，首先要发送地理位置信息，然后输入 路况 2个字即可。</p>
<p>红色表示拥堵，黄色表示有点堵，绿色表示道路很畅通。请点击放大看详情。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn040.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn040-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>41.发地理位置直接显示周边</h3>
                                <p>开启此开关,将不会提示地理位置已经记录，而是直接显示周边数据，不影响关键词。</p>
<p>查询可以通过：附近+关键词，获取附近更精细的分类查询！</p>
<p>例如：附近便利店 附近医院 附近美食 附近小吃 等等</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn041.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn041-2.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>42.公交换成地图版</h3>
                                <p>开启此开关,可以查询公交某个站点到某个站点如何坐车，只能查你当前位置所在城市的公交等</p>
<p>例如：公交龙山桥到SM 或者 厦大西村到中山路怎么坐车</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn042.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn042-2.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn042-3.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>43.查药价</h3>
                                <p>包含7.5万种药品的零售价和进价,查询方法: 药价+药品名称 或者 国药准字号</p>
<p>例如：药价 Z11021209 或者 药价 桑菊感冒颗粒</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn043.jpg">
<img alt="" src="<?php echo RES;?>/images/demo/gn043-2.jpg">
                            </div>
<div style="display:none;">
                                <span class="marginb">
                                <h3>44.投票活动</h3>
                                <p>开启此开关,可以发起文本投票和图片投票两种形式，可单选和多选。</p>
<p>范例：给pigcms微信号输入“投票”或者“图片投票”体验一下投票活动。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn044.jpg">
                            </div>
<div style="display: none;">
                                <span class="marginb">
                                <h3>44.自定义LBS数据</h3>
                                <p>微信中输入“地图”会自动回复商家的地理信息，并且可以获取最近的分店，以及获取各种交通方式导航。<br><br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/lbs.jpg"></p>
                                </span>
                               
                            </div>
							<div style="display: none;">
                                <span class="marginb">
                                <h3>45.淘宝天猫店铺推广</h3>
                                <p>开启此开关,只需要你填写天猫或淘宝店铺的手机站点地址，简单配置店铺商品常用关键词，就可以直接通过微信检索店铺内的商品，关键词是包含匹配，只要用户输入的信息有包含关键词，就会回复店铺商品信息，起到很好的推广作用，请看下面的范例。</p>
                                </span>
                                <img alt="" src="<?php echo RES;?>/images/demo/gn046.jpg">
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>46.DIY宣传页</h3>
                                <p>只需要填写二维码地址，简单介绍你公众号的特点，就可以自动生成一个漂亮的PC推广也没，方便你分享给好友，分享到微博，论坛，博客等等，起到好的推广的作用。</p>
                                </span>
                                <img alt="" src="images/diy.gif" width="99%">
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>47.相册功能</h3>
                                <p>
									开启此功能,只需要设置相册名称，相册封面图及上传图片，就可以得到一个精美的相册网站。
									非常适合婚纱行业、汽车行业或者需要展示产品图片的商家。
									下面是效果图及简单的操作说明。
								</p>
                                </span>
                                <img alt="" src="images/3gphoto.jpg" width="99%">
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>48.会员卡管理</h3>
                                <p>									强的会员卡功能，包含8大模块，diy设计会员卡，各版本设计，会员卡资料管理，在线自定义卡号，积分签到，消费积分，等强的大的功能。
								</p>
                                </span>
                                <img alt="" src="images/member1.gif" width="98%">
                                <img alt="" src="images/cart1.gif" width="98%">
                                <img alt="" src="images/cart2.gif" width="98%">
                            </div>
							<div style="display:none">
                                <span class="marginb">
                                <h3>49.会员卡管理</h3>
                                <p>	开启此功能,可以设置酒店预订，KTV预订等，设置手机后，还可以收到订单提醒。
								</p>
                                </span>
                                <img alt="" src="images/host_ktv.gif" width="98%">
                                
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>50.无线点餐订餐</h3>
                                <p>微信中输入“订餐”会自动回复订餐功能，可以预定座位包厢、也可以在线点餐或叫外卖，<br>网友提交订单后，商家无线打印机会自动打印出订单信息。<br><br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/dc.jpg"></p>
                                </span>
                               
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>51.微团购</h3>
                                <p>微信中输入“团购”会自动回复团购功能，可以设定团购截止日期，初始出售数量，并显示截止日期倒计时。<br><br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/tuangou.jpg"></p>
                                </span>
                               
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>52.微商城</h3>
                                <p>微信中输入“商城”会自动回复，可以设置商品分类，支持商品搜索，多种属性排序，多商品购物车结算，瀑布流展示。<br><br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/shangcheng.jpg"></p>
                                </span>
                               
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>53.万能表单</h3>
                                <p>微信中输入自定义的万能表单的关键词会自动回复相应表单，可以利用该功能自由定制各类表单信息，如下图所示。<br><br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/wnbd.jpg"></p>
                                </span>
                               
                            </div>
							<div style="display:block;">
                                <span class="marginb">
                                <h3>54.微网站(3G网站)</h3>
								<P>开发团队10.1假期全体加班，加点所完成，</P>
                                <p><img src="images/tpl.gif" width='930'>
								</p>
                                </span>
                               
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>55.crm客户关系管理</h3>
								<P>（10月.29日）功能已经开发，图文介绍正在整理中</P>
								<P>分组管理接口
									获取用户基本信息
									获取关注者列表
									获取用户地理位置
									网页授权获取用户基本信息
									网页获取用户网络状态</P>
                               
								</p>
                                </span>
                               
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>56.智能语音识别接口</h3>
								<P>（10月.29日）功能已经开发，图文介绍正在整理中</P>
                             
								</p>
                                </span>
                               
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>57.主动信息推送接口</h3>
								<P>（10月.29日）功能已经开发，图文介绍正在整理中</P>
                                
								</p>
                                </span>
                               
                            </div>
							
							<div style="display:none;">
                                <span class="marginb">
                                <h3>58.360°全景（3D看车看房）</h3>
                                <p>通过该功能可以实现三维立体360°全景看车看房，也可以作为其他产品的三维立体展示。<br><br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/360.jpg"></p>
                                </span>
                               
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>59.支付宝在线支付</h3>
                                <p>通过支付宝在线支付接口可以实现微商城的在线支付功能。<br><br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/alipay.jpg"></p>
                                </span>
                               
                            </div>
							<div style="display:none;">
                                <span class="marginb">
                                <h3>60.婚庆喜帖</h3>
                                <p>婚庆行业的微信营销解决方案，可以展现用户想要表达的话、结婚日期、地址、导航、接待电话，同时亲朋好友可以在微喜帖平台上提交赴宴通知、送上祝福，并且转发喜帖。<br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/wedding.jpg"></p>
                                </span>
                               
                            </div>
                            <div style="display:none;">
                                <span class="marginb">
                                <h3>61.留言板</h3>
                                <p>微信留言板功能，能控制留言是否需要审核，留言间隔时间等。<br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/ly.PNG"></p>
                                </span>
                               
                            </div>
                            <div style="display:none;">
                                <span class="marginb">
                                <h3>60.房地产行业应用</h3>
                                <p>针对房地产行业微信营销的应用，包括楼盘介绍，360°全景看房，户型介绍，专家点评，预约看房等功能。<br>
								</p>
								<p><img alt="" src="<?php echo RES;?>/images/demo/fc.PNG"></p>
                                </span>
                               
                            </div>
                    </div>
                    </div>
                	<p class="clr"></p>
            	</div>
                
                
        	</div>
    	</div>
    </div>
<!--底部-->	</div>
<!--底部-->	</div>
</div>
<script type="text/javascript">try{Dd('webpage_7').className='left_menu_on';}catch(e){}</script>
</div>
<div class="IndexFoot" style="height:120px;">
<div class="foot">
<div class="foot_page">
<a href="/"><?php echo ($f_siteName); ?>,微信公众平台营销</a><br/>
帮助您快速搭建属于自己的营销平台,构建自己的客户群体。<br/>
大转盘、刮刮卡，会员卡,优惠卷,订餐,订房等营销模块,客户易用,易懂,易营销。
</div>
<div id="copyright">
	<?php echo ($f_siteName); ?>(c) 版权所有<br/>
	<a href="http://www.miibeian.gov.cn" target="_blank" style="color:white"><?php echo C('ipc');?></a><br/>
	QQ咨询：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_qq); ?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo ($f_qq); ?>:51" alt="联系我吧" title="联系我吧"/></a>

</div>
    </div>
</div>
<div style="display:none">
<?php echo base64_decode(C('countsz'));?>
</div>
</body>
</html>