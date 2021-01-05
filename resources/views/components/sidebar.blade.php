    <!-- sidebar -->
<div class="text-white Sidebar">
    <img src="https://getheavy.com/wp-content/uploads/2019/12/spotify2019-830x350.jpg"
         class="object-contain Sidebar-logo" alt="">
                
    <div class="flex items-center cursor-pointer hover:text-white sideOption">
        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
            <path d="M8 20H3V10H0L10 0l10 10h-3v10h-5v-6H8v6z"/>
        </svg>
        <p>
            Home
        </p>
    </div>

    <div class="flex items-center cursor-pointer hover:text-white sideOption">
        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
        </svg>
        <p class="">
            Search
        </p>
    </div>

    <div class="flex items-center cursor-pointer hover:text-white sideOption">
        <svg  class="w-4 h-4 fill-current" viewBox="0 0 426.667 426.667">
            <g><g><g>
                <path d="M384,0H128c-23.573,0-42.667,19.093-42.667,42.667v256c0,23.573,19.093,42.667,42.667,42.667h256
                    c23.573,0,42.667-19.093,42.667-42.667v-256C426.667,19.093,407.573,0,384,0z M341.333,106.667h-64V224
                    c0,29.44-23.893,53.333-53.333,53.333S170.667,253.44,170.667,224S194.56,170.667,224,170.667c12.053,0,23.04,4.16,32,10.88V64
                    h85.333V106.667z"/>
                <path d="M42.667,85.333H0V384c0,23.573,19.093,42.667,42.667,42.667h298.667V384H42.667V85.333z"/>
                </g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
        </svg>
        <p>
            Your Library
        </p>
    </div>

    <br />
    <strong class="uppercase Sidebar__title">
        Playlists
    </strong>
    <hr />

    <!-- playlists types -->
    <div class="sideOption__playlists">
        @foreach ($playlist->items as $playlist)
            <div class="flex items-center  cursor-pointer hover:text-white sideOption">
                <p class="">
                    {{$playlist->name ?? " "}}
                </p>
            </div>
        @endforeach
    </div>
    <!-- end of playlist -->

</div>