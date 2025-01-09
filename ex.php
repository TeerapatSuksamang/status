<?php

    // Rider
    // rider/see_res.php (หน้านี้ตอนแรกจะยังใช้ไม่ได้ เดี๋ยวกูไปทำเพิ่ม)
    // หรือถ้าไหวจะทำเองก็ได้ ก็อปจากหน้า user/see_res.php ก้อปตั้งแต่ตรงที่ เช็ค see_res ไปจนสุด container-fluid ที่แสดงรายละเอียดร้านอ่ะ
    $select = mysqli_query($conn, "SELECT * FROM `order_detail` WHERE `res_id` = '$rider_see_res' AND `status` = 2 ");
    // `res_id` = '$rider_see_res' คือ เอาไอดีจากร้านที่กำลังดูอยู่ตอนนี้
    // `status` = 2 สถานะที่กำลังรอ rider รับ

    // rider/status.php
    $select = mysqli_query($conn, "SELECT * FROM `order_detail` WHERE `rider_id` = '$rider_id' AND `status` BETWEEN 3 AND 6 ");
    // `rider_id` = '$rider_id' คือ เอาออร์เดอร์ของ rider ที่ล็อคอินอยู่ตอนนี้
    // `status` BETWEEN 3 AND 6 คือ แสดงตั้งแต่ status 3 ถึง 6 (ตั้งแต่ rider รับ จนยืนยันชำระเงินเสร็จ)

    // rider/history.php
    WHERE `rider_id` = '$rider_id' AND `status` = 7
    // เอา order ของ rider ที่ล็อคอินอยู่ และลูกค้ารีวิวแล้ว จะมาแสดงเป็นประวัติ


    // User
    // user/status.php
    WHERE `user_id` = '$user_id' AND `status` BETWEEN 0 AND 6

    // user/hisroy.php
    WHERE `user_id` = '$user_id' ANF `status` = 7


    // Res
    // res/status.php
    WHERE `res_id` = '$res_id' AND `status` BETWEEN 0 AND 6

    // user/report.php
    WHERE `res_id` = '$res_id' ANF `status` = 7


    // `` คือสำหรับครอบชื่อคอลลั่มของ SQL = `res_id`
    // '' สำหรับครอบตัวแปลของ PHP = '$res_id'

    // $conn คือ ตัวแปรที่กูเก็บการเชื่อมต่อฐานข้อมูลเอาไว้
    // $ชื่อตัวแปรที่จะเก็บ = mysqli_query($conn, "คำสั่ง SQL");
    // คำสั่ง SQL หาก็อปจากไฟล์ที่กูทำก้ได้ มีอยู่ทุกไฟล์ แต่ไฟล์ db.php น่าจะดูง่ายอยู่

    // เช็คว่าคำสั่ง sql ที่ดึงข้อมูล ก่อนหน้านี้ สามารถดึงมาได้มั้ย มีตารางให้ดึงตามเงื่อนไขมั้ย
    if($select -> num_rows > 0){
        // ถ้าดึงได้ คือมีออร์เดอร์นี้อยู่ ก้จะเอา status.php มาแสดง 
        include '../template/status.php';
    } else {
        // p บอกว่า ยังไม่มีออร์เดอร์ในขณะนี้
    }
?>
