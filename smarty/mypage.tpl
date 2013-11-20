{if $foo.no>10}
$foo.no>10
{elseif $foo.no==10}
$foo.no==10
{else}
don't konw
{/if}

<ul>
	{foreach $foo as $i}
	<li>{$i}</li>
	{/foreach}
</ul>
<ul>
	{foreach $foo as $key=>$val}
	<li>{$key}-{$val}</li>
	{/foreach}
</ul>

<ul>
{for $foo=1 to 3}
    <li>{$foo}</li>
{/for}
</ul>

<ul>
{for $foo=1 to 10 step 2}
    <li>{$foo}</li>
{/for}
</ul>