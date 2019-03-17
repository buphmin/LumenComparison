<?php
/**
 * Created by PhpStorm.
 * User: buphmin
 * Date: 3/17/19
 * Time: 2:09 PM
 */

namespace App\Service;


use Illuminate\Database\Connection;
use Illuminate\Database\DatabaseManager;

class LeaguePlayer
{
    /**
     * @var Connection
     */
    protected $db;

    public function __construct(DatabaseManager $connection)
    {
        $this->db = $connection;
    }


    public function getLeaguePlayerById($id)
    {
        $sql = "
            select * from 
            league_player lp
            join league l on lp.league_id = l.id
            join player p on lp.player_id = p.id
            where lp.id = :id
        ";

        return $this->db->select($sql, ['id' => $id]);
    }
}