<?php
/**
 * Created by PhpStorm.
 * User: buphmin
 * Date: 3/17/19
 * Time: 2:14 PM
 */

namespace App\Http\Controllers;

use App\Service\LeaguePlayer;
use Laravel\Lumen\Routing\Controller as BaseController;


class LeaguePlayerController extends BaseController
{
    public function getLeaguePlayer(LeaguePlayer $leaguePlayer, $id)
    {
        return $leaguePlayer->getLeaguePlayerById($id);
    }
}