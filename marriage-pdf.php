<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();
require 'fpdf/fpdf.php';
require 'marriage-submit.php';
//require 'signup-submit.php';

class myPDF extends FPDF
{

    function header()
    {

        //$fname = print_r($fname);
        $this->image('images/marriage-certificate.png', 13, -3, 270);
        $this->Cell(80);
        $this->SetFont('Courier', 'BI', 17);
        //include 'submit.php';
        include 'marriage-submit.php';
        $this->cell(25, 166, $_SESSION['hfname'], 0, 0, 'C');
        $this->cell(180, 166, $_SESSION['wfname'], 0, 0, 'C');
        $this->cell(-160, 224, date('Y'), 0, 0, 'C');
        $this->cell(-120, 224, date('dS'), 0, 0, 'C');
        $this->cell(245, 224, date('F'), 0, 0, 'C');
        $this->cell(-110, 277, $_SESSION['witnessfname'], 0, 0, 'C');
        $this->cell(-110, 277, $_SESSION['witness2fname'], 0, 0, 'C');
        //$this->cell(-60, 224, 'July', 0, 0, 'C');
        // $this->cell(30, 280, 'Witness1', 0, 0, 'C');
        // $this->cell(170, 280, 'witneess2', 0, 0, 'C');
        // $this->cell(40, 210, time(), 0, 0, 'C');
        // $this->cell(-35, 247, $_SESSION['height'], 0, 0, 'C');
        // $this->cell(-130, 247, $_SESSION['weight'], 0, 0, 'C');
        // $this->cell(202, 281, $_SESSION['pob'], 0, 0, 'C');
        // $this->cell(-250, 315, $_SESSION['city'], 0, 0, 'C');
        // $this->cell(355, 315, $_SESSION['state'], 0, 0, 'C');
        //$this->cell(-8, 348, $_SESSION['city'], 0, 0, 'C');


        $this->Ln(50);
    }
    function footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', '', 0);
        //$this->cell(0,10,'Page '.$this->PageNo.'/{nb}',0,0,'C');
    }
    function headerTable()
    {
        //$this->image('images/birth-certificate.png', 13, -3, 270);
        $this->Cell(80);
        $this->SetFont('Courier', 'BI', 17);

        //$this->cell(120, 20, 'Charles', 0, 300, 'C');
        // $this->cell(40, 73, 'Angela', 0, 0, 'C');
        // $this->cell(120, 73, 'Joseph', 0, 0, 'C');
        // $this->cell(-280, 112, '09-07-2019', 0, 0, 'C');
        // $this->cell(440, 112, '12:52 pm', 0, 0, 'C');
        // $this->cell(70, 10, '50kg', 0, 0, 'C');
        // $this->cell(120, 50, '6\'1\"', 0, 0, 'C');
        // $this->Ln(15);
    }

    // function viewTable()
    // {
    //     require 'submit.php';
    //     $this->SetFont('Times', '', 17);


    //     //for ($i = 0; $i < 2; $i++) {
    //     //echo $i;

    //     //$subscribedServices = json_decode($output[0])->data[$i];









    //     $this->cell(135, 10, $fname, 1, 0, 'L');

    //     $this->Ln();
    //     //}
    // }
    // function body()
    // {
    //     $this->Cell(80);
    //     $this->SetFont('Courier', 'BI', 17);

    //     //$this->cell(120, 20, 'Charles', 0, 300, 'C');
    //     $this->cell(40, 70, '50kg', 0, 0, 'C');
    //     $this->cell(120, 114, '6\'1\"', 0, 0, 'C');
    //     //$this->cell(-280, 172, 'dffgdg', 0, 0, 'C');
    //     //$this->cell(440, 152, 'dffffgdgd', 0, 0, 'C');
    //     $this->Ln(15);
    // }
}


$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A4', 0);
$pdf->headerTable();
//$pdf->viewTable();
//$pdf->body();

// $str = "0123456789qwertyijhgfsdaklxmc";
// $str = str_shuffle($str);
// $str = substr($str, 0, 10);
//$url = $actual_link . "?controller=confirmpassword&token=$str&email=$email";

$pdf->output();
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: E-Governance';
$message = '<html><body>';
$message .= '<p>Dear User,';
$message .= '<br /><br /><br /><br />';
$message .= 'Your marriage certificate creation was successful';
//$message .= '<p>Kindly click <b><a href="' . $url . '" style="color:red;">this link</a></b> to change your password or copy the link below to your browser: </p>';
//$message .= $url;
$message .= '<br /><br /><br />';
$message .= '<p style="color:blue">E-Governance.</p>';
$message .= '</body></html>';

mail($_SESSION['email'], "E-Governance Marriage Certificate", $message, $headers);
