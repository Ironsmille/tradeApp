<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\WatchlistRepository")
 * @ORM\Table(name="v_watchlist")
 */
class Watchlist{
     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $ticker;

    /**
     * @ORM\Column(type="string", length=200)
     */
    protected $name_ticker;

    /**
     * @ORM\Column(type="string", length=8)
     */
    protected $currency;

    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $trade;


    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $last_price_cur;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $last_price_euro;

    /**
     * @ORM\Column(type="integer")
     */
    protected $purchase_contract;


    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $purchase_investment;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $purchase_amount;


    /**
    *@ORM\Column(type="decimal", scale=2)
    */
    protected $optimistic_price_cur;

    /**
    *@ORM\Column(type="decimal", scale=2)
    */
    protected $optimistic_profit;

    /**
    *@ORM\Column(type="decimal", scale=2)
    */
    protected $optimistic_profit_percent;

    /**
    *@ORM\Column(type="decimal", scale=2)
    */
    protected $realistic_price_cur;

    /**
    *@ORM\Column(type="decimal", scale=2)
    */
    protected $realistic_profit;

    /**
    *@ORM\Column(type="decimal", scale=2)
    */
    protected $realistic_profit_percent;


    /**
    *@ORM\Column(type="decimal", scale=2)
    */
    protected $stop_price_cur;

    /**
    *@ORM\Column(type="decimal", scale=2)
    */
    protected $stop_profit;

    /**
    *@ORM\Column(type="decimal", scale=2)
    */
    protected $stop_profit_percent;


    /**
    *@ORM\Column(type="string", length=5)
    */
    protected $ma21;

    /**
    *@ORM\Column(type="string", length=5)
    */
    protected $ma200;

    /**
    *@ORM\Column(type="string", length=5)
    */
    protected $trend;


    /**
    *@ORM\Column(type="string", length=5)
    */
    protected $macd;

    /**
    *@ORM\Column(type="string", length=5)
    */
    protected $rci;


    /**
    *@ORM\Column(type="string", length=15)
    */
    protected $recomandation;

    /**
    *@ORM\Column(type="datetime")
    */
    protected $created;

    /**
    *@ORM\Column(type="datetime")
    */
    protected $updated;

    /**
    *@ORM\Column(type="string", length=25)
    */
    protected $status;






    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ticker
     *
     * @param string $ticker
     * @return Watchlist
     */
    public function setTicker($ticker)
    {
        $this->ticker = $ticker;

        return $this;
    }

    /**
     * Get ticker
     *
     * @return string 
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     * Set name_ticker
     *
     * @param string $nameTicker
     * @return Watchlist
     */
    public function setNameTicker($nameTicker)
    {
        $this->name_ticker = $nameTicker;

        return $this;
    }

