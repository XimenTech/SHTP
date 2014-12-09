{foreach from=$items item=item}
<div>
<p>title : {$item->item_title}</p>
<p>owner : {$item->user_name}</p>
</div>
{/foreach}
