 <!--body -->
<div class="text-white Bodybar">
    <header class="flex justify-between header">

        <!-- header-left -->
        <div class="flex items-center text-gray-500 bg-white header__left">
            <svg class="w-4 h-4 mr-3 fill-current" viewBox="0 0 20 20">
                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
            </svg>
            <input placeholder="Search for Artists, Songs, Album" type="text" class="border-0 focus:outline-none w-full" />
        </div>
        <!-- end of header-left -->

        <!-- header-right -->
        <div class="flex items-center header__right">
            <img src="{{ $user->images[0]->url ?? " "}}" class="w-8 h-8 rounded-full object-contain" alt="">
            <h4 class="ml-3">{{$user->display_name ?? " "}}</h4>
         </div>
         <!--end of header-right -->
    </header>

    <!-- this discover weekly image__info -->
    <div class="flex items-end bodybar__info">
        <img src="{{ $playlist->items[0]->images[1]->url ?? " "}}" class="object-contain" alt="">
        <div class="flex-1 body__infoText">
            <strong>PLAYLISTS</strong>
            <h2>{{$playlist->items[0]->name ?? " "}}</h2>
            <p>{{ $playlist->items[0]->description ?? " "}}</p>
            <div class="flex items-center mt-1 text-sm font-bold tracking-wide">
                <h6>
                    {{ $playlist->items[0]->owner->display_name ?? " "}} 
                </h6>
                <p class="ml-1 text-gray-200 text-xs font-bold tracking-wide">. {{$playlist->items[0]->tracks->total ?? " "}} songs</p>
            </div>
        </div>
    </div>
    <!-- end of discover__weekly bitch -->

    <!-- body__songs -->
    <div class="body__songs">

        <div class="flex items-center body__songsIcon">
            <!-- play button svg icon -->
            <svg id="plays" class="w-12 h-12 mt-5 mb-5 fill-current body__playIcon" viewBox="0 0 477.867 477.867"><g><g>
                <path d="M238.933,0C106.974,0,0,106.974,0,238.933s106.974,238.933,238.933,238.933s238.933-106.974,238.933-238.933
                        C477.726,107.033,370.834,0.141,238.933,0z M339.557,246.546c-1.654,3.318-4.343,6.008-7.662,7.662v0.085L195.362,322.56
                        c-8.432,4.213-18.682,0.794-22.896-7.638c-1.198-2.397-1.815-5.043-1.8-7.722V170.667c-0.004-9.426,7.633-17.07,17.059-17.075
                        c2.651-0.001,5.266,0.615,7.637,1.8l136.533,68.267C340.331,227.863,343.762,238.11,339.557,246.546z"/>
                    </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
            </svg>
                <!-- forvarite icon heart -->
            <svg class="w-6 h-6 ml-5  fill-current" viewBox="0 0 485 485">
                <path d="M343.611,22.543c-22.614,0-44.227,5.184-64.238,15.409c-13.622,6.959-26.135,16.205-36.873,27.175
                       c-10.738-10.97-23.251-20.216-36.873-27.175c-20.012-10.225-41.625-15.409-64.239-15.409C63.427,22.543,0,85.97,0,163.932
                    c0,55.219,29.163,113.866,86.678,174.314c48.022,50.471,106.816,92.543,147.681,118.95l8.141,5.261l8.141-5.261
                    c40.865-26.406,99.659-68.479,147.681-118.95C455.837,277.798,485,219.151,485,163.932C485,85.97,421.573,22.543,343.611,22.543z"/>
                    <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
            </svg>
            <!-- more icon 3 dots -->
            <svg class="w-4 h-4 ml-5 fill-current" viewBox="0 0 20 20">
                <path d="M4 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm6 0a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
            </svg>

        </div>

        <!-- songs row -->
        @php
            $count = count($playlistTrack->items);
        @endphp
        @for ($i = 0; $i < $count; $i++)
            <div class="ml-5 p-5 flex items-center text-white hover:cursor-pointer hover:bg-black hover:opacity-75 songsRow">
                {{-- <svg class="text-gray-500 fill-current songsRow__album" viewBox="0 0 20 20">
                    <path d="M0 0h20v20H0V0zm10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-5a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg> --}}
                <img src="{{ $playlistTrack->items[$i]->track->album->images[0]->url ?? " "}}" class="object-contain songsRow__album" />
                <div class="ml-5 songsRow__Info">
                    <h1 class="">{{$playlistTrack->items[$i]->track->name ?? " "}}</h1>
                    <p class="">
                        {{$playlistTrack->items[$i]->track->artists[0]->name ?? " "}}, {{$playlistTrack->items[$i]->track->album->name ?? " "}}
                    </p>
                </div>
            </div>
        @endfor

                          
                    <!-- end of song row -->
    </div>
                <!-- end 0f body__songs -->
            {{-- </div> --}}
</div>