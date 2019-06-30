<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GroupLink Entity
 *
 * @property int $kgid
 * @property int $kgid2
 * @property int|null $sort
 * @property \Cake\I18n\FrozenTime $createdate
 * @property \Cake\I18n\FrozenTime $updatedate
 */
class GroupLink extends Entity
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
        'sort' => true,
        'createdate' => true,
        'updatedate' => true
    ];
}
