<form action="/admin/posts " method="POST" role="form">
    @method('POST')
    @csrf
    <div class="form-group">
        <label for="title">標題：</label>
        <input id="title" name="title" class="form-control" placeholder="請輸入文章標題">
        …
        <label for="content">內容：</label>
        <textarea id="content" name="content" class="form-control" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for=" is_feature ">精選？</label>
        <select id=" is_feature " name="is_feature" class="form-control">
            <option value="0">否</option>
            <option value="1">是</option>
        </select>
    </div>
    <div class="text-right">
        …
    </div>
</form>
