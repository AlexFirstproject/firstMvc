<h3>Pages</h3><br>
<table class="table table-striped" style="width: 400px;">
    {foreach $data.pages as $page_data }
        <tr>
            <td><b>{$page_data.title}</b></td>
            <td align="right">
                <a href="/admin/pages/edit/{$page_data.id}"><button class="btn btn-sm btn-primary">edit</button></a>
                <a href="/admin/pages/delete/{$page_data.id}" onclick="return confirmDelete();"><button class="btn btn-sm btn-warning">delete</button></a>
            </td>
        </tr>
    {/foreach}
</table>

<br>

<div>
    <a href="/admin/pages/add/"><button class="btn btn-sm btn-success">New Page</button></a>
</div>