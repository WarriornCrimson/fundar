<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CampaignCard extends Component
{
    /**
     * Create a new component instance.
     
     */
public $userName;
public $userYear;
public $userCourse;
public $userAvatar;
public $campaignImage;
public $campaignTitle;
public $campaignDescription;
public $raisedAmount;
public $goalAmount;
public $fundedPercentage;
public $campaignId;
public $badge;
public $headerMessage;
public $voteCount;
public $copyLinkNum;

public function __construct(
        $userName,
        $userYear,
        $userCourse,
        $campaignImage,
        $campaignTitle,
        $campaignDescription,
        $raisedAmount,
        $goalAmount,
        $fundedPercentage,
        $campaignId,
        $userAvatar = null,
        $badge = null,
        $headerMessage = null,
        $voteCount = 0,
        $copyLinkNum = 0
    ) {
        $this->userName = $userName;
        $this->userYear = $userYear;
        $this->userCourse = $userCourse;
        $this->userAvatar = $userAvatar;
        $this->campaignImage = $campaignImage;
        $this->campaignTitle = $campaignTitle;
        $this->campaignDescription = $campaignDescription;
        $this->raisedAmount = $raisedAmount;
        $this->goalAmount = $goalAmount;
        $this->fundedPercentage = $fundedPercentage;
        $this->campaignId = $campaignId;
        $this->badge = $badge;
        $this->headerMessage = $headerMessage;
        $this->voteCount = $voteCount;
        $this->copyLinkNum = $copyLinkNum;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.campaign-card');
    }
}
