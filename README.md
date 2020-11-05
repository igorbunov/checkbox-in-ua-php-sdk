# checkbox-in-ua-php-sdk
### PHP SDK for integration with checkbox.in.ua api

##### Примечание:

> В данном sdk реализованы только функции онлайн режима (оффлайн не реализован)

#### Официальная документация:

<https://dev-api.checkbox.in.ua/api/redoc>

<https://dev-api.checkbox.in.ua/api/docs>

#### Установка: 
```bash
composer require igorbunov/checkbox-in-ua-php-sdk
```

#### Настройка:

```php
require_once 'vendor/autoload.php';
```

##### подключение всех неймспейсов:
```php
use Checkbox\CheckboxJsonApi;
use Checkbox\Config;
use Checkbox\Errors\InvalidCredentials;
use Checkbox\Errors\Validation;
use Checkbox\Errors\NoActiveShift;
use Checkbox\Errors\AlreadyOpenedShift;
use Checkbox\Errors\EmptyResponse;
use Checkbox\Models\CashRegisters\CashRegistersQueryParams;
use Checkbox\Models\Shifts\ShiftsQueryParams;
use Checkbox\Models\Receipts\ReceiptsQueryParams;
use Checkbox\Models\Receipts\Discounts\Discounts;
use Checkbox\Models\Receipts\Discounts\DiscountModel;
use Checkbox\Models\Receipts\SellReceipt;
use Checkbox\Models\Receipts\Payments\Payments;
use Checkbox\Models\Receipts\Payments\CardPaymentPayload;
use Checkbox\Models\Receipts\Payments\CashPaymentPayload;
use Checkbox\Models\Receipts\ServiceReceipt;
use Checkbox\Models\Reports\PeriodicalReportQueryParams;
use Checkbox\Models\Reports\ReportsQueryParams;
use Checkbox\Models\Transactions\TransactionsQueryParams;
use Checkbox\Models\Receipts\Goods\Goods;
use Checkbox\Models\Receipts\Goods\GoodItemModel;
use Checkbox\Models\Receipts\Goods\GoodModel;
```
##### Настройка конфига:

>адрес продакшен сервера http://api.checkbox.in.ua<br/>
>адрес тестового сервера http://dev-api.checkbox.in.ua<br/>
>текущая версия API - v1

```php
$config = new Config([
    Config::API_URL => 'https://dev-api.checkbox.in.ua/api/v1',
    Config::LOGIN => 'логин кассира',
    Config::PASSWORD => 'пароль кассира',
    Config::LICENSE_KEY => 'ключ лицензии кассы'
]);
```

##### Логин кассира:

```php
$api = new CheckboxJsonApi($config);
$api->signInCashier();
$api->signOutCashier();
```
или
```php
$api = (new CheckboxJsonApi())
    ->setConfig($config)
    ->setConnectTimeout(10)
    ->signInCashier();
```
##### Логаут кассира:
```php
$api->signOutCashier();
```
##### Ошибки (Exceptions):
```php
InvalidCredentials - не верные данные логина или пароля
```
```php
EmptyResponse - пустой ответ
```
```php
Validation - ошибка валидации (есть детальные. данные $err->getDetail())
```
```php
NoActiveShift - нет активной смены
```
```php
AlreadyOpenedShift - смена уже открыта
```
```php
\Exception  - стандартная ошибка
```

#### Основные методы:

