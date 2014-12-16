		<!-- 页面主要内容板块 -->
		<div id = "content_view_item">
              <div id="item_info">
	                <p>商品名称：{$items_title}</p>     
		            <p>商品编号：{$item_id}</p>
	                <p>商品状态：{$item_status}</p>
	                <p>商品种类：{$item_type}</p>
	                <p>价格：{$item_price}￥</p>
	                <p>商品图片：</p>
	           <div id="vpicture">          
	                <img src="resource/image/{$item_img}" style="width: 50%;height:70%;margin-left:7em;margin-top:0.5em" />
	           </div>
	                
	                
	           </div>

               <div id="owner_info">
	                <p>卖家qq：{$item_owner_qq}</p>
	                <p>卖家电话：{$item_owner_phone}</p>
	                <p>卖家地址：{$item_owner_address}</p>
	                <p>商品描述:{$item_detail}</p>
	           </div>

	           <div id="sys_info">
		             <p>浏览次数：{$item_viewtime}</p>
	                 <p>结束时间：{$item_dttm}</p>

	           </div>
	           {if ({$flag}==1)}
               <div style="margin-left:45em;margin-top:2em;">
               	
	            <button onclick="javascript:window.location.href='index.php?controller=c_item&action=removeitem&item_id={$item_id}'" >删除商品 
	             </button>
	         	</div>
                {/if}
               
		</div>
		