ahnames/hipanel
---------------

## [0.1.0] - 2017-02-02

- Fixed requirements
    - [9895c3e] 2017-02-02 removed explicit require for yii2 [@hiqsol]
    - [eb8cd37] 2017-02-02 csfixed [@hiqsol]
    - [18b1f71] 2017-02-02 removed yii2-asset-ahnames from requires to allow this package be common for all ahnames resellers [@hiqsol]
    - [d8c4e4e] 2016-12-27 reordered requires to fix menu :-/ [@hiqsol]
    - [ec5a399] 2016-12-27 csfixed [@hiqsol]
    - [4c1d6d0] 2016-12-27 removed OldPanelMenu to hipanel-mrdp [@hiqsol]
    - [9051d42] 2016-12-23 moved old panel link to sidebar [@hiqsol]
    - [f18a9f0] 2016-12-22 fixed dependencies [@hiqsol]
    - [3c7547b] 2016-12-22 redone yii2-menumanager to yii2-menus [@hiqsol]
    - [43f87c3] 2016-12-16 + old panel menu [@hiqsol]
    - [c39f5a7] 2016-11-15 removed require hiqdev/hipanel-domain-checker [@hiqsol]
    - [faa0b4f] 2016-11-15 Updated michelf/php-smartypants version in composer.json [@SilverFire]
    - [cb614c0] 2016-08-25 moved require `ahnames/yii2-asset-ahnames` bottom [@hiqsol]
    - [7bc9f06] 2016-07-13 returned back omnipay requires [@hiqsol]
    - [7ccb108] 2016-06-16 fixed .travis.yml [@hiqsol]
    - [3250733] 2016-06-16 fixed dependencies [@hiqsol]
    - [90e2172] 2016-06-16 allowed build failure for PHP 5.5 [@hiqsol]
    - [ae68b96] 2016-06-10 removed require yii2-pluginmanager [@hiqsol]
    - [64999c6] 2016-05-20 Merge branch 'working' [@SilverFire]
    - [b52c5b8] 2016-05-16 Added tysonmatanich/elementQuery dependency [@SilverFire]
- Added document, news and mailing modules requirements
    - [86abca8] 2017-01-04 Added hipanel-mailing requirement [@SilverFire]
    - [62dd168] 2016-11-22 Added documents dependency [@SilverFire]
    - [74e286a] 2016-06-24 Added dependency on news module [@SilverFire]
