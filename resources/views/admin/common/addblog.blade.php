@extends('admin.common.main')
@section('content')
<main class="column main">
    <div class="title">Add Blog</div>
<div class="field">
    <div class="control">
        <label for="title">Title</label>
        <input type="text" class="input is-primary">
    </div>
</div>
<div class="field">
    <div class="control">
        <label for="short description">Short Description</label>
        <textarea type="text" class="textarea is-primary"></textarea>
    </div>
</div>
<div class="field">
    <div class="control">
        <label for="image">Picture</label>
        <input type="file" class="input is-primary">
    </div>
</div>
<div class="field">
    <div class="control">
        <label for="category">Category</label>
        <div class="field">
  <div class="control">
    <div class="select is-primary is-fullwidth">
      <select>
        <option value="blog">Blog</option>
        <option value="activity">Activity</option>
      </select>
    </div>
  </div>
</div>
    </div>
</div>
{{-- 
<div class="field">
    <div class="control">
        <label for="body">Body</label>
        <textarea class="tiny" id="editor_tiny" name="body"></textarea>
    </div>
</div> --}}

</main>
@endsection