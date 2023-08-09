<table border=1>
<thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Pass</th>
    </tr>
</thead>
<tbody>
{foreach $array as $data}
    <tr>
        <td>{$data["name"]}</td>
        <td>{$data["email"]}</td>
        <td>{$data["pass"]}</td>
    </tr>
{/foreach}
</tbody>
</table>