- Changed to new config scheme
    - [8f650e1] 2016-05-18 used composer-config-plugin [@hiqsol]
    - [d3c23dc] 2016-05-16 changed dependencies [@hiqsol]
    - [aeaf480] 2016-05-14 csfixed [@hiqsol]
    - [5c8079b] 2016-05-14 rehideved [@hiqsol]
    - [a270af8] 2016-05-14 inited tests [@hiqsol]
    - [3fe08da] 2016-05-13 removed frontend files [@hiqsol]
    - [8556dce] 2016-05-13 rearranged configs and assets [@hiqsol]
    - [f6d3003] 2016-05-13 removed frontend files [@hiqsol]
    - [a029270] 2016-05-13 removed unnecessary files [@hiqsol]
    - [d3997bd] 2016-05-13 changed `minimum-stability` to dev [@hiqsol]
    - [3577f5f] 2016-05-13 fixing dependencies [@hiqsol]
    - [3cdd41f] 2016-04-23 Added asset-packagist to composer.json [@SilverFire]
    - [13bc35e] 2016-03-24 Updated composer.json - added yiisoft/yii2-debug @dev [@SilverFire]
    - [e15a01b] 2016-03-23 Updated composer.json [@SilverFire]
    - [ac9b68d] 2016-03-23 Updated composer.json [@SilverFire]
    - [64cf42e] 2016-03-12 Added dev-requirement for yii2-bootstrap [@SilverFire]
    - [47a6646] 2015-12-10 fixed PHP version constraint to >=5.5 [@hiqsol]
    - [c1f80aa] 2015-12-09 Updated composer.json - added PHP7 [@SilverFire]
    - [f6308f3] 2016-01-11 used hiqdev/omnipay-paypal <- omnipay/paypal [@hiqsol]
    - [d954694] 2015-12-25 - require hiqdev/omnipay-paypal [@hiqsol]
    - [b5f8cc3] 2015-12-10 + require hiqdev/php-merchant [@hiqsol]
    - [08538dc] 2015-12-08 Added hiqdev/php-merchant dependency [@SilverFire]
    - [698c385] 2015-11-30 fixed requirements: hiqdev/payment-icons, dercoder/omnipay-webmoney [@hiqsol]
    - [12588e8] 2015-11-23 Added php-collection dependency [@SilverFire]
    - [cb95d3d] 2015-11-17 composer.json - yii2 switched to dev-version [@SilverFire]
    - [0960af8] 2015-11-13 required yii2-cart <- hipanel-module-cart [@hiqsol]
    - [1f192b9] 2015-11-12 php-cs-fixed [@hiqsol]
    - [e0e73c6] 2015-11-12 improved package description [@hiqsol]
    - [90cc26b] 2015-11-12 + require omnipay packages [@hiqsol]
    - [614fc9a] 2015-10-23 + require hiqdev/hipanel-module-dns [@hiqsol]
    - [92bb126] 2015-10-21 + require cart and merchant dependencies [@hiqsol]
    - [7cae54a] 2015-09-18 - require 2amigos/yii2-editable-widget [@hiqsol]
    - [8f5b6ab] 2015-09-09 fixed requires in composer.json [@hiqsol]
    - [12942fb] 2015-08-22 - require hiqdev/yii2-asset-hipanel [@hiqsol]
    - [d2baeae] 2015-08-22 - hipanel themes [@hiqsol]
    - [793b177] 2015-09-08 Merge pull request #2 from SilverFire/master [@hiqsol]
    - [dc679d2] 2015-09-08 Replaced raoul2000/yii2-pnotify-widget with iutbay/yii2-pnotify [@SilverFire]
- Added stock module
    - [48a1922] 2015-09-07 added stock module [@hiqsol]
    - [4cb26d7] 2015-08-31 used params.php from yii2-asset-ahnames for common/config/params.php [@hiqsol]
    - [7967610] 2015-08-23 php-cs-fixed [@hiqsol]
    - [3f97c81] 2015-08-23 Removed ahnames/hidev-config-php used hiqdev/hidev-config-php [@hiqsol]
    - [af7ed6f] 2015-08-23 + favicon at backend [@hiqsol]
    - [1a92e00] 2015-08-18 + favicon.ico [@hiqsol]
- Added ProjectAsset with logo positions
    - [6b74aab] 2015-08-27 fixed css for mini logo [@hiqsol]
    - [1e16a50] 2015-08-22 + ProjectAsset [@hiqsol]
    - [988f415] 2015-08-22 removed excessive gitignores [@hiqsol]
- Fixed to No license
    - [a50482d] 2015-08-20 changed to No license [@hiqsol]
- Added orgName and orgUrl params
    - [7965f9a] 2015-08-18 + orgName and orgUrl params [@hiqsol]
    - [6146cb8] 2015-08-18 Merge pull request #1 from SilverFire/master [@hiqsol]
    - [14a8832] 2015-08-18 yii file in the root of project added to .gitignore [@SilverFire]
    - [7e73af4] 2015-08-18 improved gitignores to not ignore .gitignore [@hiqsol]
- Changed: hiqdev/hipanel renamed to hiqdev/hipanel-core
    - [92c1530] 2015-08-17 fixed init after renaming to hipanel-core [@hiqsol]
    - [f2ab7e4] 2015-08-17 fixed require hipanel-core [@hiqsol]
    - [b202250] 2015-08-17 doing README [@hiqsol]
- Added basics
    - [24f7d94] 2015-08-16 + assets dir at frontend and backend [@hiqsol]
    - [6c94c0f] 2015-08-16 php-cs-fixed [@hiqsol]
    - [be52e01] 2015-08-16 - require request module [@hiqsol]
    - [7d12601] 2015-08-16 preparing runtime dirs [@hiqsol]
    - [687a481] 2015-08-15 making configs [@hiqsol]
    - [a1ba830] 2015-08-15 making configs [@hiqsol]
    - [389669f] 2015-08-15 making configs [@hiqsol]
    - [209626b] 2015-08-15 making config [@hiqsol]
    - [00fe625] 2015-08-15 making config [@hiqsol]
    - [be35053] 2015-08-15 admin/supportEmail moved to local [@hiqsol]
    - [39bd75d] 2015-08-15 NOT FINISHED: fixing to work [@hiqsol]
    - [d427dfd] 2015-08-14 + init [@hiqsol]
    - [6fd65ea] 2015-08-14 removed bootstrap.php files [@hiqsol]
    - [6bcb39b] 2015-08-14 inited [@hiqsol]

