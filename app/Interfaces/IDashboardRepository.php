<?php

namespace App\Interfaces;

interface IDashboardRepository
{
    public function getQRCode($partner_id);
    public function getContentNews();
}

