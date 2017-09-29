<?php
 


use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testPushAndPop()
    {
        /**  อาเรย์ที่ต้องการทดสอบ */
        $stack = [];

        /** ทดสอบว่า จำนวนของ $stack ควรจะเท่ากับ 0 **/
        $this->assertEquals(0, count($stack));


        /** ทำการ push ข้อความ "foo" เข้าไปใน $stack */
        array_push($stack, 'foo');


        /** ทดสอบว่าเมื่อมีการ push "foo" เข้าไปก็น่าจะเจอ ข้อความ "foo" ใน $stack เป็นตัวล่าสุด **/
        $this->assertEquals('foo', $stack[count($stack)-1]);

        /** ทดสอบว่าหลังจาก push "foo" เข้าไป จำนวนข้อมูลใน $stack ก็ควรจะเท่ากับ  1 **/
        $this->assertEquals(1, count($stack));

        /** ทดสอบว่าถ้า pop $stack ก็น่าจะเป็น ข้อความ "foo" ที่จะถุก pop ออก **/
        $this->assertEquals('foo', array_pop($stack));

        /** ทดสอบว่าเมื่อ pop "foo" ออกจากไปแล้ว $stack จำนวนข้อมูลใน $stack ก็ควรจะเท่ากับ  0 **/
        $this->assertEquals(0, count($stack));
    }

}