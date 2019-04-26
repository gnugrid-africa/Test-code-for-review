<?php

namespace App\Api\v1;

class CustomerTransform extends ApiTransform
{
    public function one($customer)
    {
        return [
            "id"                => $customer['id'],
            "sacco_id"          => $customer['sacco_id'],
            "customer_id"       => $customer['customer_id'],
            "customer_type"     => $customer['customer_type'],
            "registration_date" => $customer['registration_date'],
            "total_shares"      => $customer['total_shares'],
            "customer_name"     => $customer['customer_type']::find($customer['customer_id'])->displayTitle(),
            "phone_number"      => $customer['customer_type']::find($customer['customer_id'])->phone_number,
            "email"             => $customer['customer_type']::find($customer['customer_id'])->email,
        ];
    }
}
