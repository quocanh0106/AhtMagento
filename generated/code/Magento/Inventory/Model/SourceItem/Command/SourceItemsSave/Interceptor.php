<?php
namespace Magento\Inventory\Model\SourceItem\Command\SourceItemsSave;

/**
 * Interceptor class for @see \Magento\Inventory\Model\SourceItem\Command\SourceItemsSave
 */
class Interceptor extends \Magento\Inventory\Model\SourceItem\Command\SourceItemsSave implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Inventory\Model\SourceItem\Command\Handler\SourceItemsSaveHandler $sourceItemsSaveHandler)
    {
        $this->___init();
        parent::__construct($sourceItemsSaveHandler);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $sourceItems) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            parent::execute($sourceItems);
        } else {
            $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }
}
