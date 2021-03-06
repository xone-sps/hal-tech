@extends('admin.common.main')
@section('content')
    <main class="column main">
        <div class="title">Add Blog</div>
        <form action="{{ route('postblog') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
        <div class="field">
            <div class="control">
                <label for="title">Title</label>
                <input type="text" name="title" class="input is-primary">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <label for="short description">Short Description</label>
                <textarea type="text" name="description" class="textarea is-primary"></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <label for="image">Picture</label>
                <input type="file" name="image" class="input is-primary">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <label for="category">Category</label>
                <div class="field">
                    <div class="control">
                        <div class="select is-primary is-fullwidth">
                            <select name="category">
                                <option value="blog">Blog</option>
                                <option value="activity">Activity</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <label for="body">Body</label>
                <br>
                <textarea rows="6" cols="12" class="editor" id="editor_tiny" name="body"></textarea>
            </div>
        </div>

        <button class="button is-success" type="submit">Save</button>
</form>
    </main>

@endsection

@section('js')
    <script>
        var baseUrl = '{{ url('/') }}';
    </script>
    <script src="{{ asset('/js/tiny/jquery.tinymce.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/tiny/tinymce.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/tiny/tinymce.setting.js')}}" type="text/javascript"></script>
@stop
