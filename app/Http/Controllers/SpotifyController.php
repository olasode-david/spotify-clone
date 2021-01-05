<?php

namespace App\Http\Controllers;
use SpotifyWebAPI;
use SpotifyWebAPI\Session;
use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    
   //and this function get the token key and display the user
    public function index(Request $request)
    {
        
        $session = new Session(
            env('SPOTIFY_CLIENT_ID'),
            env('SPOTIFY_CLIENT_SECRET'),
            env('SPOTIFY_CALLBACK_URL')
        );   
        
        $options = [
            "auto_refresh" => true,
        ];
        
        $api = new SpotifyWebApi\SpotifyWebApi($options, $session);
        
        if (isset($_GET['code'])) { //this get the code immidately when a user agrees
           
            $session->requestAccessToken($_GET['code']);

            $access_token = $session->getAccessToken();

            $newclear = $session->getRefreshToken();
            
            $request->session()->put('_top', $newclear);
            
            $session->setAccessToken($access_token);
           
            // You can also call setSession on an existing SpotifyWebAPI instance
            $api->setSession($session);
            
            $user = $api->me();
            //getting user playlist
            $playlist = $api->getUserPlaylists($user->id, [
                    'limit' => 10
            ]);

            //getting the frist user playlist ID
            $playlistIdss = $playlist->items[0]->id;

            //getting a playlist track
            $playlistTrack = $api->getPlaylistTracks($playlistIdss);

            return view('player',[
                'users' => $user,
                'playlists' => $playlist,
                'playlistTracks' => $playlistTrack,
            ]);
        } else {
           
            $get_refresh =  @$request->session()->get('_top');
          
            if ($get_refresh) { // this if statement will get the refresh token without reloading the page 

                $session->refreshAccessToken($get_refresh);

                $__accessTokens = $session->getAccessToken();
            
                $session->setAccessToken($__accessTokens);

                $scopes = $session->getScope();
               
                // You can also call setSession on an existing SpotifyWebAPI instance
                $api->setSession($session);
               
                //Call the API as usual
                $user = $api->me();
               
                //getting user playlist
                $playlist = $api->getUserPlaylists($user->id, [
                    'limit' => 5
                ]);
               

                //getting the frist user playlist ID
                $playlistIdss = $playlist->items[0]->id;

                //getting a playlist track
                $playlistTrack = $api->getPlaylistTracks($playlistIdss);
               

                return view('player',[
                    'users' => $user,
                    'playlists' => $playlist,
                    'playlistTracks' => $playlistTrack,
                ]);

            }else{

                return view('welcome');
            }
        }        
        
    }

    // this function is to authorize the user
    public function getAuthorize()
    {
        $client = new SpotifyWebApi\SpotifyWebApi;

             $session = new Session(
                 env('SPOTIFY_CLIENT_ID'),
                 env('SPOTIFY_CLIENT_SECRET'),
                 env('SPOTIFY_CALLBACK_URL')
             );

        $options = [
            'scope' => [
                "user-read-currently-playing",
                "user-read-playback-state",
                "user-modify-playback-state",
                "user-top-read",
                "playlist-modify-public",
                "playlist-modify-private",
            ],
        ];     

        header('Location: ' . $session->getAuthorizeUrl($options));
        die();
    }
}