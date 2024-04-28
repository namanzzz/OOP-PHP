
<?php

// interface
// blueprint that we use in order to group together specific classes to tell them how they should behave
// classes use the interface blueprint

interface PaymentInterface
{
    // what kind of rules classes should follow 
    // to use this interface
    public function payNow(); // classes have to have payNow() method
}

interface LoginInterface
{
    public function loginFirst();
}



// now these classes follow the rules of our payment interface
class Paypal implements PaymentInterface, LoginInterface
{
    public function loginFirst()
    {
    }
    public function payNow()
    {
    }

    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}


class BankTransfer implements PaymentInterface, LoginInterface
{
    public function loginFirst()
    {
    }
    public function payNow()
    {
    }

    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}






class Visa implements PaymentInterface
{
    public function payNow()
    {
    }

    public function paymentProcess()
    {
        $this->payNow();
    }
}

class Cash implements PaymentInterface
{
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->payNow();
    }
}


class BuyProduct
{
    public function pay(PaymentInterface $paymentType)
    {
        $paymentType->paymentProcess();
    }
}

$paymentType = new Paypal();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
?>
