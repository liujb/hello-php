{debug}
<table>
	{foreach $list as $item}
	<tr>
		{foreach $item as $pair}
		<td>{$pair@key}:{$pair@value}</td>
		{/foreach}
	</tr>
	{/foreach}
</table>