## [Development started] - 2015-08-14

[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[8f650e1]: https://github.com/ahnames/hipanel/commit/8f650e1
[d3c23dc]: https://github.com/ahnames/hipanel/commit/d3c23dc
[aeaf480]: https://github.com/ahnames/hipanel/commit/aeaf480
[5c8079b]: https://github.com/ahnames/hipanel/commit/5c8079b
[a270af8]: https://github.com/ahnames/hipanel/commit/a270af8
[3fe08da]: https://github.com/ahnames/hipanel/commit/3fe08da
[8556dce]: https://github.com/ahnames/hipanel/commit/8556dce
[f6d3003]: https://github.com/ahnames/hipanel/commit/f6d3003
[a029270]: https://github.com/ahnames/hipanel/commit/a029270
[d3997bd]: https://github.com/ahnames/hipanel/commit/d3997bd
[3577f5f]: https://github.com/ahnames/hipanel/commit/3577f5f
[3cdd41f]: https://github.com/ahnames/hipanel/commit/3cdd41f
[13bc35e]: https://github.com/ahnames/hipanel/commit/13bc35e
[e15a01b]: https://github.com/ahnames/hipanel/commit/e15a01b
[ac9b68d]: https://github.com/ahnames/hipanel/commit/ac9b68d
[64cf42e]: https://github.com/ahnames/hipanel/commit/64cf42e
[47a6646]: https://github.com/ahnames/hipanel/commit/47a6646
[c1f80aa]: https://github.com/ahnames/hipanel/commit/c1f80aa
[f6308f3]: https://github.com/ahnames/hipanel/commit/f6308f3
[d954694]: https://github.com/ahnames/hipanel/commit/d954694
[b5f8cc3]: https://github.com/ahnames/hipanel/commit/b5f8cc3
[08538dc]: https://github.com/ahnames/hipanel/commit/08538dc
[698c385]: https://github.com/ahnames/hipanel/commit/698c385
[12588e8]: https://github.com/ahnames/hipanel/commit/12588e8
[cb95d3d]: https://github.com/ahnames/hipanel/commit/cb95d3d
[0960af8]: https://github.com/ahnames/hipanel/commit/0960af8
[1f192b9]: https://github.com/ahnames/hipanel/commit/1f192b9
[e0e73c6]: https://github.com/ahnames/hipanel/commit/e0e73c6
[90cc26b]: https://github.com/ahnames/hipanel/commit/90cc26b
[614fc9a]: https://github.com/ahnames/hipanel/commit/614fc9a
[92bb126]: https://github.com/ahnames/hipanel/commit/92bb126
[7cae54a]: https://github.com/ahnames/hipanel/commit/7cae54a
[8f5b6ab]: https://github.com/ahnames/hipanel/commit/8f5b6ab
[12942fb]: https://github.com/ahnames/hipanel/commit/12942fb
[d2baeae]: https://github.com/ahnames/hipanel/commit/d2baeae
[793b177]: https://github.com/ahnames/hipanel/commit/793b177
[dc679d2]: https://github.com/ahnames/hipanel/commit/dc679d2
[48a1922]: https://github.com/ahnames/hipanel/commit/48a1922
[4cb26d7]: https://github.com/ahnames/hipanel/commit/4cb26d7
[7967610]: https://github.com/ahnames/hipanel/commit/7967610
[3f97c81]: https://github.com/ahnames/hipanel/commit/3f97c81
[af7ed6f]: https://github.com/ahnames/hipanel/commit/af7ed6f
[1a92e00]: https://github.com/ahnames/hipanel/commit/1a92e00
[6b74aab]: https://github.com/ahnames/hipanel/commit/6b74aab
[1e16a50]: https://github.com/ahnames/hipanel/commit/1e16a50
[988f415]: https://github.com/ahnames/hipanel/commit/988f415
[a50482d]: https://github.com/ahnames/hipanel/commit/a50482d
[7965f9a]: https://github.com/ahnames/hipanel/commit/7965f9a
[6146cb8]: https://github.com/ahnames/hipanel/commit/6146cb8
[14a8832]: https://github.com/ahnames/hipanel/commit/14a8832
[7e73af4]: https://github.com/ahnames/hipanel/commit/7e73af4
[92c1530]: https://github.com/ahnames/hipanel/commit/92c1530
[f2ab7e4]: https://github.com/ahnames/hipanel/commit/f2ab7e4
[b202250]: https://github.com/ahnames/hipanel/commit/b202250
[24f7d94]: https://github.com/ahnames/hipanel/commit/24f7d94
[6c94c0f]: https://github.com/ahnames/hipanel/commit/6c94c0f
[be52e01]: https://github.com/ahnames/hipanel/commit/be52e01
[7d12601]: https://github.com/ahnames/hipanel/commit/7d12601
[687a481]: https://github.com/ahnames/hipanel/commit/687a481
[a1ba830]: https://github.com/ahnames/hipanel/commit/a1ba830
[389669f]: https://github.com/ahnames/hipanel/commit/389669f
[209626b]: https://github.com/ahnames/hipanel/commit/209626b
[00fe625]: https://github.com/ahnames/hipanel/commit/00fe625
[be35053]: https://github.com/ahnames/hipanel/commit/be35053
[39bd75d]: https://github.com/ahnames/hipanel/commit/39bd75d
[d427dfd]: https://github.com/ahnames/hipanel/commit/d427dfd
[6fd65ea]: https://github.com/ahnames/hipanel/commit/6fd65ea
[6bcb39b]: https://github.com/ahnames/hipanel/commit/6bcb39b
[eb8cd37]: https://github.com/ahnames/hipanel/commit/eb8cd37
[18b1f71]: https://github.com/ahnames/hipanel/commit/18b1f71
[86abca8]: https://github.com/ahnames/hipanel/commit/86abca8
[d8c4e4e]: https://github.com/ahnames/hipanel/commit/d8c4e4e
[ec5a399]: https://github.com/ahnames/hipanel/commit/ec5a399
[4c1d6d0]: https://github.com/ahnames/hipanel/commit/4c1d6d0
[9051d42]: https://github.com/ahnames/hipanel/commit/9051d42
[f18a9f0]: https://github.com/ahnames/hipanel/commit/f18a9f0
[3c7547b]: https://github.com/ahnames/hipanel/commit/3c7547b
[43f87c3]: https://github.com/ahnames/hipanel/commit/43f87c3
[62dd168]: https://github.com/ahnames/hipanel/commit/62dd168
[c39f5a7]: https://github.com/ahnames/hipanel/commit/c39f5a7
[faa0b4f]: https://github.com/ahnames/hipanel/commit/faa0b4f
[cb614c0]: https://github.com/ahnames/hipanel/commit/cb614c0
[7bc9f06]: https://github.com/ahnames/hipanel/commit/7bc9f06
[74e286a]: https://github.com/ahnames/hipanel/commit/74e286a
[7ccb108]: https://github.com/ahnames/hipanel/commit/7ccb108
[3250733]: https://github.com/ahnames/hipanel/commit/3250733
[90e2172]: https://github.com/ahnames/hipanel/commit/90e2172
[ae68b96]: https://github.com/ahnames/hipanel/commit/ae68b96
[64999c6]: https://github.com/ahnames/hipanel/commit/64999c6
[b52c5b8]: https://github.com/ahnames/hipanel/commit/b52c5b8
[Under development]: https://github.com/ahnames/hipanel/releases
[Under]: https://github.com/ahnames/hipanel/releases/tag/Under
[9895c3e]: https://github.com/ahnames/hipanel/commit/9895c3e
[0.0.1]: https://github.com/ahnames/hipanel/releases/tag/0.0.1
[0.1.0]: https://github.com/ahnames/hipanel/releases/tag/0.1.0