    /**
     * Get name_ticker
     *
     * @return string 
     */
    public function getNameTicker()
    {
        return $this->name_ticker;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return Watchlist
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set trade
     *
     * @param string $trade
     * @return Watchlist
     */
    public function setTrade($trade)
    {
        $this->trade = $trade;

        return $this;
    }

    /**
     * Get trade
     *
     * @return string 
     */
    public function getTrade()
    {
        return $this->trade;
    }

    /**
     * Set last_price_cur
     *
     * @param string $lastPriceCur
     * @return Watchlist
     */
    public function setLastPriceCur($lastPriceCur)
    {
        $this->last_price_cur = $lastPriceCur;

        return $this;
    }

    /**
     * Get last_price_cur
     *
     * @return string 
     */
    public function getLastPriceCur()
    {
        return $this->last_price_cur;
    }

    /**
     * Set last_price_euro
     *
     * @param string $lastPriceEuro
     * @return Watchlist
     */
    public function setLastPriceEuro($lastPriceEuro)
    {
        $this->last_price_euro = $lastPriceEuro;

        return $this;
    }

    /**
     * Get last_price_euro
     *
     * @return string 
     */
    public function getLastPriceEuro()
    {
        return $this->last_price_euro;
    }

    /**
     * Set purchase_contract
     *
     * @param integer $purchaseContract
     * @return Watchlist
     */
    public function setPurchaseContract($purchaseContract)
    {
        $this->purchase_contract = $purchaseContract;

        return $this;
    }

    /**
     * Get purchase_contract
     *
     * @return integer 
     */
    public function getPurchaseContract()
    {
        return $this->purchase_contract;
    }

    /**
     * Set purchase_investment
     *
     * @param string $purchaseInvestment
     * @return Watchlist
     */
    public function setPurchaseInvestment($purchaseInvestment)
    {
        $this->purchase_investment = $purchaseInvestment;

        return $this;
    }

    /**
     * Get purchase_investment
     *
     * @return string 
     */
    public function getPurchaseInvestment()
    {
        return $this->purchase_investment;
    }

    /**
     * Set purchase_amount
     *
     * @param string $purchaseAmount
     * @return Watchlist
     */
    public function setPurchaseAmount($purchaseAmount)
    {
        $this->purchase_amount = $purchaseAmount;

        return $this;
    }

    /**
     * Get purchase_amount
     *
     * @return string 
     */
    public function getPurchaseAmount()
    {
        return $this->purchase_amount;
    }

    /**
     * Set optimistic_price_cur
     *
     * @param string $optimisticPriceCur
     * @return Watchlist
     */
    public function setOptimisticPriceCur($optimisticPriceCur)
    {
        $this->optimistic_price_cur = $optimisticPriceCur;

        return $this;
    }

    /**
     * Get optimistic_price_cur
     *
     * @return string 
     */
    public function getOptimisticPriceCur()
    {
        return $this->optimistic_price_cur;
    }

    /**
     * Set optimistic_profit
     *
     * @param string $optimisticProfit
     * @return Watchlist
     */
    public function setOptimisticProfit($optimisticProfit)
    {
        $this->optimistic_profit = $optimisticProfit;

        return $this;
    }

    /**
     * Get optimistic_profit
     *
     * @return string 
     */
    public function getOptimisticProfit()
    {
        return $this->optimistic_profit;
    }

    /**
     * Set optimistic_profit_percent
     *
     * @param string $optimisticProfitPercent
     * @return Watchlist
     */
    public function setOptimisticProfitPercent($optimisticProfitPercent)
    {
        $this->optimistic_profit_percent = $optimisticProfitPercent;

        return $this;
    }

    /**
     * Get optimistic_profit_percent
     *
     * @return string 
     */
    public function getOptimisticProfitPercent()
    {
        return $this->optimistic_profit_percent;
    }

    /**
     * Set realistic_price_cur
     *
     * @param string $realisticPriceCur
     * @return Watchlist
     */
    public function setRealisticPriceCur($realisticPriceCur)
    {
        $this->realistic_price_cur = $realisticPriceCur;

        return $this;
    }

    /**
     * Get realistic_price_cur
     *
     * @return string 
     */
    public function getRealisticPriceCur()
    {
        return $this->realistic_price_cur;
    }

    /**
     * Set realistic_profit
     *
     * @param string $realisticProfit
     * @return Watchlist
     */
    public function setRealisticProfit($realisticProfit)
    {
        $this->realistic_profit = $realisticProfit;

        return $this;
    }

    /**
     * Get realistic_profit
     *
     * @return string 
     */
    public function getRealisticProfit()
    {
        return $this->realistic_profit;
    }

    /**
     * Set realistic_profit_percent
     *
     * @param string $realisticProfitPercent
     * @return Watchlist
     */
    public function setRealisticProfitPercent($realisticProfitPercent)
    {
        $this->realistic_profit_percent = $realisticProfitPercent;

        return $this;
    }

    /**
     * Get realistic_profit_percent
     *
     * @return string 
     */
    public function getRealisticProfitPercent()
    {
        return $this->realistic_profit_percent;
    }

    /**
     * Set stop_price_cur
     *
     * @param string $stopPriceCur
     * @return Watchlist
     */
    public function setStopPriceCur($stopPriceCur)
    {
        $this->stop_price_cur = $stopPriceCur;

        return $this;
    }

    /**
     * Get stop_price_cur
     *
     * @return string 
     */
    public function getStopPriceCur()
    {
        return $this->stop_price_cur;
    }

    /**
     * Set stop_profit
     *
     * @param string $stopProfit
     * @return Watchlist
     */
    public function setStopProfit($stopProfit)
    {
        $this->stop_profit = $stopProfit;

        return $this;
    }

    /**
     * Get stop_profit
     *
     * @return string 
     */
    public function getStopProfit()
    {
        return $this->stop_profit;
    }

    /**
     * Set stop_profit_percent
     *
     * @param string $stopProfitPercent
     * @return Watchlist
     */
    public function setStopProfitPercent($stopProfitPercent)
    {
        $this->stop_profit_percent = $stopProfitPercent;

        return $this;
    }

    /**
     * Get stop_profit_percent
     *
     * @return string 
     */
    public function getStopProfitPercent()
    {
        return $this->stop_profit_percent;
    }

    /**
     * Set ma21
     *
     * @param string $ma21
     * @return Watchlist
     */
    public function setMa21($ma21)
    {
        $this->ma21 = $ma21;

        return $this;
    }

    /**
     * Get ma21
     *
     * @return string 
     */
    public function getMa21()
    {
        return $this->ma21;
    }

    /**
     * Set ma200
     *
     * @param string $ma200
     * @return Watchlist
     */
    public function setMa200($ma200)
    {
        $this->ma200 = $ma200;

        return $this;
    }

    /**
     * Get ma200
     *
     * @return string 
     */
    public function getMa200()
    {
        return $this->ma200;
    }

    /**
     * Set trend
     *
     * @param string $trend
     * @return Watchlist
     */
    public function setTrend($trend)
    {
        $this->trend = $trend;

        return $this;
    }

    /**
     * Get trend
     *
     * @return string 
     */
    public function getTrend()
    {
        return $this->trend;
    }

    /**
     * Set macd
     *
     * @param string $macd
     * @return Watchlist
     */
    public function setMacd($macd)
    {
        $this->macd = $macd;

        return $this;
    }

    /**
     * Get macd
     *
     * @return string 
     */
    public function getMacd()
    {
        return $this->macd;
    }

    /**
     * Set rci
     *
     * @param string $rci
     * @return Watchlist
     */
    public function setRci($rci)
    {
        $this->rci = $rci;

        return $this;
    }

    /**
     * Get rci
     *
     * @return string 
     */
    public function getRci()
    {
        return $this->rci;
    }

    /**
     * Set recomandation
     *
     * @param string $recomandation
     * @return Watchlist
     */
    public function setRecomandation($recomandation)
    {
        $this->recomandation = $recomandation;

        return $this;
    }

    /**
     * Get recomandation
     *
     * @return string 
     */
    public function getRecomandation()
    {
        return $this->recomandation;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Watchlist
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Watchlist
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Watchlist
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
