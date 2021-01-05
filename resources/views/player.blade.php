<x-master> <!-- extending a components -->
    <div>
        <div class="flex">
            <x-sidebar :playlist=$playlists />

            <x-body :user=$users :playlist=$playlists :playlistTrack=$playlistTracks />
        </div>
        
        
        <x-footer :playlistTrack=$playlistTracks />


    </div>
</x-master>