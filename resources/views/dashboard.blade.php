<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <style>
        .liked {
            color: red;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow">
        
        <div class="max-w-7xl w-[100%] px-4 py-3 flex justify-between items-center">
            <!-- Left side: Search Bar -->
            <div class="m-6">
                <img src="https://i.pinimg.com/564x/76/49/58/7649586e0784b7f830053467851846f9.jpg" alt="Logo" class="h-10">
            </div>
            <div class="flex">
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M21.32 19.98l-3.77-3.77A7.93 7.93 0 0 0 20 11c0-4.42-3.58-8-8-8s-8 3.58-8 8 3.58 8 8 8c1.62 0 3.11-.48 4.37-1.3l3.77 3.77c.33.33.85.38 1.21.06a.91.91 0 0 0 .06-1.28zM4 11c0-3.31 2.69-6 6-6s6 2.69 6 6-2.69 6-6 6-6-2.69-6-6z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <input type="text" placeholder="Search friends..."
                        class="block w-full border border-gray-300 rounded-lg pl-10 pr-4 py-2 focus:outline-none focus:border-blue-500">
                </div>
            </div>

            <!-- Right side: Social Media Icons -->
            <div class="flex space-x-4">
                <a href="#" class="text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <!-- Replace with actual social media icons -->
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 16h-2v-6h2v6zm0-8h-2c-.552 0-1 .448-1 1v6c0 .552.448 1 1 1h2c.552 0 1-.448 1-1v-6c0-.552-.448-1-1-1z">
                        </path>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <!-- Replace with actual social media icons -->
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 16h-2v-6h2v6zm0-8h-2c-.552 0-1 .448-1 1v6c0 .552.448 1 1 1h2c.552 0 1-.448 1-1v-6c0-.552-.448-1-1-1z">
                        </path>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <!-- Replace with actual social media icons -->
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 16h-2v-6h2v6zm0-8h-2c-.552 0-1 .448-1 1v6c0 .552.448 1 1 1h2c.552 0 1-.448 1-1v-6c0-.552-.448-1-1-1z">
                        </path>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <!-- Replace with actual social media icons -->
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 16h-2v-6h2v6zm0-8h-2c-.552 0-1 .448-1 1v6c0 .552.448 1 1 1h2c.552 0 1-.448 1-1v-6c0-.552-.448-1-1-1z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <div class="flex h-screen">
        <!-- Left Sidebar -->
        <div class="w-64 bg-white border-r border-gray-200 p-4">
            
            <nav class="space-y-2">
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-100">Feed</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-100">Events</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-100">Watch Videos</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-100">Photos</a>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-gray-100">Files</a>
            </nav>
            <div class="mt-10">
                <h3 class="text-sm font-semibold text-gray-500 uppercase">Pages You Like</h3>
                <div class="mt-4 space-y-2">
                    <div class="flex items-center justify-between">
                        <span>Fashion Design</span>
                        <span class="text-xs text-white bg-blue-500 rounded-full px-2">4</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Graphic Design</span>
                        <span class="text-xs text-white bg-blue-500 rounded-full px-2">2</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>NASA Community</span>
                        <span class="text-xs text-white bg-blue-500 rounded-full px-2">8</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Web Designer</span>
                        <span class="text-xs text-white bg-blue-500 rounded-full px-2">7</span>
                    </div>
                    <div class="mt-10">
                        <nav class="space-y-2">
                            <a href="{{ route('profile') }}" class="block py-2.5 px-4 rounded hover:bg-gray-100">Profile</a>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block py-2.5 px-4 rounded hover:bg-gray-100">Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto">
            <div class="p-4">
                <!-- Stories -->
                <div class="flex space-x-4 overflow-x-auto">
                    <div class="w-24 h-24 bg-gray-300 rounded-full flex-shrink-0"></div>
                    <div class="w-24 h-24 bg-gray-300 rounded-full flex-shrink-0"></div>
                    <div class="w-24 h-24 bg-gray-300 rounded-full flex-shrink-0"></div>
                    <div class="w-24 h-24 bg-gray-300 rounded-full flex-shrink-0"></div>
                    <div class="w-24 h-24 bg-gray-300 rounded-full flex-shrink-0"></div>
                </div>

                <!-- Recent Posts -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <img src="https://i.pinimg.com/736x/d6/2b/fa/d62bfa76497b66a0db861d1f118ca0fe.jpg" alt="Avatar" class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <div class="text-lg font-semibold">Alex Guerrero</div>
                                <div class="text-gray-500 text-sm">10 mins ago</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <img src="https://i.pinimg.com/564x/ef/ba/55/efba552ea25d12a5f4be7f481d76acda.jpg" alt="Post Image" class="w-full rounded-lg">
                        </div>
                        <div class="mt-4">
                            <div class="text-gray-700">#Vianus #Aesthetic</div>
                            <div class="text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex space-x-4">
                                <span class="flex items-center space-x-1 like-button cursor-pointer">
                                    <svg class="w-5 h-5 text-gray-400 like-icon" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                                    </svg>
                                    <span class="like-count">125</span>
                                </span>
                                <span class="flex items-center space-x-1 comment-button cursor-pointer">
                                    <svg class="w-5 h-5 text-gray-400 comment-icon" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8 14H8v-2h4v2zm6-4H8v-2h10v2zm0-4H8V6h10v2z"></path>
                                    </svg>
                                    <span class="comment-count">348</span>
                                </span>
                            </div>
                        </div>
                    </div>

    <!-- Modal -->
    <div class="modal fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
        <div class="modal-dialog bg-white rounded-lg overflow-hidden shadow-xl max-w-lg w-full">
            <div class="modal-content">
                <div class="modal-header p-4 border-b border-gray-200 flex justify-between items-center">
                    <h5 class="modal-title text-lg font-semibold">Comments</h5>
                    <button type="button" class="close-modal text-gray-500 hover:text-gray-700">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9l-3 3m0-6l3 3m3 3l-3-3m0 0l3-3m-6 6l3-3m-3 3l3-3" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <textarea class="form-control w-full p-2 border border-gray-300 rounded-lg" placeholder="Write a comment..." rows="3"></textarea>
                </div>
                <div class="modal-footer p-4 border-t border-gray-200 flex justify-end">
                    <button type="button" class="close-modal bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Close</button>
                    <button type="button" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save changes</button>
                </div>
            </div>
        </div>
    </div>                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <img src="https://i.pinimg.com/564x/c8/96/5a/c8965a48e07437c660d31e57afb382c7.jpg" alt="Avatar" class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <div class="text-lg font-semibold">Edward Kelly</div>
                                <div class="text-gray-500 text-sm">20 mins ago</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <img src="https://i.pinimg.com/564x/15/b2/75/15b275e88375d1a01081593912909722.jpg" alt="Post Image" class="w-full rounded-lg">
                        </div>
                        <div class="mt-4">
                            <div class="text-gray-700">#Conallus #Commando</div>
                            <div class="text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex space-x-4">
                                <span class="flex items-center space-x-1">
                                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                                    </svg>
                                    <span>125</span>
                                </span>
                                <span class="flex items-center space-x-1">
                                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8 14H8v-2h4v2zm6-4H8v-2h10v2zm0-4H8V6h10v2z"></path>
                                    </svg>
                                    <span>348</span>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <img src="https://i.pinimg.com/564x/f3/71/29/f37129b97dc95d85e09c01c5a15bafdd.jpg" alt="Avatar" class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <div class="text-lg font-semibold">Edward Kelly</div>
                                <div class="text-gray-500 text-sm">20 mins ago</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <img src="https://i.pinimg.com/564x/69/8b/71/698b716ec5b24a195e218c4aad3079f0.jpg" alt="Post Image" class="w-full rounded-lg">
                        </div>
                        <div class="mt-4">
                            <div class="text-gray-700">#Conallus #Commando</div>
                            <div class="text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex space-x-4">
                                <span class="flex items-center space-x-1">
                                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                                    </svg>
                                    <span>125</span>
                                </span>
                                <span class="flex items-center space-x-1">
                                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8 14H8v-2h4v2zm6-4H8v-2h10v2zm0-4H8V6h10v2z"></path>
                                    </svg>
                                    <span>348</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-center">
                            <img src="https://i.pinimg.com/564x/d3/60/81/d360817d38b426258c8e5f800b8f3984.jpg" alt="Avatar" class="w-12 h-12 rounded-full">
                            <div class="ml-4">
                                <div class="text-lg font-semibold">Edward Kelly</div>
                                <div class="text-gray-500 text-sm">20 mins ago</div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <img src="https://i.pinimg.com/736x/36/31/db/3631db626c78e7dcbf0c2c310fb242c7.jpg" alt="Post Image" class="w-full rounded-lg">
                        </div>
                        <div class="mt-4">
                            <div class="text-gray-700">#Conallus #Commando</div>
                            <div class="text-gray-500 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex space-x-4">
                                <span class="flex items-center space-x-1">
                                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                                    </svg>
                                    <span>125</span>
                                </span>
                                <span class="flex items-center space-x-1">
                                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-8 14H8v-2h4v2zm6-4H8v-2h10v2zm0-4H8V6h10v2z"></path>
                                    </svg>
                                    <span>348</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="w-64 bg-white border-l border-gray-200 p-4">
            <!-- Search Bar -->
            <div class="mb-4">
                <input type="text" placeholder="Search friends..." class="w-full border border-gray-300 px-3 py-2 rounded-sm focus:outline-none focus:border-blue-500">
            </div>

            <!-- Conversations -->
            <div class="mb-4">
                <h3 class="text-sm font-semibold text-gray-500 uppercase mb-2">Conversations</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center space-x-2 hover:bg-gray-100 rounded-lg px-3 py-2">
                            <img src="https://i.pinimg.com/564x/07/33/ba/0733ba760b29378474dea0fdbcb97107.jpg" alt="Avatar" class="w-8 h-8 rounded-full">
                            <span class="text-sm font-medium">John Doe</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2 hover:bg-gray-100 rounded-lg px-3 py-2">
                            <img src="https://i.pinimg.com/564x/74/b8/8e/74b88e8d20b2b3bc2b6eb9c306372808.jpg" alt="Avatar" class="w-8 h-8 rounded-full">
                            <span class="text-sm font-medium">Jane Smith</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2 hover:bg-gray-100 rounded-lg px-3 py-2">
                            <img src="https://i.pinimg.com/564x/65/ca/51/65ca51fa49d0d1dd6c689bd0f7ce782f.jpg" alt="Avatar" class="w-8 h-8 rounded-full">
                            <span class="text-sm font-medium">Michael Johnson</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Groups -->
            <div>
                <h3 class="text-sm font-semibold text-gray-500 uppercase mb-2">Groups</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center space-x-2 hover:bg-gray-100 rounded-lg px-3 py-2">
                            <span class="text-sm font-medium">Design Enthusiasts</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2 hover:bg-gray-100 rounded-lg px-3 py-2">
                            <span class="text-sm font-medium">Photography Club</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2 hover:bg-gray-100 rounded-lg px-3 py-2">
                            <span class="text-sm font-medium">Tech Innovators</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('.like-button').addEventListener('click', function() {
            const likeIcon = document.querySelector('.like-icon');
            const likeCount = document.querySelector('.like-count');
            let count = parseInt(likeCount.textContent);

            if (likeIcon.classList.contains('liked')) {
                likeIcon.classList.remove('liked');
                likeCount.textContent = count - 1;
            } else {
                likeIcon.classList.add('liked');
                likeCount.textContent = count + 1;
            }
        });

        document.querySelector('.comment-button').addEventListener('click', function() {
            document.querySelector('.modal').classList.add('active');
        });

        document.querySelectorAll('.close-modal').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelector('.modal').classList.remove('active');
            });
        });
    </script>
</body>
</html>

