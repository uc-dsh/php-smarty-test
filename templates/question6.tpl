<table border=1>
    <thead>
        <tr>
            <th>Fax</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        {foreach $Contacts as $data}
            <tr>
                <td>{$data["fax"]}</td>
                <td>{$data["email"]}</td>
                <td>
                    <p><b>Home : </b>{$data["phone"]["home"]}</p>
                    <p><b>Cell : </b>{$data["phone"]["cell"]}</p>
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>