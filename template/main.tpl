<div id = "content_main">
	
	<div id="item_menu">
		<div class="button1"><b>手机、数码</div>
		<div class="button1">电器</div>
		<div class="button1">交通工具</div>
		<div class="button1">书籍</div>
		<div class="button1">服饰箱包</div>
		<div class="button1">游戏账号</div>
		<div class="button1">其他</b></div>
	</div>
	
	<div id="hot">
			<div id="hot_title">
				<button onclick="left()"><</button>
				<b style="color:#333;font-size:1em">热门推荐</b>
				<button onclick="right()">></button>
			</div>	
		<div id="page1" style="display:block">
			<b id="page">1/3</b>
			{section name=item loop=$hotitem_main max=5}
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$hotitem_main[item].item_img}">
				<p>&nbsp{$hotitem_main[item].item_title}</p>
				<p>&nbsp{$hotitem_main[item].item_price}</p>
			</div>
			{/section}
		</div>
		<div id="page2" style="display:none">
			<b id="page">2/3</b>
			{section name=item loop=$hotitem_main start=6 max=5}
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$hotitem_main[item].item_img}">
				<p>&nbsp{$hotitem_main[item].item_title}</p>
				<p>&nbsp{$hotitem_main[item].item_price}</p>
			</div>
			{/section}
		</div>
		<div id="page3" style="display:none">
			<b id="page">3/3</b>
			{section name=item loop=$hotitem_main start=11 max=5}
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$hotitem_main[item].item_img}">
				<p>&nbsp{$hotitem_main[item].item_title}</p>
				<p>&nbsp{$hotitem_main[item].item_price}</p>
			</div>
			{/section}
		</div>
	</div>
	
	<div id="recently">
		<div>
			<b style="color:#333;font-size:1em">最近浏览</b>
		</div>
	</div>
	
	<div id="new">
		<div style="height:1em;"><b id="new_title">最新上架</b></div>
		<br>
		{section name=new loop=$newitem_main}
		<div class="new_item" >
			<div style="width:20%; height:100%;">
				<img class="new_img" src="resource/image/{$newitem_main[new].item_img}">
			</div>
			<div style="padding-left:1em;">
				{$newitem_main[new].item_title}<br>
				detail
			</div>
			<div style="padding-left:5em;">
				{$newitem_main[new].item_price}
			</div>
		</div>
		{/section}
	</div>	
</div>

