@vite('resources/css/app.css')

@include("layouts.header")

@include("layouts.sidebar")

<div class="flex flex-col h-screen px-4 pt-4 mt-14 sm:ml-64">
    <div class="flex-grow">
        @yield("content")
</div>
@include("layouts.footer")
</div>