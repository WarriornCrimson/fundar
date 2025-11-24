<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CampaignCardSm extends Component
{
    /**
     * Create a new component instance.
     */
        public $userName;
        public $userYear;
        public $userCourse;
        public $userAvatar;
        public $category;
        public $campaignId;
        public $campaignImage;
        public $raisedAmount;
        public $goalAmount;
        public $progressPercentage;
        public $campaignTitle;
        public $campaignDescription;
        // public $campaignUrl;

    public function __construct(
        $userName,
        $userYear,
        $userCourse,
        $userAvatar = null,
        $category,
        $campaignId,
        $campaignImage,
        $raisedAmount,
        $goalAmount,
        $campaignTitle,
        $campaignDescription,
        // $campaignUrl
    ) {
        $this->userName = $userName;
        $this->userYear = $userYear;
        $this->userCourse = $userCourse;
        $this->userAvatar = $userAvatar;
        $this->category = $category;
        $this->campaignId = $campaignId;
        $this->campaignImage = $campaignImage;
        $this->raisedAmount = $raisedAmount;
        $this->goalAmount = $goalAmount;
        $this->campaignTitle = $campaignTitle;
        $this->campaignDescription = $campaignDescription;
        // $this->campaignUrl = $campaignUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.campaign-card-sm');
    }
}
