<div>
      Le contenu de notre page index.tpl
</div>
<table>
{foreach from=$allproducts item=product }
<tr>
      <td>{product.name}</td>
      <td>{product.description}</td>
      <td>{product.price}</td>
</tr>  
{/foreach}
</table>