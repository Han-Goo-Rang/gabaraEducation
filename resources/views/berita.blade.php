<x-app-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="masonry-item filterNews">
            <div class="post-item bg-white p-4 rounded-lg shadow-md">
                <div class="thumb relative">
                    <a href="blog-details.html">
                        <img src="assets/img/blog/01.jpg" alt="Roomedia-Blog" class="w-full h-64 object-cover rounded-t-lg">
                    </a>
                    <a class="absolute top-2 right-2 bg-black text-white p-2 rounded-full" href="blog-details.html">
                        <i class="lnr lnr-camera-video"></i>
                    </a>
                </div>
                <div class="content mt-4">
                    <h4 class="title text-xl font-semibold">
                        <a href="blog-details.html" class="hover:text-blue-500">Your Brand’s Next On Social Media</a>
                    </h4>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur cora</p>
                    <div class="meta bottom mt-4 flex justify-between items-center">
                        <div>
                            <a class="category text-sm text-gray-500" href="blog.html">
                                <img class="inline-block w-4 h-4 mr-2" src="assets/img/icons/layer.png" alt="Icon"> In <span class="text-blue-500">News</span>
                            </a>
                            <a class="post-date text-sm text-gray-500" href="blog.html">
                                <img class="inline-block w-4 h-4 mr-2" src="assets/img/icons/calender.png" alt="Icon"> 16/4/2021
                            </a>
                        </div>
                        <div class="post-share">
                            <a class="icon-share" href="#/" aria-label="Share Post">
                                <img class="icon-img w-6 h-6" src="assets/img/icons/share.png" alt="Icon">
                            </a>
                            <ul class="flex space-x-2">
                                <li><a class="text-blue-600" href="#/"><i class="social_facebook"></i></a></li>
                                <li><a class="text-blue-400" href="#/"><i class="social_twitter"></i></a></li>
                                <li><a class="text-pink-500" href="#/"><i class="social_dribbble"></i></a></li>
                                <li><a class="text-red-600" href="#/"><i class="social_pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="masonry-item filterBusiness">
            <div class="post-item bg-white p-4 rounded-lg shadow-md">
                <div class="thumb relative">
                    <a href="blog-details.html">
                        <img src="assets/img/blog/02.jpg" alt="Roomedia-Blog" class="w-full h-64 object-cover rounded-t-lg">
                    </a>
                    <a class="absolute top-2 right-2 bg-black text-white p-2 rounded-full" href="blog-details.html">
                        <i class="lnr lnr-volume-high"></i>
                    </a>
                </div>
                <div class="content mt-4">
                    <h4 class="title text-xl font-semibold">
                        <a href="blog-details.html" class="hover:text-blue-500">Sample Articles With Long Text Lorem Ispum</a>
                    </h4>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur cora adipiscing elit....</p>
                    <div class="meta bottom mt-4 flex justify-between items-center">
                        <div>
                            <a class="category text-sm text-gray-500" href="blog.html">
                                <img class="inline-block w-4 h-4 mr-2" src="assets/img/icons/layer.png" alt="Icon"> In <span class="text-blue-500">Business</span>
                            </a>
                            <a class="post-date text-sm text-gray-500" href="blog.html">
                                <img class="inline-block w-4 h-4 mr-2" src="assets/img/icons/calender.png" alt="Icon"> 16/4/2021
                            </a>
                        </div>
                        <div class="post-share">
                            <a class="icon-share" href="#/" aria-label="Share Post">
                                <img class="icon-img w-6 h-6" src="assets/img/icons/share.png" alt="Icon">
                            </a>
                            <ul class="flex space-x-2">
                                <li><a class="text-blue-600" href="#/"><i class="social_facebook"></i></a></li>
                                <li><a class="text-blue-400" href="#/"><i class="social_twitter"></i></a></li>
                                <li><a class="text-pink-500" href="#/"><i class="social_dribbble"></i></a></li>
                                <li><a class="text-red-600" href="#/"><i class="social_pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Repeat for other posts -->
    </div>

</x-app-layout>
