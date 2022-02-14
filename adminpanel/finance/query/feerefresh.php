<?php
try {
    //$selExmne = $conn->query("SELECT * FROM examinee_tbl");
    //$insData = $conn->query("INSERT INTO examnee_fee_invoices(id,payee,receiver,ammount,payment_mode) VALUES('$id','$payee','$fId','$ammount','$payment_mode')");
    //$selPaymentData = $conn->query("SELECT * FROM examnee_fee_invoices where id=$id ORDER BY created DESC ");

    $selExmne = $conn->query("SELECT * FROM examinee_tbl");
    if ($selExmne->rowCount() > 0) {
        while ($selExata = $selExmne->fetch(PDO::FETCH_ASSOC)) {
            $stringRaw = $selExata['exmne_id'] . $selExata['exmne_year_level'] . $selExata['Academic_Level'] . $selExata['Term'];
            $string_check = preg_replace('/\s+/', '', (strtolower($stringRaw)));
            $selPaymenthisto = $conn->query("SELECT * FROM fee_invoice_push where string='$string_check'");
            if ($selPaymenthisto->rowCount() < 1) {
                $level = $selExata['Academic_Level'];
                $swlectFeeestr = $conn->query("SELECT * FROM fee_structure where level='$level'")->fetch(PDO::FETCH_ASSOC);
                if ($swlectFeeestr['ammount'] != "") {
                    $ammount = 0 - $swlectFeeestr['ammount'];
                    $id1 = $selExata['exmne_id'];
                    $insDatafee = $conn->query("INSERT INTO examnee_fee_invoices(id,payee,receiver,ammount,payment_mode) VALUES('$id1','NULL','NULL','$ammount','Invoice')");
                    if ($insDatafee) {
                        $insData = $conn->query("INSERT INTO fee_invoice_push(string) VALUES('$string_check')");
                    }
                }
            }
        }
    }
} catch (\Throwable $th) {
    //throw $th;
}
