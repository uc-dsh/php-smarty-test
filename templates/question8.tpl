<ul>
    {foreach $our_culture as $data}
        {foreach from=$data key=key item=item }
            <li>{$key} : {$item}</li>
        {/foreach}
    {/foreach}
</ul>