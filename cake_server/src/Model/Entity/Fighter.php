<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Security;

/**
 * Fighter Entity
 *
 * @property int $id
 * @property string $name
 * @property string $player_id
 * @property int $coordinate_x
 * @property int $coordinate_y
 * @property int $level
 * @property int $xp
 * @property int $skill_sight
 * @property int $skill_strength
 * @property int $skill_health
 * @property int $current_health
 * @property \Cake\I18n\Time $next_action_time
 * @property int $guild_id
 *
 * @property \App\Model\Entity\Player $player
 * @property \App\Model\Entity\Guild $guild
 * @property \App\Model\Entity\Message[] $messages
 * @property \App\Model\Entity\Tool[] $tools
 */
class Fighter extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    public function setName($name){
      $this->__set('name',$name);
    }

    public function setGuild($guild_id){
      $this->__set('guild_id',$guild_id);
    }

    public function initParametersToNull(){
      $this->coordinate_x = -21;
      $this->coordinate_y = -21;
      $this->level = 1;
      $this->xp = 0;
      $this->skill_sight = 0;
      $this->skill_health = 3;
      $this->skill_strength = 1;
      $this->current_health = 3;
    }
}
