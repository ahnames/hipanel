<?php
/**
 * Client module for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-module-client
 * @package   hipanel-module-client
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2019, HiQDev (http://hiqdev.com/)
 */
namespace ahnames\hipanel\tests\acceptance\module\client\seller;

use Codeception\Example;
use hipanel\helpers\Url;
use hipanel\modules\client\tests\_support\Page\contact\Update;
use hipanel\modules\client\tests\acceptance\CommonContactActions;
use hipanel\tests\_support\Page\IndexPage;
use hipanel\tests\_support\Page\Widget\Input\Input;
use hipanel\tests\_support\Step\Acceptance\Seller;

class ContactsCest extends CommonContactActions
{
    /**
     * @dataProvider testContactData
     *
     * @param Seller $I
     * @param Example $data
     * @throws \Exception
     */
    public function ensureICanCreateContact(Seller $I, Example $data): void
    {
        parent::create($I, $data);
    }

    /**
     * @dataProvider testUpdateContactData
     * @throws \Codeception\Exception\ModuleException
     */
    public function ensureICanUpdateContact(Seller $I, Example $data): void
    {
        $indexPage = new IndexPage($I);
        $updatePage = new Update($I);

        foreach ($this->createdContacts as $id => $name) {
            $I->needPage(Url::to('@contact'));

            $indexPage->gridView->filterBy(Input::asTableFilter($I, 'Name'), $name);
            $indexPage->gridView->openRowMenuById($id);
            $indexPage->gridView->chooseRowMenuOption('Edit');

            $updatePage->fillFormData($data);
            $I->pressButton('Save');
            $I->wait(0.5);
            $updatePage->sendPincode($I, $data['pincode']);
            $I->closeNotification('Contact was updated');
        }
    }

    /**
     * @param Seller $I
     * @throws \Exception
     */
    public function ensureICantCreateIncorrectContact(Seller $I): void
    {
        parent::createIncorrect($I);
    }

    /**
     * @param Seller $I
     * @throws \Codeception\Exception\ModuleException
     */
    public function ensureICanDeleteContact(Seller $I): void
    {
        parent::delete($I);
    }

    /**
     * @inheritDoc
     */
    protected function testContactData(): array
    {
        $basicData = [
            'inputs' => [
                'first_name'    => null,
                'last_name'     => 'Manager',
                'email'         => 'hipanel_test_manager@hiqdev.com',
                'abuse_email'   => 'hipanel_test_manager+abuse@hiqdev.com',
                'organization'  => 'HiQDev',
                'street1'       => 'Test address',
                'city'          => 'Test',
                'province'      => 'Testing',
                'voice_phone'   => null,
                'icq'           => '1002893',
                'skype'         => 'hipanel_test_manager',
                'jabber'        => 'hipanel_test_manager@hiqdev.com',
                'telegram'      => 'hipanel_test_manager',
                'whatsapp'      => '123456789012',
                'social_net'    => 'https://facebook.com/hipanel_test_manager',
            ],
            'selects' => [
                'client'        => 'hipanel_test_manager',
            ],
            'phoneCountryCode'  => null,
        ];

        $varData = [
            [
                'voice_phone'       => '(965) 449-99-99',
                'phoneCountryCode'  => 'ru',
                'postal_code'   => '123445',
                'country'       => 'Russian Federation',
            ],
            [
                'voice_phone'       => '093 000-1122',
                'phoneCountryCode'  => 'ua',
                'postal_code'   => '12344',
                'country'       => 'Ukraine',
            ],
            [
                'voice_phone'       => '+3 8 093 000-1122',
                'phoneCountryCode'  => 'ua',
                'postal_code'   => '12345',
                'country'       => 'Ukraine',
            ],
        ];

        $data = [];

        foreach ($varData as $varItem) {
            $tmp = $basicData;
            $tmp['inputs']['first_name'] = 'Test' . uniqid();
            $tmp['inputs']['voice_phone'] = $varItem['voice_phone'];
            $tmp['inputs']['postal_code'] = $varItem['postal_code'];
            $tmp['selects']['country'] = $varItem['country'];
            $tmp['phoneCountryCode'] = $varItem['phoneCountryCode'];

            $data[] = $tmp;
        }

        return $data;
    }

    protected function testUpdateContactData()
    {
        return [
            [
                'inputs' => [
                    'last_name' => 'edited',
                ],
                'pincode' => 1234,
            ]
        ];
    }
}
