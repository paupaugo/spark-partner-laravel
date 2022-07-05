<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\IDashboardRepository;

class DashboardController extends Controller
{
  private IDashboardRepository $dashboardRepository;

    public function __construct(IDashboardRepository $dashboardRepository) 
    {
        $this->dashboardRepository = $dashboardRepository;
    }
  // Dashboard - Analytics
  public function dashboardAnalytics()
  {
    
    $partner_id = Auth::user()->owner_id;
    $partnerQRCode = $this->dashboardRepository->getQRCode($partner_id);
    $partnerNews = $this->dashboardRepository->getContentNews();
    $pageConfigs = ['pageHeader' => false];

    return view('/content/dashboard/dashboard-analytics', ['pageConfigs' => $pageConfigs], compact('partnerQRCode', 'partnerNews'));
  }

  // Dashboard - Ecommerce
  public function dashboardEcommerce()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/content/dashboard/dashboard-ecommerce', ['pageConfigs' => $pageConfigs]);
  }
}
