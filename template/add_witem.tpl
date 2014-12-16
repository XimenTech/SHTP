<div id="content_add_witem">
            <form>
            <div id="wbasic_info">
                <p>商品名称:
                <input type="text" name="item_title" value="{$items_title}"/>
                </p>
                <p>
                商品种类:
                <input type="text" name="item_type" value="{$item_type}"/>
                </p>
               
            </div>
            <div id="wdetial">
                <p>
                 商品描述:
             </p>
            </div>

            <div id="wdescreption">
            	<p>
                <textarea rows="10" cols="30" name="item_detail" >{$item_detail}
                </textarea>
                 
                </p>
                <p>
                <input type='submit' value='保存并添加'>
             </p>
             </div>
             
            </form>
        </div>