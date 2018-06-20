<h3>Add page</h3><br>
<form method="post" action="">
    <div class="form-group">
        <label for="alias">Alias</label>
        <input type="text" id="alias" name="alias" value="" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea id="content" name="content" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="is_pablished">Publish?</label>
        <input type="checkbox" name="is_pablished" id="is_pablished" checked/>
    </div>
    <input type="submit" class="btn btn-success" />
</form>