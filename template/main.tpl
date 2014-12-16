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
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[0][item_img]}">
				<p>{$arr[0][item_title]}</p>
				<p>{$arr[0][item_price]}</p>
			</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[1][item_img]}">
				<p>{$arr[1][item_title]}</p>
				<p>{$arr[1][item_title]}</p>
			</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[2][item_img]}">
				<p>{$arr[2][item_title]}</p>
				<p>{$arr[2][item_title]}</p>
			</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[3][item_img]}">
				<p>{$arr[3][item_title]}</p>
				<p>{$arr[3][item_title]}</p> 
			</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[4][item_img]}">
				<p>{$arr[4][item_title]}</p>
				<p>{$arr[4][item_title]}</p>
			</div>
		</div>
		<div id="page2" style="display:none">
			<b id="page">2/3</b>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[5][item_img]}">
				<p>{$arr[5][item_title]}</p>
				<p>{$arr[5][item_title]}</p>

			</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[6][item_img]}">
				<p>{$arr[6][item_title]}</p>
				<p>{$arr[6][item_title]}</p>
			</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[7][item_img]}">
				<p>{$arr[7][item_title]}</p>
				<p>{$arr[7][item_title]}</p>
			</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[8][item_img]}">
				<p>{$arr[8][item_title]}</p>
				<p>{$arr[8][item_title]}</p>
			</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[9][item_img]}">
				<p>{$arr[9][item_title]}</p>
				<p>{$arr[9][item_title]}</p>
				</div>
				</div>
		<div id="page3" style="display:none">
			<b id="page">3/3</b>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[10][item_img]}">
				<p>{$arr[10][item_title]}</p>
				<p>{$arr[10][item_title]}</p>
			</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[11][item_img]}">
				<p>{$arr[11][item_title]}</p>
				<p>{$arr[11][item_title]}</p>
				</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[12][item_img]}">
				<p>{$arr[12][item_title]}</p>
				<p>{$arr[12][item_title]}</p>
				</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[13][item_img]}">
				<p>{$arr[13][item_title]}</p>
				<p>{$arr[13][item_title]}</p>
			</div>
			<div class="hot_item">
				<img class="hot_img" src="resource/image/{$arr[14][item_img]}">
				<p>{$arr[14][item_title]}</p>
				<p>{$arr[14][item_title]}</p>
			</div>
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
		<div class="new_item">
			<div style="width:20%; height:100%;">
				<img class="new_img" src="resource/image/recently.png">
			</div>
			<div style="padding-left:1em;">
				商品名称<br>
				detail
			</div>
			<div style="padding-left:5em;">
				价格
			</div>
		</div>
		<div class="new_item">
			<div style="width:20%; height:100%;">
				<img class="new_img" src="resource/image/recently.png">
			</div>
			<div style="padding-left:1em;">
				商品名称<br>
				detail
			</div>
			<div style="padding-left:5em;">
				价格
			</div>
		</div>
		<div class="new_item">
			<div style="width:20%; height:100%;">
				<img class="new_img" src="resource/image/recently.png">
			</div>
			<div style="padding-left:1em;">
				商品名称<br>
				detail
			</div>
			<div style="padding-left:5em;">
				价格
			</div>	
		</div>
		<div class="new_item">
			<div style="width:20%; height:100%;">
				<img class="new_img" src="resource/image/recently.png">
			</div>
			<div style="padding-left:1em;">
				商品名称<br>
				detail
			</div>
			<div style="padding-left:5em;">
				价格
			</div>
		</div>
	</div>	
</div>

