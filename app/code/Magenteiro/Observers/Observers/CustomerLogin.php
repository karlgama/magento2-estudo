<?php
namespace Magenteiro\Observers\Observers;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class CustomerLogin implements ObserverInterface
{
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(EventObserver $observer)
    {
        $this->Logger->info('Observer aqui!', $observer->debug());
    }
}