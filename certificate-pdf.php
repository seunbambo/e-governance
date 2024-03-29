<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

session_start();
require 'fpdf/fpdf.php';
require 'submit.php';

class myPDF extends FPDF
{

    function header()
    {

        //$fname = print_r($fname);
        $this->image('images/birth-certificate.png', 0, 0, 210);
        $this->Cell(0);
        $this->SetFont('Courier', 'BI', 17);
        include 'submit.php';
        $this->cell(-100, 115, $_SESSION['firstname'], 0, 0, 'C');
        $this->cell(220, 115, $_SESSION['middlename'], 0, 0, 'C');
        $this->cell(-50, 115, $_SESSION['surname'], 0, 0, 'C');
        $this->cell(-40, 172, $_SESSION['fname'], 0, 0, 'C');
        $this->cell(-120, 172, $_SESSION['mname'], 0, 0, 'C');
        $this->cell(120, 210, date('d-m-Y'), 0, 0, 'C');
        $this->cell(40, 210, date('H:i:s'), 0, 0, 'C');
        $this->cell(-35, 247, $_SESSION['height'], 0, 0, 'C');
        $this->cell(-130, 247, $_SESSION['weight'], 0, 0, 'C');
        $this->cell(202, 281, $_SESSION['pob'], 0, 0, 'C');
        $this->cell(-250, 315, $_SESSION['city'], 0, 0, 'C');
        $this->cell(355, 315, $_SESSION['state'], 0, 0, 'C');
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
    }
}


$pdf = new myPDF();
$pdf->AliasNbPages();
//$pdf->AddPage('L', 'A4', 0);
$pdf->headerTable();
//$pdf->viewTable();
//$pdf->body();
$pdf->output();

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: E-Governance';
$message = '<html><body>';
$message .= '<p>Dear User,';
$message .= '<br /><br /><br />';
$message .= 'Your marriage certificate creation was successful';
//$message .= '<p>Kindly click <b><a href="' . $url . '" style="color:red;">this link</a></b> to change your password or copy the link below to your browser: </p>';
//$message .= $url;
$message .= '<br /><br /><br />';
$message .= '<p style="color:blue">E-Governance.</p>';
$message .= '</body></html>';

//mail($_SESSION['email'], "E-Governance Marriage Certificate", $message, $headers);
