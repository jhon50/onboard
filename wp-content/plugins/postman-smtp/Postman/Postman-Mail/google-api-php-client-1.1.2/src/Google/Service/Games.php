<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Games (v1).
 *
 * <p>
 * The API for Google Play Game Services.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/games/services/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Postman_Google_Service_Games extends Postman_Google_Service
{
  /** View and manage its own configuration data in your Google Drive. */
  const DRIVE_APPDATA =
      "https://www.googleapis.com/auth/drive.appdata";
  /** Share your Google+ profile information and view and manage your game activity. */
  const GAMES =
      "https://www.googleapis.com/auth/games";
  /** Know your basic profile info and list of people in your circles.. */
  const PLUS_LOGIN =
      "https://www.googleapis.com/auth/plus.login";

  public $achievementDefinitions;
  public $achievements;
  public $applications;
  public $events;
  public $leaderboards;
  public $metagame;
  public $players;
  public $pushtokens;
  public $questMilestones;
  public $quests;
  public $revisions;
  public $rooms;
  public $scores;
  public $snapshots;
  public $turnBasedMatches;
  

  /**
   * Constructs the internal representation of the Games service.
   *
   * @param Postman_Google_Client $client
   */
  public function __construct(Postman_Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'games/v1/';
    $this->version = 'v1';
    $this->serviceName = 'games';

    $this->achievementDefinitions = new Postman_Google_Service_Games_AchievementDefinitions_Resource(
        $this,
        $this->serviceName,
        'achievementDefinitions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'achievements',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->achievements = new Postman_Google_Service_Games_Achievements_Resource(
        $this,
        $this->serviceName,
        'achievements',
        array(
          'methods' => array(
            'increment' => array(
              'path' => 'achievements/{achievementId}/increment',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'stepsToIncrement' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/{playerId}/achievements',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'state' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'reveal' => array(
              'path' => 'achievements/{achievementId}/reveal',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'setStepsAtLeast' => array(
              'path' => 'achievements/{achievementId}/setStepsAtLeast',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'steps' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'unlock' => array(
              'path' => 'achievements/{achievementId}/unlock',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateMultiple' => array(
              'path' => 'achievements/updateMultiple',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->applications = new Postman_Google_Service_Games_Applications_Resource(
        $this,
        $this->serviceName,
        'applications',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'applications/{applicationId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'applicationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'platformType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'played' => array(
              'path' => 'applications/played',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->events = new Postman_Google_Service_Games_Events_Resource(
        $this,
        $this->serviceName,
        'events',
        array(
          'methods' => array(
            'listByPlayer' => array(
              'path' => 'events',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'listDefinitions' => array(
              'path' => 'eventDefinitions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'record' => array(
              'path' => 'events',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->leaderboards = new Postman_Google_Service_Games_Leaderboards_Resource(
        $this,
        $this->serviceName,
        'leaderboards',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'leaderboards/{leaderboardId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'leaderboards',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->metagame = new Postman_Google_Service_Games_Metagame_Resource(
        $this,
        $this->serviceName,
        'metagame',
        array(
          'methods' => array(
            'getMetagameConfig' => array(
              'path' => 'metagameConfig',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'listCategoriesByPlayer' => array(
              'path' => 'players/{playerId}/categories/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->players = new Postman_Google_Service_Games_Players_Resource(
        $this,
        $this->serviceName,
        'players',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'players/{playerId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/me/players/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->pushtokens = new Postman_Google_Service_Games_Pushtokens_Resource(
        $this,
        $this->serviceName,
        'pushtokens',
        array(
          'methods' => array(
            'remove' => array(
              'path' => 'pushtokens/remove',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'update' => array(
              'path' => 'pushtokens',
              'httpMethod' => 'PUT',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->questMilestones = new Postman_Google_Service_Games_QuestMilestones_Resource(
        $this,
        $this->serviceName,
        'questMilestones',
        array(
          'methods' => array(
            'claim' => array(
              'path' => 'quests/{questId}/milestones/{milestoneId}/claim',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'questId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'milestoneId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->quests = new Postman_Google_Service_Games_Quests_Resource(
        $this,
        $this->serviceName,
        'quests',
        array(
          'methods' => array(
            'accept' => array(
              'path' => 'quests/{questId}/accept',
              'httpMethod' => 'POST',
              'parameters' => array(
                'questId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/{playerId}/quests',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->revisions = new Postman_Google_Service_Games_Revisions_Resource(
        $this,
        $this->serviceName,
        'revisions',
        array(
          'methods' => array(
            'check' => array(
              'path' => 'revisions/check',
              'httpMethod' => 'GET',
              'parameters' => array(
                'clientRevision' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->rooms = new Postman_Google_Service_Games_Rooms_Resource(
        $this,
        $this->serviceName,
        'rooms',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'rooms/create',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'decline' => array(
              'path' => 'rooms/{roomId}/decline',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'dismiss' => array(
              'path' => 'rooms/{roomId}/dismiss',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'rooms/{roomId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'join' => array(
              'path' => 'rooms/{roomId}/join',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leave' => array(
              'path' => 'rooms/{roomId}/leave',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'rooms',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'reportStatus' => array(
              'path' => 'rooms/{roomId}/reportstatus',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->scores = new Postman_Google_Service_Games_Scores_Resource(
        $this,
        $this->serviceName,
        'scores',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'players/{playerId}/leaderboards/{leaderboardId}/scores/{timeSpan}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeRankType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'leaderboards/{leaderboardId}/scores/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'listWindow' => array(
              'path' => 'leaderboards/{leaderboardId}/window/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'returnTopIfAbsent' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'resultsAbove' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'submit' => array(
              'path' => 'leaderboards/{leaderboardId}/scores',
              'httpMethod' => 'POST',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'score' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'scoreTag' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'submitMultiple' => array(
              'path' => 'leaderboards/scores',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->snapshots = new Postman_Google_Service_Games_Snapshots_Resource(
        $this,
        $this->serviceName,
        'snapshots',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'snapshots/{snapshotId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'snapshotId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/{playerId}/snapshots',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->turnBasedMatches = new Postman_Google_Service_Games_TurnBasedMatches_Resource(
        $this,
        $this->serviceName,
        'turnBasedMatches',
        array(
          'methods' => array(
            'cancel' => array(
              'path' => 'turnbasedmatches/{matchId}/cancel',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'create' => array(
              'path' => 'turnbasedmatches/create',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'decline' => array(
              'path' => 'turnbasedmatches/{matchId}/decline',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'dismiss' => array(
              'path' => 'turnbasedmatches/{matchId}/dismiss',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'finish' => array(
              'path' => 'turnbasedmatches/{matchId}/finish',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'turnbasedmatches/{matchId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'join' => array(
              'path' => 'turnbasedmatches/{matchId}/join',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leave' => array(
              'path' => 'turnbasedmatches/{matchId}/leave',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leaveTurn' => array(
              'path' => 'turnbasedmatches/{matchId}/leaveTurn',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'matchVersion' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pendingParticipantId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'turnbasedmatches',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxCompletedMatches' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'rematch' => array(
              'path' => 'turnbasedmatches/{matchId}/rematch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'sync' => array(
              'path' => 'turnbasedmatches/sync',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxCompletedMatches' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'takeTurn' => array(
              'path' => 'turnbasedmatches/{matchId}/turn',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "achievementDefinitions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $achievementDefinitions = $gamesService->achievementDefinitions;
 *  </code>
 */
class Postman_Google_Service_Games_AchievementDefinitions_Resource extends Postman_Google_Service_Resource
{

  /**
   * Lists all the achievement definitions for your application.
   * (achievementDefinitions.listAchievementDefinitions)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int maxResults The maximum number of achievement resources to
   * return in the response, used for paging. For any response, the actual number
   * of achievement resources returned may be less than the specified maxResults.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_AchievementDefinitionsListResponse
   */
  public function listAchievementDefinitions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Postman_Google_Service_Games_AchievementDefinitionsListResponse");
  }
}

/**
 * The "achievements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $achievements = $gamesService->achievements;
 *  </code>
 */
class Postman_Google_Service_Games_Achievements_Resource extends Postman_Google_Service_Resource
{

  /**
   * Increments the steps of the achievement with the given ID for the currently
   * authenticated player. (achievements.increment)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param int $stepsToIncrement The number of steps to increment.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId A randomly generated numeric ID for each request
   * specified by the caller. This number is used at the server to ensure that the
   * request is handled correctly across retries.
   * @return Postman_Google_Service_Games_AchievementIncrementResponse
   */
  public function increment($achievementId, $stepsToIncrement, $optParams = array())
  {
    $params = array('achievementId' => $achievementId, 'stepsToIncrement' => $stepsToIncrement);
    $params = array_merge($params, $optParams);
    return $this->call('increment', array($params), "Postman_Google_Service_Games_AchievementIncrementResponse");
  }

  /**
   * Lists the progress for all your application's achievements for the currently
   * authenticated player. (achievements.listAchievements)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param string state Tells the server to return only achievements with the
   * specified state. If this parameter isn't specified, all achievements are
   * returned.
   * @opt_param int maxResults The maximum number of achievement resources to
   * return in the response, used for paging. For any response, the actual number
   * of achievement resources returned may be less than the specified maxResults.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_PlayerAchievementListResponse
   */
  public function listAchievements($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Postman_Google_Service_Games_PlayerAchievementListResponse");
  }

  /**
   * Sets the state of the achievement with the given ID to REVEALED for the
   * currently authenticated player. (achievements.reveal)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return Postman_Google_Service_Games_AchievementRevealResponse
   */
  public function reveal($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('reveal', array($params), "Postman_Google_Service_Games_AchievementRevealResponse");
  }

  /**
   * Sets the steps for the currently authenticated player towards unlocking an
   * achievement. If the steps parameter is less than the current number of steps
   * that the player already gained for the achievement, the achievement is not
   * modified. (achievements.setStepsAtLeast)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param int $steps The minimum value to set the steps to.
   * @param array $optParams Optional parameters.
   * @return Postman_Google_Service_Games_AchievementSetStepsAtLeastResponse
   */
  public function setStepsAtLeast($achievementId, $steps, $optParams = array())
  {
    $params = array('achievementId' => $achievementId, 'steps' => $steps);
    $params = array_merge($params, $optParams);
    return $this->call('setStepsAtLeast', array($params), "Postman_Google_Service_Games_AchievementSetStepsAtLeastResponse");
  }

  /**
   * Unlocks this achievement for the currently authenticated player.
   * (achievements.unlock)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return Postman_Google_Service_Games_AchievementUnlockResponse
   */
  public function unlock($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('unlock', array($params), "Postman_Google_Service_Games_AchievementUnlockResponse");
  }

  /**
   * Updates multiple achievements for the currently authenticated player.
   * (achievements.updateMultiple)
   *
   * @param Postman_Google_AchievementUpdateMultipleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Postman_Google_Service_Games_AchievementUpdateMultipleResponse
   */
  public function updateMultiple(Postman_Google_Service_Games_AchievementUpdateMultipleRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateMultiple', array($params), "Postman_Google_Service_Games_AchievementUpdateMultipleResponse");
  }
}

/**
 * The "applications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $applications = $gamesService->applications;
 *  </code>
 */
class Postman_Google_Service_Games_Applications_Resource extends Postman_Google_Service_Resource
{

  /**
   * Retrieves the metadata of the application with the given ID. If the requested
   * application is not available for the specified platformType, the returned
   * response will not include any instance data. (applications.get)
   *
   * @param string $applicationId The application ID from the Google Play
   * developer console.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string platformType Restrict application details returned to the
   * specific platform.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_Application
   */
  public function get($applicationId, $optParams = array())
  {
    $params = array('applicationId' => $applicationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Postman_Google_Service_Games_Application");
  }

  /**
   * Indicate that the the currently authenticated user is playing your
   * application. (applications.played)
   *
   * @param array $optParams Optional parameters.
   */
  public function played($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('played', array($params));
  }
}

/**
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $events = $gamesService->events;
 *  </code>
 */
class Postman_Google_Service_Games_Events_Resource extends Postman_Google_Service_Resource
{

  /**
   * Returns a list showing the current progress on events in this application for
   * the currently authenticated user. (events.listByPlayer)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int maxResults The maximum number of events to return in the
   * response, used for paging. For any response, the actual number of events to
   * return may be less than the specified maxResults.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_PlayerEventListResponse
   */
  public function listByPlayer($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listByPlayer', array($params), "Postman_Google_Service_Games_PlayerEventListResponse");
  }

  /**
   * Returns a list of the event definitions in this application.
   * (events.listDefinitions)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int maxResults The maximum number of event definitions to return
   * in the response, used for paging. For any response, the actual number of
   * event definitions to return may be less than the specified maxResults.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_EventDefinitionListResponse
   */
  public function listDefinitions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listDefinitions', array($params), "Postman_Google_Service_Games_EventDefinitionListResponse");
  }

  /**
   * Records a batch of changes to the number of times events have occurred for
   * the currently authenticated user of this application. (events.record)
   *
   * @param Postman_Google_EventRecordRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_EventUpdateResponse
   */
  public function record(Postman_Google_Service_Games_EventRecordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('record', array($params), "Postman_Google_Service_Games_EventUpdateResponse");
  }
}

/**
 * The "leaderboards" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $leaderboards = $gamesService->leaderboards;
 *  </code>
 */
class Postman_Google_Service_Games_Leaderboards_Resource extends Postman_Google_Service_Resource
{

  /**
   * Retrieves the metadata of the leaderboard with the given ID.
   * (leaderboards.get)
   *
   * @param string $leaderboardId The ID of the leaderboard.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_Leaderboard
   */
  public function get($leaderboardId, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Postman_Google_Service_Games_Leaderboard");
  }

  /**
   * Lists all the leaderboard metadata for your application.
   * (leaderboards.listLeaderboards)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int maxResults The maximum number of leaderboards to return in the
   * response. For any response, the actual number of leaderboards returned may be
   * less than the specified maxResults.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_LeaderboardListResponse
   */
  public function listLeaderboards($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Postman_Google_Service_Games_LeaderboardListResponse");
  }
}

/**
 * The "metagame" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $metagame = $gamesService->metagame;
 *  </code>
 */
class Postman_Google_Service_Games_Metagame_Resource extends Postman_Google_Service_Resource
{

  /**
   * Return the metagame configuration data for the calling application.
   * (metagame.getMetagameConfig)
   *
   * @param array $optParams Optional parameters.
   * @return Postman_Google_Service_Games_MetagameConfig
   */
  public function getMetagameConfig($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getMetagameConfig', array($params), "Postman_Google_Service_Games_MetagameConfig");
  }

  /**
   * List play data aggregated per category for the player corresponding to
   * playerId. (metagame.listCategoriesByPlayer)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param string $collection The collection of categories for which data will be
   * returned.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int maxResults The maximum number of category resources to return
   * in the response, used for paging. For any response, the actual number of
   * category resources returned may be less than the specified maxResults.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_CategoryListResponse
   */
  public function listCategoriesByPlayer($playerId, $collection, $optParams = array())
  {
    $params = array('playerId' => $playerId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('listCategoriesByPlayer', array($params), "Postman_Google_Service_Games_CategoryListResponse");
  }
}

/**
 * The "players" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $players = $gamesService->players;
 *  </code>
 */
class Postman_Google_Service_Games_Players_Resource extends Postman_Google_Service_Resource
{

  /**
   * Retrieves the Player resource with the given ID. To retrieve the player for
   * the currently authenticated user, set playerId to me. (players.get)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_Player
   */
  public function get($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Postman_Google_Service_Games_Player");
  }

  /**
   * Get the collection of players for the currently authenticated user.
   * (players.listPlayers)
   *
   * @param string $collection Collection of players being retrieved
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int maxResults The maximum number of player resources to return in
   * the response, used for paging. For any response, the actual number of player
   * resources returned may be less than the specified maxResults.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_PlayerListResponse
   */
  public function listPlayers($collection, $optParams = array())
  {
    $params = array('collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Postman_Google_Service_Games_PlayerListResponse");
  }
}

/**
 * The "pushtokens" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $pushtokens = $gamesService->pushtokens;
 *  </code>
 */
class Postman_Google_Service_Games_Pushtokens_Resource extends Postman_Google_Service_Resource
{

  /**
   * Removes a push token for the current user and application. Removing a non-
   * existent push token will report success. (pushtokens.remove)
   *
   * @param Postman_Google_PushTokenId $postBody
   * @param array $optParams Optional parameters.
   */
  public function remove(Postman_Google_Service_Games_PushTokenId $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('remove', array($params));
  }

  /**
   * Registers a push token for the current user and application.
   * (pushtokens.update)
   *
   * @param Postman_Google_PushToken $postBody
   * @param array $optParams Optional parameters.
   */
  public function update(Postman_Google_Service_Games_PushToken $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params));
  }
}

/**
 * The "questMilestones" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $questMilestones = $gamesService->questMilestones;
 *  </code>
 */
class Postman_Google_Service_Games_QuestMilestones_Resource extends Postman_Google_Service_Resource
{

  /**
   * Report that a reward for the milestone corresponding to milestoneId for the
   * quest corresponding to questId has been claimed by the currently authorized
   * user. (questMilestones.claim)
   *
   * @param string $questId The ID of the quest.
   * @param string $milestoneId The ID of the milestone.
   * @param string $requestId A numeric ID to ensure that the request is handled
   * correctly across retries. Your client application must generate this ID
   * randomly.
   * @param array $optParams Optional parameters.
   */
  public function claim($questId, $milestoneId, $requestId, $optParams = array())
  {
    $params = array('questId' => $questId, 'milestoneId' => $milestoneId, 'requestId' => $requestId);
    $params = array_merge($params, $optParams);
    return $this->call('claim', array($params));
  }
}

/**
 * The "quests" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $quests = $gamesService->quests;
 *  </code>
 */
class Postman_Google_Service_Games_Quests_Resource extends Postman_Google_Service_Resource
{

  /**
   * Indicates that the currently authorized user will participate in the quest.
   * (quests.accept)
   *
   * @param string $questId The ID of the quest.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_Quest
   */
  public function accept($questId, $optParams = array())
  {
    $params = array('questId' => $questId);
    $params = array_merge($params, $optParams);
    return $this->call('accept', array($params), "Postman_Google_Service_Games_Quest");
  }

  /**
   * Get a list of quests for your application and the currently authenticated
   * player. (quests.listQuests)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int maxResults The maximum number of quest resources to return in
   * the response, used for paging. For any response, the actual number of quest
   * resources returned may be less than the specified maxResults. Acceptable
   * values are 1 to 50, inclusive. (Default: 50).
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_QuestListResponse
   */
  public function listQuests($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Postman_Google_Service_Games_QuestListResponse");
  }
}

/**
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $revisions = $gamesService->revisions;
 *  </code>
 */
class Postman_Google_Service_Games_Revisions_Resource extends Postman_Google_Service_Resource
{

  /**
   * Checks whether the games client is out of date. (revisions.check)
   *
   * @param string $clientRevision The revision of the client SDK used by your
   * application. Format: [PLATFORM_TYPE]:[VERSION_NUMBER]. Possible values of
   * PLATFORM_TYPE are:   - "ANDROID" - Client is running the Android SDK.  -
   * "IOS" - Client is running the iOS SDK.  - "WEB_APP" - Client is running as a
   * Web App.
   * @param array $optParams Optional parameters.
   * @return Postman_Google_Service_Games_RevisionCheckResponse
   */
  public function check($clientRevision, $optParams = array())
  {
    $params = array('clientRevision' => $clientRevision);
    $params = array_merge($params, $optParams);
    return $this->call('check', array($params), "Postman_Google_Service_Games_RevisionCheckResponse");
  }
}

/**
 * The "rooms" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $rooms = $gamesService->rooms;
 *  </code>
 */
class Postman_Google_Service_Games_Rooms_Resource extends Postman_Google_Service_Resource
{

  /**
   * Create a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.create)
   *
   * @param Postman_Google_RoomCreateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_Room
   */
  public function create(Postman_Google_Service_Games_RoomCreateRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Postman_Google_Service_Games_Room");
  }

  /**
   * Decline an invitation to join a room. For internal use by the Games SDK only.
   * Calling this method directly is unsupported. (rooms.decline)
   *
   * @param string $roomId The ID of the room.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_Room
   */
  public function decline($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('decline', array($params), "Postman_Google_Service_Games_Room");
  }

  /**
   * Dismiss an invitation to join a room. For internal use by the Games SDK only.
   * Calling this method directly is unsupported. (rooms.dismiss)
   *
   * @param string $roomId The ID of the room.
   * @param array $optParams Optional parameters.
   */
  public function dismiss($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', array($params));
  }

  /**
   * Get the data for a room. (rooms.get)
   *
   * @param string $roomId The ID of the room.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_Room
   */
  public function get($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Postman_Google_Service_Games_Room");
  }

  /**
   * Join a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.join)
   *
   * @param string $roomId The ID of the room.
   * @param Postman_Google_RoomJoinRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_Room
   */
  public function join($roomId, Postman_Google_Service_Games_RoomJoinRequest $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('join', array($params), "Postman_Google_Service_Games_Room");
  }

  /**
   * Leave a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.leave)
   *
   * @param string $roomId The ID of the room.
   * @param Postman_Google_RoomLeaveRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_Room
   */
  public function leave($roomId, Postman_Google_Service_Games_RoomLeaveRequest $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('leave', array($params), "Postman_Google_Service_Games_Room");
  }

  /**
   * Returns invitations to join rooms. (rooms.listRooms)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int maxResults The maximum number of rooms to return in the
   * response, used for paging. For any response, the actual number of rooms to
   * return may be less than the specified maxResults.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_RoomList
   */
  public function listRooms($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Postman_Google_Service_Games_RoomList");
  }

  /**
   * Updates sent by a client reporting the status of peers in a room. For
   * internal use by the Games SDK only. Calling this method directly is
   * unsupported. (rooms.reportStatus)
   *
   * @param string $roomId The ID of the room.
   * @param Postman_Google_RoomP2PStatuses $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_RoomStatus
   */
  public function reportStatus($roomId, Postman_Google_Service_Games_RoomP2PStatuses $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reportStatus', array($params), "Postman_Google_Service_Games_RoomStatus");
  }
}

/**
 * The "scores" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $scores = $gamesService->scores;
 *  </code>
 */
class Postman_Google_Service_Games_Scores_Resource extends Postman_Google_Service_Resource
{

  /**
   * Get high scores, and optionally ranks, in leaderboards for the currently
   * authenticated player. For a specific time span, leaderboardId can be set to
   * ALL to retrieve data for all leaderboards in a given time span. NOTE: You
   * cannot ask for 'ALL' leaderboards and 'ALL' timeSpans in the same request;
   * only one parameter may be set to 'ALL'. (scores.get)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param string $leaderboardId The ID of the leaderboard. Can be set to 'ALL'
   * to retrieve data for all leaderboards for this application.
   * @param string $timeSpan The time span for the scores and ranks you're
   * requesting.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string includeRankType The types of ranks to return. If the
   * parameter is omitted, no ranks will be returned.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of leaderboard scores to return
   * in the response. For any response, the actual number of leaderboard scores
   * returned may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Postman_Google_Service_Games_PlayerLeaderboardScoreListResponse
   */
  public function get($playerId, $leaderboardId, $timeSpan, $optParams = array())
  {
    $params = array('playerId' => $playerId, 'leaderboardId' => $leaderboardId, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Postman_Google_Service_Games_PlayerLeaderboardScoreListResponse");
  }

  /**
   * Lists the scores in a leaderboard, starting from the top. (scores.listScores)
   *
   * @param string $leaderboardId The ID of the leaderboard.
   * @param string $collection The collection of scores you're requesting.
   * @param string $timeSpan The time span for the scores and ranks you're
   * requesting.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param int maxResults The maximum number of leaderboard scores to return
   * in the response. For any response, the actual number of leaderboard scores
   * returned may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Postman_Google_Service_Games_LeaderboardScores
   */
  public function listScores($leaderboardId, $collection, $timeSpan, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'collection' => $collection, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Postman_Google_Service_Games_LeaderboardScores");
  }

  /**
   * Lists the scores in a leaderboard around (and including) a player's score.
   * (scores.listWindow)
   *
   * @param string $leaderboardId The ID of the leaderboard.
   * @param string $collection The collection of scores you're requesting.
   * @param string $timeSpan The time span for the scores and ranks you're
   * requesting.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param bool returnTopIfAbsent True if the top scores should be returned
   * when the player is not in the leaderboard. Defaults to true.
   * @opt_param int resultsAbove The preferred number of scores to return above
   * the player's score. More scores may be returned if the player is at the
   * bottom of the leaderboard; fewer may be returned if the player is at the top.
   * Must be less than or equal to maxResults.
   * @opt_param int maxResults The maximum number of leaderboard scores to return
   * in the response. For any response, the actual number of leaderboard scores
   * returned may be less than the specified maxResults.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Postman_Google_Service_Games_LeaderboardScores
   */
  public function listWindow($leaderboardId, $collection, $timeSpan, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'collection' => $collection, 'timeSpan' => $timeSpan);
    $params = array_merge($params, $optParams);
    return $this->call('listWindow', array($params), "Postman_Google_Service_Games_LeaderboardScores");
  }

  /**
   * Submits a score to the specified leaderboard. (scores.submit)
   *
   * @param string $leaderboardId The ID of the leaderboard.
   * @param string $score The score you're submitting. The submitted score is
   * ignored if it is worse than a previously submitted score, where worse depends
   * on the leaderboard sort order. The meaning of the score value depends on the
   * leaderboard format type. For fixed-point, the score represents the raw value.
   * For time, the score represents elapsed time in milliseconds. For currency,
   * the score represents a value in micro units.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param string scoreTag Additional information about the score you're
   * submitting. Values must contain no more than 64 URI-safe characters as
   * defined by section 2.3 of RFC 3986.
   * @return Postman_Google_Service_Games_PlayerScoreResponse
   */
  public function submit($leaderboardId, $score, $optParams = array())
  {
    $params = array('leaderboardId' => $leaderboardId, 'score' => $score);
    $params = array_merge($params, $optParams);
    return $this->call('submit', array($params), "Postman_Google_Service_Games_PlayerScoreResponse");
  }

  /**
   * Submits multiple scores to leaderboards. (scores.submitMultiple)
   *
   * @param Postman_Google_PlayerScoreSubmissionList $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_PlayerScoreListResponse
   */
  public function submitMultiple(Postman_Google_Service_Games_PlayerScoreSubmissionList $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('submitMultiple', array($params), "Postman_Google_Service_Games_PlayerScoreListResponse");
  }
}

/**
 * The "snapshots" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $snapshots = $gamesService->snapshots;
 *  </code>
 */
class Postman_Google_Service_Games_Snapshots_Resource extends Postman_Google_Service_Resource
{

  /**
   * Retrieves the metadata for a given snapshot ID. (snapshots.get)
   *
   * @param string $snapshotId The ID of the snapshot.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_Snapshot
   */
  public function get($snapshotId, $optParams = array())
  {
    $params = array('snapshotId' => $snapshotId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Postman_Google_Service_Games_Snapshot");
  }

  /**
   * Retrieves a list of snapshots created by your application for the player
   * corresponding to the player ID. (snapshots.listSnapshots)
   *
   * @param string $playerId A player ID. A value of me may be used in place of
   * the authenticated player's ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int maxResults The maximum number of snapshot resources to return
   * in the response, used for paging. For any response, the actual number of
   * snapshot resources returned may be less than the specified maxResults.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_SnapshotListResponse
   */
  public function listSnapshots($playerId, $optParams = array())
  {
    $params = array('playerId' => $playerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Postman_Google_Service_Games_SnapshotListResponse");
  }
}

/**
 * The "turnBasedMatches" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesService = new Postman_Google_Service_Games(...);
 *   $turnBasedMatches = $gamesService->turnBasedMatches;
 *  </code>
 */
class Postman_Google_Service_Games_TurnBasedMatches_Resource extends Postman_Google_Service_Resource
{

  /**
   * Cancel a turn-based match. (turnBasedMatches.cancel)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   */
  public function cancel($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params));
  }

  /**
   * Create a turn-based match. (turnBasedMatches.create)
   *
   * @param Postman_Google_TurnBasedMatchCreateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_TurnBasedMatch
   */
  public function create(Postman_Google_Service_Games_TurnBasedMatchCreateRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Postman_Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Decline an invitation to play a turn-based match. (turnBasedMatches.decline)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_TurnBasedMatch
   */
  public function decline($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('decline', array($params), "Postman_Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Dismiss a turn-based match from the match list. The match will no longer show
   * up in the list and will not generate notifications.
   * (turnBasedMatches.dismiss)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   */
  public function dismiss($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', array($params));
  }

  /**
   * Finish a turn-based match. Each player should make this call once, after all
   * results are in. Only the player whose turn it is may make the first call to
   * Finish, and can pass in the final match state. (turnBasedMatches.finish)
   *
   * @param string $matchId The ID of the match.
   * @param Postman_Google_TurnBasedMatchResults $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_TurnBasedMatch
   */
  public function finish($matchId, Postman_Google_Service_Games_TurnBasedMatchResults $postBody, $optParams = array())
  {
    $params = array('matchId' => $matchId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('finish', array($params), "Postman_Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Get the data for a turn-based match. (turnBasedMatches.get)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param bool includeMatchData Get match data along with metadata.
   * @return Postman_Google_Service_Games_TurnBasedMatch
   */
  public function get($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Postman_Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Join a turn-based match. (turnBasedMatches.join)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_TurnBasedMatch
   */
  public function join($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('join', array($params), "Postman_Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Leave a turn-based match when it is not the current player's turn, without
   * canceling the match. (turnBasedMatches.leave)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_TurnBasedMatch
   */
  public function leave($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('leave', array($params), "Postman_Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Leave a turn-based match during the current player's turn, without canceling
   * the match. (turnBasedMatches.leaveTurn)
   *
   * @param string $matchId The ID of the match.
   * @param int $matchVersion The version of the match being updated.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param string pendingParticipantId The ID of another participant who
   * should take their turn next. If not set, the match will wait for other
   * player(s) to join via automatching; this is only valid if automatch criteria
   * is set on the match with remaining slots for automatched players.
   * @return Postman_Google_Service_Games_TurnBasedMatch
   */
  public function leaveTurn($matchId, $matchVersion, $optParams = array())
  {
    $params = array('matchId' => $matchId, 'matchVersion' => $matchVersion);
    $params = array_merge($params, $optParams);
    return $this->call('leaveTurn', array($params), "Postman_Google_Service_Games_TurnBasedMatch");
  }

  /**
   * Returns turn-based matches the player is or was involved in.
   * (turnBasedMatches.listTurnBasedMatches)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int maxCompletedMatches The maximum number of completed or
   * canceled matches to return in the response. If not set, all matches returned
   * could be completed or canceled.
   * @opt_param int maxResults The maximum number of matches to return in the
   * response, used for paging. For any response, the actual number of matches to
   * return may be less than the specified maxResults.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param bool includeMatchData True if match data should be returned in the
   * response. Note that not all data will necessarily be returned if
   * include_match_data is true; the server may decide to only return data for
   * some of the matches to limit download size for the client. The remainder of
   * the data for these matches will be retrievable on request.
   * @return Postman_Google_Service_Games_TurnBasedMatchList
   */
  public function listTurnBasedMatches($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Postman_Google_Service_Games_TurnBasedMatchList");
  }

  /**
   * Create a rematch of a match that was previously completed, with the same
   * participants. This can be called by only one player on a match still in their
   * list; the player must have called Finish first. Returns the newly created
   * match; it will be the caller's turn. (turnBasedMatches.rematch)
   *
   * @param string $matchId The ID of the match.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId A randomly generated numeric ID for each request
   * specified by the caller. This number is used at the server to ensure that the
   * request is handled correctly across retries.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_TurnBasedMatchRematch
   */
  public function rematch($matchId, $optParams = array())
  {
    $params = array('matchId' => $matchId);
    $params = array_merge($params, $optParams);
    return $this->call('rematch', array($params), "Postman_Google_Service_Games_TurnBasedMatchRematch");
  }

  /**
   * Returns turn-based matches the player is or was involved in that changed
   * since the last sync call, with the least recent changes coming first. Matches
   * that should be removed from the local cache will have a status of
   * MATCH_DELETED. (turnBasedMatches.sync)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param int maxCompletedMatches The maximum number of completed or
   * canceled matches to return in the response. If not set, all matches returned
   * could be completed or canceled.
   * @opt_param int maxResults The maximum number of matches to return in the
   * response, used for paging. For any response, the actual number of matches to
   * return may be less than the specified maxResults.
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @opt_param bool includeMatchData True if match data should be returned in the
   * response. Note that not all data will necessarily be returned if
   * include_match_data is true; the server may decide to only return data for
   * some of the matches to limit download size for the client. The remainder of
   * the data for these matches will be retrievable on request.
   * @return Postman_Google_Service_Games_TurnBasedMatchSync
   */
  public function sync($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('sync', array($params), "Postman_Google_Service_Games_TurnBasedMatchSync");
  }

  /**
   * Commit the results of a player turn. (turnBasedMatches.takeTurn)
   *
   * @param string $matchId The ID of the match.
   * @param Postman_Google_TurnBasedMatchTurn $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The preferred language to use for strings returned
   * by this method.
   * @return Postman_Google_Service_Games_TurnBasedMatch
   */
  public function takeTurn($matchId, Postman_Google_Service_Games_TurnBasedMatchTurn $postBody, $optParams = array())
  {
    $params = array('matchId' => $matchId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('takeTurn', array($params), "Postman_Google_Service_Games_TurnBasedMatch");
  }
}




class Postman_Google_Service_Games_AchievementDefinition extends Postman_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $achievementType;
  public $description;
  public $experiencePoints;
  public $formattedTotalSteps;
  public $id;
  public $initialState;
  public $isRevealedIconUrlDefault;
  public $isUnlockedIconUrlDefault;
  public $kind;
  public $name;
  public $revealedIconUrl;
  public $totalSteps;
  public $unlockedIconUrl;


  public function setAchievementType($achievementType)
  {
    $this->achievementType = $achievementType;
  }
  public function getAchievementType()
  {
    return $this->achievementType;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setExperiencePoints($experiencePoints)
  {
    $this->experiencePoints = $experiencePoints;
  }
  public function getExperiencePoints()
  {
    return $this->experiencePoints;
  }
  public function setFormattedTotalSteps($formattedTotalSteps)
  {
    $this->formattedTotalSteps = $formattedTotalSteps;
  }
  public function getFormattedTotalSteps()
  {
    return $this->formattedTotalSteps;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setInitialState($initialState)
  {
    $this->initialState = $initialState;
  }
  public function getInitialState()
  {
    return $this->initialState;
  }
  public function setIsRevealedIconUrlDefault($isRevealedIconUrlDefault)
  {
    $this->isRevealedIconUrlDefault = $isRevealedIconUrlDefault;
  }
  public function getIsRevealedIconUrlDefault()
  {
    return $this->isRevealedIconUrlDefault;
  }
  public function setIsUnlockedIconUrlDefault($isUnlockedIconUrlDefault)
  {
    $this->isUnlockedIconUrlDefault = $isUnlockedIconUrlDefault;
  }
  public function getIsUnlockedIconUrlDefault()
  {
    return $this->isUnlockedIconUrlDefault;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRevealedIconUrl($revealedIconUrl)
  {
    $this->revealedIconUrl = $revealedIconUrl;
  }
  public function getRevealedIconUrl()
  {
    return $this->revealedIconUrl;
  }
  public function setTotalSteps($totalSteps)
  {
    $this->totalSteps = $totalSteps;
  }
  public function getTotalSteps()
  {
    return $this->totalSteps;
  }
  public function setUnlockedIconUrl($unlockedIconUrl)
  {
    $this->unlockedIconUrl = $unlockedIconUrl;
  }
  public function getUnlockedIconUrl()
  {
    return $this->unlockedIconUrl;
  }
}

class Postman_Google_Service_Games_AchievementDefinitionsListResponse extends Postman_Google_Collection
{
  protected $collection_key = 'items';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Postman_Google_Service_Games_AchievementDefinition';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Postman_Google_Service_Games_AchievementIncrementResponse extends Postman_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $currentSteps;
  public $kind;
  public $newlyUnlocked;


  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }
  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }
  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }
}

class Postman_Google_Service_Games_AchievementRevealResponse extends Postman_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $currentState;
  public $kind;


  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }
  public function getCurrentState()
  {
    return $this->currentState;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}

class Postman_Google_Service_Games_AchievementSetStepsAtLeastResponse extends Postman_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $currentSteps;
  public $kind;
  public $newlyUnlocked;


  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }
  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }
  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }
}

class Postman_Google_Service_Games_AchievementUnlockResponse extends Postman_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $newlyUnlocked;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }
  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
  }
}

class Postman_Google_Service_Games_AchievementUpdateMultipleRequest extends Postman_Google_Collection
{
  protected $collection_key = 'updates';
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  protected $updatesType = 'Postman_Google_Service_Games_AchievementUpdateRequest';
  protected $updatesDataType = 'array';


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }
  public function getUpdates()
  {
    return $this->updates;
  }
}

class Postman_Google_Service_Games_AchievementUpdateMultipleResponse extends Postman_Google_Collection
{
  protected $collection_key = 'updatedAchievements';
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  protected $updatedAchievementsType = 'Postman_Google_Service_Games_AchievementUpdateResponse';
  protected $updatedAchievementsDataType = 'array';


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setUpdatedAchievements($updatedAchievements)
  {
    $this->updatedAchievements = $updatedAchievements;
  }
  public function getUpdatedAchievements()
  {
    return $this->updatedAchievements;
  }
}

class Postman_Google_Service_Games_AchievementUpdateRequest extends Postman_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $achievementId;
  protected $incrementPayloadType = 'Postman_Google_Service_Games_GamesAchievementIncrement';
  protected $incrementPayloadDataType = '';
  public $kind;
  protected $setStepsAtLeastPayloadType = 'Postman_Google_Service_Games_GamesAchievementSetStepsAtLeast';
  protected $setStepsAtLeastPayloadDataType = '';
  public $updateType;


  public function setAchievementId($achievementId)
  {
    $this->achievementId = $achievementId;
  }
  public function getAchievementId()
  {
    return $this->achievementId;
  }
  public function setIncrementPayload(Postman_Google_Service_Games_GamesAchievementIncrement $incrementPayload)
  {
    $this->incrementPayload = $incrementPayload;
  }
  public function getIncrementPayload()
  {
    return $this-