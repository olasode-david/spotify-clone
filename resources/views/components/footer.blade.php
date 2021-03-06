@php
    $count = rand(0, 15);
@endphp
<!--footer -->
<div class="flex items-center justify-between p-5 fixed bottom-0 Footer text-white">
    <!-- footer-left -->
    <div class="flex items-center footer__left">
        <img src="{{ $playlistTrack->items[$count]->track->album->images[0]->url ?? ' '}}" class="object-contain mr-5 footer__ablumLogo" />
        {{-- <img src="{{ asset('image/IMG_20200101_001851_551.jpg')}}" class="object-contain mr-5 footer__ablumLogo" alt=""> --}}
        <div class="songInfo">
            <h4>{{$playlistTrack->items[$count]->track->name ?? " "}}</h4>
            <p>{{$playlistTrack->items[$count]->track->artists[0]->name ?? " "}}, {{$playlistTrack->items[$count]->track->album->name ?? " "}}</p>
        </div>
    </div>
    <!-- footer-center -->
    <div class="flex items-center justify-between footer__center">

        <!-- shuffle icon -->
        <svg class="w-4 h-4 fill-current footer__green" viewBox="0 0 20 20">
            <path d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z"/>
        </svg>

        <!-- skipPerviously icon -->
        <svg class="w-4 h-4 fill-current footer__icon" viewBox="0 0 20 20">
            <path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z"/>
        </svg>

        <!-- play outline icon -->
        <svg class="w-6 h-6 fill-current footer__icon" viewBox="0 0 20 20">
            <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 6l8 4-8 4V6z"/>
        </svg>

        <!-- next icon -->
        <svg class="w-4 h-4 fill-current footer__icon" viewBox="0 0 20 20">
            <path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z"/>
         </svg>

        <!-- repeat icon -->
        <svg class="w-4 h-4 fill-current footer__green" viewBox="0 0 511.979 511.979">
            <g><g><g>
            <path d="M341.552,85.334c-0.077-0.001-0.152-0.012-0.229-0.012H222.159l27.582-27.582c8.331-8.331,8.331-21.839,0-30.17
                c-8.331-8.331-21.839-8.331-30.17,0l-64,64c-0.497,0.497-0.967,1.02-1.413,1.563c-0.202,0.246-0.378,0.506-0.568,0.759
                c-0.228,0.304-0.463,0.601-0.674,0.917c-0.203,0.303-0.379,0.618-0.564,0.929c-0.171,0.286-0.351,0.566-0.509,0.861
                c-0.169,0.317-0.313,0.643-0.465,0.966c-0.145,0.308-0.299,0.611-0.43,0.926c-0.13,0.314-0.235,0.635-0.349,0.953
                c-0.122,0.338-0.251,0.672-0.356,1.018c-0.096,0.318-0.167,0.642-0.248,0.964c-0.089,0.353-0.188,0.701-0.259,1.061
                c-0.074,0.372-0.118,0.748-0.171,1.122c-0.045,0.314-0.104,0.622-0.136,0.94c-0.068,0.693-0.105,1.388-0.105,2.084
                c0,0.007-0.001,0.014-0.001,0.021c0,0.008,0.001,0.015,0.001,0.023c0.001,0.695,0.037,1.39,0.105,2.082
                c0.031,0.318,0.091,0.627,0.136,0.941c0.054,0.375,0.097,0.75,0.171,1.122c0.071,0.36,0.17,0.708,0.259,1.061
                c0.081,0.322,0.151,0.645,0.248,0.963c0.105,0.346,0.235,0.68,0.356,1.019c0.114,0.318,0.219,0.638,0.348,0.951
                c0.131,0.316,0.285,0.619,0.43,0.927c0.152,0.323,0.296,0.649,0.465,0.965c0.158,0.295,0.338,0.576,0.51,0.862
                c0.185,0.31,0.361,0.625,0.564,0.928c0.212,0.317,0.448,0.615,0.676,0.919c0.189,0.252,0.364,0.512,0.566,0.757
                c0.446,0.544,0.916,1.067,1.413,1.564l64,64c8.331,8.331,21.839,8.331,30.17,0c8.331-8.331,8.331-21.839,0-30.17l-27.582-27.582
                h118.984c0.057,0,0.112,0.009,0.169,0.009c70.778,0,128,57.222,128,128c0,31.068-12.408,60.299-34.121,82.031
                c-8.328,8.335-8.322,21.842,0.013,30.17c8.335,8.328,21.842,8.322,30.17-0.013c29.612-29.637,46.605-69.67,46.605-112.188
                C511.979,161.736,435.783,85.464,341.552,85.334z"/>
            <path d="M358.39,418.083c0.227-0.303,0.462-0.6,0.673-0.915c0.203-0.304,0.379-0.619,0.565-0.931
                c0.171-0.286,0.35-0.565,0.507-0.859c0.17-0.318,0.314-0.645,0.467-0.97c0.145-0.306,0.298-0.608,0.428-0.922
                c0.13-0.315,0.236-0.637,0.35-0.957c0.121-0.337,0.25-0.669,0.354-1.013c0.097-0.32,0.168-0.646,0.249-0.969
                c0.089-0.351,0.187-0.698,0.258-1.055c0.074-0.375,0.118-0.753,0.173-1.13c0.044-0.311,0.104-0.617,0.135-0.932
                c0.138-1.4,0.138-2.811,0-4.211c-0.031-0.316-0.09-0.622-0.135-0.933c-0.054-0.377-0.098-0.755-0.172-1.13
                c-0.071-0.358-0.169-0.705-0.258-1.056c-0.081-0.323-0.152-0.648-0.249-0.968c-0.104-0.345-0.234-0.677-0.355-1.014
                c-0.115-0.32-0.22-0.642-0.35-0.957c-0.13-0.314-0.283-0.615-0.428-0.921c-0.153-0.325-0.297-0.653-0.468-0.971
                c-0.157-0.293-0.336-0.572-0.506-0.857c-0.186-0.312-0.363-0.628-0.566-0.932c-0.211-0.315-0.445-0.611-0.671-0.913
                c-0.191-0.255-0.368-0.516-0.571-0.764c-0.439-0.535-0.903-1.05-1.392-1.54c-0.007-0.008-0.014-0.016-0.021-0.023l-64-64
                c-8.331-8.331-21.839-8.331-30.17,0c-8.331,8.331-8.331,21.839,0,30.17l27.582,27.582H170.836c-0.057,0-0.112-0.009-0.169-0.009
                c-70.778,0-128-57.222-128-128c0-31.068,12.408-60.299,34.121-82.031c8.328-8.335,8.322-21.842-0.013-30.17
                c-8.335-8.328-21.842-8.322-30.17,0.013C16.993,173.43,0,213.463,0,255.981c0,94.262,76.196,170.534,170.427,170.664
                c0.077,0.001,0.152,0.012,0.229,0.012h119.163l-27.582,27.582c-8.331,8.331-8.331,21.839,0,30.17
                c8.331,8.331,21.839,8.331,30.17,0l64-64c0.004-0.004,0.007-0.008,0.011-0.012c0.492-0.493,0.959-1.012,1.402-1.551
                C358.024,418.597,358.2,418.337,358.39,418.083z"/>
                </g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
        </svg>

    </div>

    <!-- footer-right -->
    <div class="flex items-center justify-between footer__right">
        <!-- footer-contain grid -->
        <div class="grid grid-cols-3 gap-2">
            <!-- playlistPlayIcon -->
            <div class="">
                <svg  class="w-4 h4 fill-current" viewBox="0 0 20 20">
                    <path d="M16 17a3 3 0 0 1-3 3h-2a3 3 0 0 1 0-6h2a3 3 0 0 1 1 .17V1l6-1v4l-4 .67V17zM0 3h12v2H0V3zm0 4h12v2H0V7zm0 4h12v2H0v-2zm0 4h6v2H0v-2z"/>
                </svg>
            </div>

            <!-- volume icon -->
            <div class="">
                <svg class="w-4 h4 fill-current" viewBox="0 0 20 20">
                    <path d="M7 7H3v6h4l5 5V2L7 7zm8.54 6.54l-1.42-1.42a3 3 0 0 0 0-4.24l1.42-1.42a4.98 4.98 0 0 1 0 7.08z"/>
                </svg>
            </div>

                    <!-- slider -->
            <div class="">
                <svg class="w-6 h6 text-green-600 fill-current" viewBox="0 0 100 100" >
                    <path d="M89.13 44.13H10.87a5.87 5.87 0 0 0 0 11.74h78.26a5.87 5.87 0 0 0 0-11.74z"/><circle cx="74" cy="50" r="20.717"/>
                </svg>
            </div>

        </div> 

    </div>




</div>