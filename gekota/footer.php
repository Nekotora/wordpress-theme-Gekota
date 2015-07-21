	<div class="hibox">
        <div class="hi container">
            <a href="javascript:;" onclick="getkoto();" title="换一条" class="hitokoto"><span id="hitokoto">Loading...</span></a>
        </div>
    </div>
    <div class="footerbox">
    	<div class="footer container">
            <span class="l">
                <a href="http://flag.moe/">CopyRight © 2015 <?php bloginfo('name'); ?></a></span>
            <span class="r">
                <p>
                    <a href="http://www.oott123.com">Hosted by oott123</a> | 
                    <a href="http://wordpress.org">Powered by WordPress</a>
                </p>
            </span>
            <div class="clear"></div>
        </div>
    </div>
    
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=30582263" charset="UTF-8"></script>

	<div id="hjsbox"></div>

	<?php wp_footer(); ?>
	
	<script>
        //初始化一言
        setTimeout("getkoto()",1000);
        //加载一言
        var t;
        function getkoto(){
            var hjs = document.createElement('script');
            hjs.setAttribute('id', 'hjs');
            hjs.setAttribute('src', 'http://api.hitokoto.us/rand?encode=jsc&fun=echokoto');
            document.getElementById("hjsbox").appendChild(hjs);
            t=setTimeout("getkoto()",5000);
        }
        //输出一言
        function echokoto(result){
            var hc = eval(result);
            //$("#hitokoto").fadeTo(300,0);
            document.getElementById("hitokoto").innerHTML = hc.hitokoto;
            //$("#hitokoto").fadeTo(300,0.75);
        }
        </script>
</body>
</html>