<?php

namespace App\Api\v1;

class SaccoTransform extends ApiTransform
{
    public function one($sacco)
    {
        return
        [
            "id"                        => $sacco['id'],
            "name"                      => $sacco['name'],
            "contact_person"            => $sacco['contact_person'],
            "contact_person_position"   => $sacco['contact_person_position'],
            "district"                  => $sacco['district'],
            "email"                     => $sacco['email'],
            "incorporated_at"           => $sacco['incorporated_at'],
            "slug"                      => $sacco['slug'],
            "telephone_number"          => $sacco['telephone_number'],
            "village"                   => $sacco['village'],
            "logo_url"                  => $sacco['logo_url'],
            "configured"                => $sacco['configured'],
            "created_at"                => $sacco['created_at'],
            "updated_at"                => $sacco['updated_at']
        ];
    }
}
