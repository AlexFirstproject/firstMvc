<h3>Edit pages</h3><br>
<form method="post" action="">
    <input type="hidden" name="id" value="{$data.page.id}" />
    <div class="form-group">
        <label for="alias">Alias</label>
        <input type="text" id="alias" name="alias" value="{$data.page.alias}" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{$data.page.title}" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea id="content" name="content" class="form-control">{$data.page.content}</textarea>
    </div>
    <div class="form-group">
        <label for="is_pablished">Publish?</label>
        <input type="checkbox" name="is_pablished" id="is_pablished" value="" {if $data.page.is_pablished} checked{/if}/>
    </div>
    <input type="submit" class="btn btn-success" />
</form>