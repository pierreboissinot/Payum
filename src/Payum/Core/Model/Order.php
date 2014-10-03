<?php
namespace Payum\Core\Model;

class Order implements OrderInterface
{
    /**
     * @var string
     */
    protected $number;

    /**
     * @var MoneyInterface
     */
    protected $totalPrice;

    /**
     * @var array
     */
    protected $details;

    public function __construct()
    {
        $this->number = '';
        $this->totalPrice = new Money(0);
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return MoneyInterface
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param MoneyInterface $price
     */
    public function setTotalPrice(MoneyInterface $price)
    {
        $this->totalPrice = $price;
    }

    /**
     * @return array
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param array|\Traversable $details
     */
    public function setDetails($details)
    {
        if ($details instanceof \Traversable) {
            $details = iterator_to_array($details);
        }

        $this->details = $details;
    }
}