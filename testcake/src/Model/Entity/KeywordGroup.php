<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * KeywordGroup Entity
 *
 * @property int $kgid
 * @property int $kid
 * @property string $lang
 * @property string $wcid
 * @property int|null $sort
 * @property \Cake\I18n\FrozenTime $createdate
 * @property \Cake\I18n\FrozenTime $updatedate
 */
class KeywordGroup extends Entity
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