##### profile (касир):
```php
$api->getCashierProfile() : Cashier // возвращает профиль кассира
```
##### shifts (смены):
```php
$api->getCashierShift() : Shift // возвращает текущую смену кассира
```
```php
$api->getShift('ид смены') : Shift // возвращает смену по ид
```
```php
$api->getShifts() : Shifts // возвращает смены
```
или
```php
$api->getShifts(
    new ShiftsQueryParams(
        [
            ShiftsQueryParams::STATUS_CLOSED,
            ShiftsQueryParams::STATUS_OPENED
        ], // статусы смены
        false, // desc - сортировка (false or true)
        2, // limit
        0 // offset
    )
): Shifts // возвращает смены с учетом фильтра
```
```php
$api->createShift() : CreateShift // создает смену
```
```php
$api->closeShift() : CloseShift // закрывает смену
```
##### cash registers (пРРО):
```php
$api->getCashRegisters() : CashRegisters // возвращает кассовые регистраторы
```
или
```php
$api->getCashRegisters(
    new CashRegistersQueryParams(
        true, // inUse - используется или нет (true or false)
        3, // limit
        0 // offset
    )
) : CashRegisters // возвращает кассовые регистраторы по фильтру
```
```php
$api->getCashRegister('ид кассы') : CashRegister // возвращает кассу по айди
```
```php
$api->getCashRegisterInfo() : CashRegisterInfo // возвращает информацию текущей кассы
```
##### taxes (налоги):
```php
$api->getAllTaxes() : GoodTaxes // возвращает все налоги
```
##### transactions (транзакции):
```php
$api->getTransactions(
    new TransactionsQueryParams(
        [
            TransactionsQueryParams::STATUS_CREATED,
            TransactionsQueryParams::STATUS_DONE,
            TransactionsQueryParams::STATUS_SIGNED
        ], // статусы транзакции
        [
            TransactionsQueryParams::TYPE_RECEIPT,
            TransactionsQueryParams::TYPE_SHIFT_OPEN,
            TransactionsQueryParams::TYPE_Z_REPORT
        ], // типы транзакций
        2, // limit
        0 // offset
    )
) : Transactions // возвращает транзакции по фильтру
```
```php
$api->getTransaction('ид транзакции') : Transaction // возвращает транзакцию по айди
```
```php
$api->updateTransaction(
    'ид транзакции',
    base64_encode('request_signature')
) : Transaction // меняет request_signature у транзакции, работает только если у транзакции статус PENDING
```
##### reports (отчеты):
```php
$api->getReport() : ZReport // создает х отчет
```
```php
$api->getReport('ид отчета') : ZReport // возвращает данные отчета по айди
```
```php
$api->getReportText('ид отчета') : string // возвращает данные отчета по айди в виде текста
```
или
```php
$api->getReportText('ид отчета', 60) : string // возвращает данные отчета по айди в виде текста, с указанием ширины текста
```
```php
$api->getPeriodicalReport(
    new PeriodicalReportQueryParams(
        '2020-10-27 00:00:00', // дата с
        '2020-11-04 13:15:00', // дата по
        60 // ширина текста
    )
) : string // возвращает данные отчета за период по фильру
```
```php
$api->getReports(
    new ReportsQueryParams(
        '2020-10-27 00:00:00', // дата с
        '2020-11-04 13:15:00', // дата по
        [], // массив ид смен
        false, // is_z_report (true or false)
        true, // desc - сортировка (false or true)
        3, // limit
        0 // offset
    )
) : Reports // возвращает отчеты по фильтру
```
##### receipts (чеки):
```php
$api->getReceipts() : Receipts // возвращает чеки
```
```php
$api->getReceipts(
    new ReceiptsQueryParams(
        '', // fiscal code
        '', // serial
        false, // desc - сортировка (false or true)
        2, // limit
        0 // offset
    )
) : Receipts // возвращает чеки по фильтру
```
```php
$api->getReceipt('ид чека') : Receipt // возвращает чек по айди
```
```php
$api->getReceiptPdf('ид чека') : pdf // возвращает чек по айди в виде пдф
```
```php
$api->getReceiptHtml('ид чека') : string // возвращает чек по айди в виде html
```
```php
$api->getReceiptText('ид чека') : string // возвращает чек по айди в виде текста
```
```php
$api->getReceiptQrCodeImage('ид чека') : string // возвращает чек по айди в виде qr-кода
```
или
```php
// пример с отображением qr-кода
$rawImageContent = $api->getReceiptQrCodeImage('ид чека');
echo '<img src="data:image/png;base64,' . base64_encode($rawImageContent) . '"/>';
```
###### чек продажи:
```php
$receipt = new SellReceipt(
    'Вася Пупкин', // кассир
    'Отдел продаж', // отдел
    new Goods(
        [
            new GoodItemModel( // товар 1
                new GoodModel(
                    'vm-123', // good_id
                    50 * 100, // 50 грн
                    'Биовак' // название товара
                ),
                1 * 1000 // кол-во товара  1 шт
            ),
            new GoodItemModel( // товар 2
                new GoodModel(
                    'vm-124', // good_id
                    20 * 100, // 20 грн
                    'Биовак 2' // название товара
                ),
                2 * 1000 // кол-во товара 2 шт
            )
        ]
    ),
    'admin@gmail.com', // кому отправлять чек по почте
    new Payments([
        new CardPaymentPayload( // безналичная оплата
            40 * 100 // 40 грн
        ),
        new CashPaymentPayload( // наличная оплата
            50 * 100 // 50 грн
        )
    ])
);

$api->createSellReceipt($receipt): Receipt; // выполняем оплату
```
более сложная оплата:
```php
$allTaxes = $api->getAllTaxes(); // получили все налоги
$tax = $allTaxes->getTaxByLabel('Акцизний збір'); // получили один налог по лейбл 
$goodTaxes = $allTaxes->getTaxesByLabel('ПДВ'); // получили массив налогов по лейбл
$taxCodes = [];

// подготавливаем массив кодов налогов
foreach ($goodTaxes->results as $goodTax) {
    $taxCodes[] = $goodTax->code;
}

$receipt = new SellReceipt(
    'Вася Пупкин', // имя кассира
    'Отдел продаж', // отдел
    new Goods( // товары
        [
            new GoodItemModel(
                new GoodModel(
                    'vm-123', // good_id айди товара
                    5000, // 50 грн  цена 100 = 1 грн
                    'Биовак', // название
                    '5р47ле78675е3', // баркод
                    'хидер', // хидер
                    'футер', // футер
                    '', // ktzed
                    $goodTaxes // налоги товара
                ),
                1000, // кол-во 1000 = 1 шт
                new Discounts( // скидки или надбавки
                    [
                        new DiscountModel(
                            DiscountModel::TYPE_DISCOUNT, // скидка или надбавка
                            DiscountModel::MODE_VALUE, // по значению или по проценту
                            100, // 1 грн  сумма скидки/надбавки  100 = 1 грн
                            0, // сумма (не используется в данном sdk)
                            $tax->code, // код налога (подготовили выше)
                            $taxCodes, // массив кодов налога (подготовили выше)
                            'one good discount' // название
                        )
                    ]
                ),
                $allTaxes->getTaxesByLabel('Акцизний збір'), // налоги товара
                false, // возврат товара (false or true)
                0, // сумма (не используется в данном sdk)
                '' // айди товара (только если вы загружали список товарв (не используется в данном sdk))
            )
        ]
    ),
    'admin@gmail.com', // кому отправлять чек по почте
    new Payments([ // оплаты
        new CardPaymentPayload( // безналичная оплата
            400, // сумма оплаты 400 = 4 грн
            'beznalichka', // текст оплаты
            0, // code - не знаю для чего (видимо пин код карты)
            '0000 0000 0000 0000' // номер карты
        ),
        new CashPaymentPayload( // наличная оплата
            4300, // сумма оплаты 4300 = 43 грн
            'nalichka' // текст оплаты
        )
    ]),
    new Discounts( // скидки/надбавки на весь чек
        [
            new DiscountModel(
                DiscountModel::TYPE_DISCOUNT, // скидка или надбавка
                DiscountModel::MODE_VALUE, // по значению или по проценту
                200, // 2 грн  сумма скидки/надбавки  200 = 2 грн
                0, // сумма (не используется в данном sdk)
                $tax->code, // код налога (подготовили выше)
                $taxCodes, // массив кодов налога (подготовили выше)
                'total discount' // название
            )
        ]
    ),
    'check header', // чек хидер
    'check footer', // чек футер
    '45435h543twrege' // баркод
);

$saleReceiptResult = $api->createSellReceipt($receipt): Receipt; // выполняем оплату
```
еще пример
```php
$allTaxes = $api->getAllTaxes();
$tax = $allTaxes->getTaxByLabel('Акцизний збір');
$goodTaxes = $allTaxes->getTaxesByLabel('ПДВ');
$taxCodes = [];

foreach ($goodTaxes->results as $goodTax) {
    $taxCodes[] = $goodTax->code;
}

$receipt = new SellReceipt(
    'Вася Пупкин',
    'Отдел продаж',
    new Goods(
        [
            new GoodItemModel(
                new GoodModel(
                    'vm-123', // good_id
                    5000, // 50 грн
                    'Биовак',
                    '',
                    '',
                    '',
                    '',
                    $goodTaxes
                ),
                1000,
                new Discounts(
                    [
                        new DiscountModel(
                            DiscountModel::TYPE_DISCOUNT,
                            DiscountModel::MODE_VALUE,
                            100, // 1 грн
                            0,
                            $tax->code,
                            $taxCodes,
                            'моя скидка'
                        )
                    ]
                ),
                $allTaxes->getTaxesByLabel('Акцизний збір'),
                false,
                0,
                ''
            ),
            new GoodItemModel(
                new GoodModel(
                    'vm-124', // good_id
                    2000, // 20 грн
                    'Биовак 2',
                    '',
                    '',
                    '',
                    '',
                    $goodTaxes
                ),
                2000, // 2 шт
                new Discounts(
                    [
                        new DiscountModel(
                            DiscountModel::TYPE_EXTRA_CHARGE,
                            DiscountModel::MODE_VALUE,
                            200, // 2 грн
                            0,
                            $tax->code,
                            $taxCodes,
                            'моя надбавка'
                        )
                    ]
                ),
                $allTaxes->getTaxesByLabel('Акцизний збір'),
                false,
                0,
                ''
            )
        ]
    ),
    'admin@gmail.com',
    new Payments([
        new CardPaymentPayload(
            4700
        ),
        new CashPaymentPayload(
            4700
        )
    ]),
    new Discounts(
        [
            new DiscountModel(
                DiscountModel::TYPE_EXTRA_CHARGE,
                DiscountModel::MODE_VALUE,
                200, // 2 грн
                0,
                $tax->code,
                $taxCodes,
                'общая надбавка'
            )
        ]
    )
);

$api->createSellReceipt($receipt): Receipt;
```
```php
$api->createServiceReceipt(
    new ServiceReceipt(
        new CashPaymentPayload(5100)
    )
): Receipt // создаем чек сервисного внесения денег (наличкой)
```
```php
$api->createServiceReceipt(
    new ServiceReceipt(
        new CardPaymentPayload(1000)
    )
): Receipt // создаем чек сервисного внесения денег (картой)
```
```php
$api->createServiceReceipt(
    new ServiceReceipt(
        new CashPaymentPayload(-5100)
    )
): Receipt // создаем чек сервисного вынесения денег (наличкой) (знак минус)
```
```php
$api->createServiceReceipt(
    new ServiceReceipt(
        new CardPaymentPayload(-1000)
    )
): Receipt // создаем чек сервисного вынесения денег (картой) (знак минус)
```

##### Рекомендации:

> все операции оборачивать в try cache
```php
try {

    // тут все делаем

} catch (InvalidCredentials $err) {
    var_dump('creds err', $err->getMessage());
}  catch (EmptyResponse $err) {
    var_dump('empty response', $err->getMessage(), $err->getTraceAsString());
} catch (Validation $err) {
    var_dump('valid err', $err->getMessage());
    var_dump('error detail', $err->getDetail());
} catch (NoActiveShift $err) {
    var_dump('no shift', $err->getMessage());
} catch (AlreadyOpenedShift $err) {
    var_dump('opened shift', $err->getMessage());
} catch (\Exception $err) {
    var_dump('default err', $err->getMessage());
}
```