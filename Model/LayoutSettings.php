<?php

namespace IMI\FriendlyCaptcha\Model;


class LayoutSettings
{
    /**
     * @var Config
     */
    private $config;

    /**
     * LayoutSettings constructor.
     *
     * @param Config $config
     */
    public function __construct(
        Config $config
    ) {
        $this->config = $config;
    }

    /**
     * Return captcha config for frontend
     *
     * @return array
     */
    public function getCaptchaSettings(): array
    {
        return [
            'siteKey' => $this->config->getSiteKey(),
            'enabled' => [
                'login' => $this->config->isEnabledFrontendLogin(),
                'create' => $this->config->isEnabledFrontendCreate(),
                'forgot' => $this->config->isEnabledFrontendForgot(),
                'contact' => $this->config->isEnabledFrontendContact(),
                'review' => $this->config->isEnabledFrontendReview(),
                'newsletter' => $this->config->isEnabledFrontendNewsletter(),
                'sendfriend' => $this->config->isEnabledFrontendSendFriend(),
            ]
        ];
    }
}
