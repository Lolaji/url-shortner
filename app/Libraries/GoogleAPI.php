<?php

namespace App\Libraries;

use Google\Client;
use Google\Service\Oauth2;
use Illuminate\Http\Request;

class GoogleAPI 
{
     private $Client;
     private $OAuth2;

     private $ClientId;
     private $ClientSecret;
     private $RedirectUri;

     public function __construct()
     {
          $this->ClientId = config('services.google.client_id');
          $this->ClientSecret = config('services.google.client_secret');
          $this->RedirectUri = config('services.google.redirect');

          $this->Client = new Client();
     }

     public function redirect()
     {
          $this->Client->setClientId($this->ClientId);
          $this->Client->setClientSecret($this->ClientSecret);
          $this->Client->setRedirectUri($this->RedirectUri);

          $this->Client->addScope('profile');
          $this->Client->addScope('email');
          // $this->Client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
     }

     public function oAuth2(Request $request)
     {
          $code = $request->get('code');

          if ($code) {
               $token = $this->Client->fetchAccessTokenWithAuthCode($code);
               return $token;
               $this->Client->setAccessToken($token);

               $gOauth = new Oauth2($this->Client);
               $this->OAuth2 = $gOauth;
               return $this;
          }
     }

     public function user()
     {
          return $this->OAuth2->userinfo->get();
     }
}