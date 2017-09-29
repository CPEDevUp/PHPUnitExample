# PHPUnitExample (ตัวอย่างการเขียน Test case เบื้องต้น)
## ขั้นตอนการทดสอบ
### 1.ดึง Repository ไปยังเครื่องของคุณ
```console
git clone https://github.com/CPEDevUp/PHPUnitExample.git
```
### 2.เข้าไปยัง ไดเรคทรอรี PHPUnitExample
```console
cd PHPUnitExample
```
### 3.ดึง library ที่โปรเจ็คนี้ต้องการมา
```console
composer update
```
### 4.รัน คำสั่งเพื่อทดสอบ
```console
phpunit ./test/ 
```
### 5.ตรวจสอบการทดสอบ
```console
computer$ phpunit ./test/
PHPUnit 5.5.4 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 121 ms, Memory: 8.00MB

OK (1 test, 5 assertions)
```
