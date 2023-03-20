<?php

namespace ahnames\hipanel\tests\acceptance\module\server\seller;

use Codeception\Example;
use Codeception\Scenario;
use hipanel\helpers\Url;
use hipanel\tests\_support\Page\IndexPage;
use hipanel\tests\_support\Step\Acceptance\Seller;

class ServerIndexCest
{
    private IndexPage $index;

    public function _before(Seller $I)
    {
        $this->index = new IndexPage($I);
    }

    /**
     * @dataProvider bulkServerSearchProvider
     */
    public function ensureIndexPageWorks(Seller $I, Example $serverIndexColumns, Scenario $scenario): void
    {
        $I->login();
        $I->needPage(Url::to('@server'));
        $this->ensureICanSeeBulkServerSearchBox($serverIndexColumns);
    }

    private function ensureICanSeeBulkServerSearchBox(Example $serverIndexColumns): void
    {
        $this->index->containsBulkButtons([
            'Basic actions',
        ]);

        $this->index->containsColumns($serverIndexColumns['columns'], $serverIndexColumns['view']);
    }

    protected function bulkServerSearchProvider(): array
    {
        return [
            [
                'view' => 'common',
                'columns' => [
                    'Name',
                    'Client',
                    'Reseller',
                    'IPs',
                    'Tariff',
                    'Hardware Summary',
                ]
            ],
            [
                'view' => 'short',
                'columns' => [
                    'IPs',
                    'Client',
                    'DC',
                    'Name',
                    'Hardware Summary',
                ]
            ],
            [
                'view' => 'admin',
                'columns' => [
                    'DC',
                    'Name',
                    'Type',
                    'IP',
                    'MAC',
                    'Hardware Summary',
                ]
            ],
        ];
    }
}
