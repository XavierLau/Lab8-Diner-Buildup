<h2>Menu Maintenance - Editing</h2>
{error_messages}
<form action="/crud/save" method="post" enctype="multipart/form-data">
    {fid}
    {fname}
    {fdescription}
    {fprice}
    {fpicture}
    <div class="form-group">
        <label for="replacement">Replacement picture</label>
        <input type="file" id="replacement" name="replacement"/>
    </div>
    {fcategory}
    {zsubmit} <a class="btn btn-default" role="buton" href="/crud/cancel">Cancel</a> <a class="btn btn-default" role="button" href="/curd/delete">Delete</a>
</form>