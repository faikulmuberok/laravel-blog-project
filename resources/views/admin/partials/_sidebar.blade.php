<div class="w-64 bg-gray-800 text-white h-screen p-4">
    <div class="space-y-4">
        <div class="p-2">
            <h2 class="text-xl font-bold">Menu</h2>
        </div>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard</a>
            <a href="{{ route('admin.posts.index') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Posts</a>
            <a href="{{ route('admin.categories.index') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Categories</a>
        </nav>
    </div>
</div>