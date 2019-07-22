<?php

function createClient()
{

	$client = new Google_Client();
	$client->setApplicationName("Google Calendar PHP");
	$client->setDeveloperKey('AIzaSyCD9qgY7tnq2u7_Lj_3C91VDbBoQry3Zsk');

	//client id, client secret, and to register your redirect uri.
	$client->setClientId('105098734801-f0dc6vk5cka96e8fmqnnsv79gsigtp64.apps.googleusercontent.com');
	$client->setClientSecret('QEhf3paikRqnYHrleiTtxrkY');
	$client->setRedirectUri(
		"http://localhost:3000/oauth2callback"
	);


	return $client;
}
