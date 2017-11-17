<?php

class MerchantConfig
{
    private $sellerId;
    private $marketplaceId;
    private $mwsToken;
    private $serviceUrl;

    /**
     * MerchantConfig constructor.
     *
     * @param string $sellerId Your seller or merchant identifier.
     * @param string $marketplaceId The ID of the Amazon Marketplace you want to supply
     * @param string $mwsToken Represents the authorization of a specific developer by a specific Amazon seller.
     */
    public function __construct($sellerId, $marketplaceId, $mwsToken = null)
    {
        $this->sellerId = $sellerId;
        $this->marketplaceId = $marketplaceId;
        $this->mwsToken = $mwsToken;

        switch ($marketplaceId) {
            case MarketplaceSettings::MWS_MARKETPLACE_ID_IN:
                $this->serviceUrl = MarketplaceSettings::MWS_ENDPOINT_IN;
                break;
            case MarketplaceSettings::MWS_MARKETPLACE_ID_AU:
                $this->serviceUrl = MarketplaceSettings::MWS_ENDPOINT_AU;
                break;
            case MarketplaceSettings::MWS_MARKETPLACE_ID_JP:
                $this->serviceUrl = MarketplaceSettings::MWS_ENDPOINT_JP;
                break;
            case MarketplaceSettings::MWS_MARKETPLACE_ID_CN:
                $this->serviceUrl = MarketplaceSettings::MWS_ENDPOINT_CN;
                break;
            case MarketplaceSettings::MWS_MARKETPLACE_ID_CA:
            case MarketplaceSettings::MWS_MARKETPLACE_ID_MX:
            case MarketplaceSettings::MWS_MARKETPLACE_ID_US:
            case MarketplaceSettings::MWS_MARKETPLACE_ID_BR:
                $this->serviceUrl = MarketplaceSettings::MWS_ENDPOINT_NA;
                break;
            default:
                $this->serviceUrl = MarketplaceSettings::MWS_ENDPOINT_EU;
                break;
        }
    }

    /**
     * @return mixed
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * @return mixed
     */
    public function getMarketplaceId()
    {
        return $this->marketplaceId;
    }

    /**
     * @return mixed
     */
    public function getMwsToken()
    {
        return $this->mwsToken;
    }

    /**
     * @return string
     */
    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }
}