<?php
namespace craft\commerce\records;

use craft\db\ActiveRecord;
use yii\db\ActiveQueryInterface;

/**
 * Address record.
 *
 * @property int    $id
 * @property string $attention
 * @property string $title
 * @property string $firstName
 * @property string $lastName
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $zipCode
 * @property string $phone
 * @property string $alternativePhone
 * @property string $businessName
 * @property string $businessTaxId
 * @property string $businessId
 * @property string $stateName
 * @property int    $countryId
 * @property int    $stateId
 * @property int    $customerId
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2015, Pixel & Tonic, Inc.
 * @license   https://craftcommerce.com/license Craft Commerce License Agreement
 * @see       https://craftcommerce.com
 * @package   craft.plugins.commerce.records
 * @since     1.0
 */
class Address extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'commerce_addresses';
    }

    /**
     * Returns the address's state
     *
     * @return ActiveQueryInterface The relational query object.
     */
    public function getState(): ActiveQueryInterface
    {
        return $this->hasOne(State::class, ['id' => 'stateId']);
    }

    /**
     * Returns the address's country
     *
     * @return ActiveQueryInterface The relational query object.
     */
    public function getCountry(): ActiveQueryInterface
    {
        return $this->hasOne(Country::class, ['id' => 'stateId']);
    }

//    {
//        return [
//            'country' => [
//                static::BELONGS_TO,
//                'Country',
//                'onDelete' => self::SET_NULL,
//            ],
//            'state' => [
//                static::BELONGS_TO,
//                'State',
//                'onDelete' => self::SET_NULL
//            ]
//        ];
//    }
}