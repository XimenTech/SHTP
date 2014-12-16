<div id="content_edit_witem">
            <form>
             <div id="basic_info_wedit">
                <p>商品名称:
                <input type="text" name="item_title" value="{$items_title}"/>
                </p>
                <p>
                商品种类:
                <input type="text" name="item_type" value="{$item_type}"/>
                </p>
               
            </div>
            <div id="detial_wedit">
                <p>
                 商品描述:
             </p>
            </div>
            
            <div id="descreption_wedit">
            	<p>
                <textarea rows="10" cols="30" name="item_detail" >{$item_detail}
                </textarea>
                </p>
                 <p>
                    <input type='submit' value='保存并修改'>
                </p>
             </div>
             
             
            </form>
        </div>