{* Counter *}
<table border=1>
    <thead>
        <tr>
            <th>Sr.no.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Pass</th>
        </tr>
    </thead>
    <tbody>
        {counter start=0 skip=1}
        {foreach $array as $data}
            <tr>
                <td>{counter}</td>
                <td>{$data["name"]}</td>
                <td>{$data["email"]}</td>
                <td>{$data["pass"]}</td>
            </tr>
        {/foreach}
    
        {foreach $array as $data}
            <tr>
            <td>{cycle values='odd, even'}</td>
                <td>{$data["name"]}</td>
                <td>{$data["email"]}</td>
                <td>{$data["pass"]}</td>
            </tr>
        {/foreach}
    </tbody>
</table>