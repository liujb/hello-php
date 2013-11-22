<root attr="{$root_attr|escape}">
    {section name="d" loop=$elem_data}
        <elem>{$elem_data[d]|escape}</elem>
    {/section}
</root>
