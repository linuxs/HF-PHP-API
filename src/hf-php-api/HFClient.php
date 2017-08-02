<?php

namespace HF;


/**
* HFClient provides the main functionality used to communicate with the HF API.
* Finding a user would return a User instance, etc.
*/
class HFClient {

  protected $apiKey;

  /**
  *
  * @param string $apiKey Token provided by https://hackforums.net/apikey.php
  */

  function __construct($apiKey){
    $this->apiKey = $apiKey;
    echo $this->apiKey;
  }

  public function makeRequest(){
    return 'example';
  }
}

class User {

  /**
  *
  * @var number $userid unquie id for user. E.g 871177
  * @var string $username Users displayed name. E.g Linux.
  * @var number $postnum Number for posts. E.g 6442
  * @var string $avatar Link to avatar
  * @var string $avatartype Determines if uploaded by user or provided by gallery.
  * @var number $usergroup User Group ID.
  * @var array $additionalgroups Additional User Group IDs user is included in.
  * @var string $usertitle The area of text located under users name.
  * @var number $timeonline Users time online in minute format.
  * @var number $regdate Registration date in a unix timestamp
  * @var number $lastactive Last known active time in a unix timestamp.
  * @var number $reputation Users reputation
  */
  private $userid;
  private $username;
  private $postnum;
  private $avatar;
  private $avatartype;
  private $usergroup;
  private $additionalgroups;
  private $usertitle;
  private $timeonline;
  private $regdate;
  private $lastactive;
  private $reputation;

  /**
  * @var HFClient $hfclient HFClient Instance
  */
  private $hfclient;

  /**
  *
  * @param string $userid This is the uid for a user. E.g 871177
  * @param HFClient $hfclient Instance of HFClient class.
  * @return object User instance is returned and all variables above can be accessed.
  */
  function __construct($userid, $hfclient){
    $this->userid = $userid;
    $this->hfclient = $hfclient;
    echo $this->userid;
    var_dump($hfclient->makeRequest());
  }
}

class Thread {

}

class Post {

}

?>
