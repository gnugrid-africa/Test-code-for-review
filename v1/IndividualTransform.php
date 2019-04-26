<?php

namespace App\Api\v1;

class IndividualTransform extends ApiTransform
{

    /**
     * @param Individual $individual
     * @return Arrays
     */
    public function one($individual)
    {
        return [
            'id'                         => $individual['id'],
            'sacco_id'                   => $individual['sacco_id'],
            'branch_id'                  => $individual['branch_id'],
            'title'                      => $individual['title'],
            'legacy_member_num'          => $individual['legacy_member_num'],         
            'first_name'                 => $individual['first_name'],         
            'middle_name'                => $individual['middle_name'],         
            'last_name'                  => $individual['last_name'],
            'search_term'                => $individual['search_term'],
            'phone_number'               => $individual['phone_number'],
            'is_subscribed_sms'          => $individual['is_subscribed_sms'],
            'email'                      => $individual['email'],
            'legacy_address'             => $individual['legacy_address'],
            'street_address'             => $individual['street_address'],
            'city'                       => $individual['city'],
            'district'                   => $individual['district'],
            'country'                    => $individual['country'],
            'postcode'                   => $individual['postcode'],
            'kin_full_name'              => $individual['kin_full_name'],
            'kin_phone_number'           => $individual['kin_phone_number'],
            'has_paid'                   => $individual['has_paid'],
            'dob'                        => $individual['dob'],
            'gender'                     => $individual['gender'],
            'photo_path'                 => $individual['photo_path'],
            'signature_path'             => $individual['signature_path'],
            'identification_path'        => $individual['identification_path'],
            'pin'                        => $individual['pin'],
            'mobile_money_num'           => $individual['mobile_money_num'],
            'is_subscribed_mobile_money' => $individual['is_subscribed_mobile_money']
        ];
    }
}