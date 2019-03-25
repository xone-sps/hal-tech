<!DOCTYPE html>
<html lang="en">
@include('admin.partial.header')
<body>
            <div class="wrapper">
                <div class="columns">
            @include('admin.partial.sidebar')
                
        @yield('content')
    </div>
        </div>
        @include('admin.partial.footer')
</body>
</html>