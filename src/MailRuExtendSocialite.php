<?php

namespace JhaoDa\SocialiteProviders\MailRu;

use SocialiteProviders\Manager\SocialiteWasCalled;

class MailRuExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'mailru', Provider::class
        );
    }
}
