<?php
abstract class Taxi
{
    abstract public function getTaxiClass(): Type;


    public function call($order): void
    {
        $call=$this->getTaxiClass();
        $call->order($order);
    }
}

class EconomTaxi extends Taxi
{
    private string $model, $price;
    public function __construct(string $model, string $price)
    {
        $this->model=$model;
        $this->price=$price;
    }
    public function getTaxiClass(): Type
    {
        return new EconomType($this->model, $this->price);
    }
}
interface Type
{
    public function order(): void;
}

class EconomType implements Type
{
    private $model, $price;
    public function __construct(string $model, $price)
    {
        $this->model=$model;
        $this->price=$price;
    }
    public function order(): void
    {
        echo "Expect car $this->model, trip amount $this->price";
    }
}
class StandartTaxi extends Taxi
{
    private string $model, $price;
    public function __construct(string $model, string $price)
    {
        $this->model=$model;
        $this->price=$price;
    }
    public function getTaxiClass(): Type
    {
        return new StandartType($this->model, $this->price);
    }
}
class StandartType implements Type
{
    private $model, $price;
    public function __construct(string $model, $price)
    {
        $this->model=$model;
        $this->price=$price;
    }
    public function order(): void
    {
        echo "Expect car $this->model, trip amount $this->price";
    }
}
class PremiumTaxi extends Taxi
{
    private string $model, $price;
    public function __construct(string $model, string $price)
    {
        $this->model=$model;
        $this->price=$price;
    }
    public function getTaxiClass(): Type
    {
        return new PremiumType($this->model, $this->price);
    }
}
class PremiumType implements Type
{
    private $model, $price;
    public function __construct(string $model, $price)
    {
        $this->model=$model;
        $this->price=$price;
    }
    public function order(): void
    {
        echo "Expect car $this->model, trip amount $this->price";
    }
}
function clientCode(Taxi $creator)
{
    $creator->call(1);
}

echo "Message:\n";
clientCode(new EconomTaxi('Lanos', 250));
echo "\n\n";
echo "Message:\n";
clientCode(new StandartTaxi('Hyundai', 500));
echo "\n\n";
echo "Message:\n";
clientCode(new PremiumTaxi('Porsche', 1000));
echo "\n\n";