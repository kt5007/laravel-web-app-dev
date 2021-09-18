<?php
declare(strict_types=1);
namespace App\Services;

use App\Events\PublishProcessor;
use Illuminate\Support\Facades\Event;
use App\Entry\Customer;

class Order
{
    const DISABLE_NOTIFICATION = 1;
    public function run(Customer $customer)
    {
        if($customer->getStatus() === self::DISABLE_NOTIFICATION){
            if(Event::hasListeners(PulishProcessor::class)){
                Event::forget(PublishProcessor::class);
            }
        }
        Event::dispatch(new PublishProcessor($customer->getId()));
    }

}