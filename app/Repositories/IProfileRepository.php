<?php

namespace App\Repositories;

interface IProfileRepository
{
    public function getAllProfile($limit, $start, $order, $dir, $draw, $search, $status);

    public function getProfileById($partner_id);

    public function createOrUpdateProfile($partner_id, $collection = []);

    public function deleteProfile($partner_id);
}
