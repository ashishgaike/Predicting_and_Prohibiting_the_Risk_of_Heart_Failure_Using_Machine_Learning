<?php
// (A) LOAD INVOICR
require "invlib/invoicr.php";

// (B) SET INVOICE DATA
// (B1) COMPANY INFORMATION
// /* RECOMMENDED TO JUST PERMANENTLY CODE INTO INVLIB/INVOICR.PHP > (C1)
$invoicr->set("company", [
	"code-boxx-logo.png",
	"D:/http/code-boxx-logo.png",
	"BeSure.",
	"NBN Sinhgad School Of Engineering, Ambegaon(BK)",
	"Pune, Maharashtra, 411041",
	" Phone: 8888534360 | Whatsapp: 8888534360",
	"UPI: ashishgaike@ybl"
]); 

// (B2) INVOICE HEADER
$invoicr->set("head", [
	["Invoice #", "CB-123-456"],
	["GSTIN", "2001T03G26"],
	["P.O. #", "CB-789-123"],
	["Date", "2023-05-12"]
]);

// (B3) BILL TO
$invoicr->set("billto", [
	"Ashish Gaike",
	"Chh. Sambhajinagar",
	"Maharashtra, 431101"
]);

// (B4) SHIP TO
$invoicr->set("shipto", [
	"Ashish Gaike",
	"Chh. Sambhajinagar",
	"Maharashtra, 431101"
]);

// (B5) ITEMS - ADD ONE-BY-ONE
$items = [
	["Basic Course", "Basic Course subscription", 01, "₹49.50", "₹49.50"],
	// ["Men’s Course", "premium subscription", 01, "₹249.50", "₹249.50"],
	// ["Rubber Band", "premium subscription", 01, "₹249.50", "₹249.50"],
];
// foreach ($items as $i) { $invoicr->add("items", $i); }

// (B6) ITEMS - OR SET ALL AT ONCE
$invoicr->set("items", $items);

// (B7) TOTALS
$invoicr->set("totals", [
	["SUB-TOTAL", "₹49.50"],
	["GST 18%", "₹8.91"],
	["GRAND TOTAL", "₹58.41"]
]);

// (B8) NOTES, IF ANY
$invoicr->set("notes", [
	"Cheques should be made payable to Ashish Subhash Gaike",
	"GST Included 18%",
	"All UPI are ACCEPTED",
	"Digital Invoice Accepted In customer Service"
]);

// (C) OUTPUT
// (C1) CHOOSE A TEMPLATE
// $invoicr->template("apple");
// $invoicr->template("banana");
// $invoicr->template("blueberry");
$invoicr->template("lime");
// $invoicr->template("simple");
// $invoicr->template("strawberry");

// (C2) OUTPUT IN HTML
// DEFAULT : DISPLAY IN BROWSER
// 1 : DISPLAY IN BROWSER
// 2 : FORCE DOWNLOAD
// 3 : SAVE ON SERVER
// 4 : DISPLAY IN BROWSER & SAVE AS PNG
// $invoicr->outputHTML();
$invoicr->outputHTML(1);
// $invoicr->outputHTML(2, "invoice.html");
// $invoicr->outputHTML(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice.html");
// $invoicr->outputHTML(4, "invoice.png"); //main file code

// (C3) OUTPUT IN PDF
// DEFAULT : DISPLAY IN BROWSER
// 1 : DISPLAY IN BROWSER
// 2 : FORCE DOWNLOAD
// 3 : SAVE ON SERVER
// $invoicr->outputPDF();
// $invoicr->outputPDF(1);
// $invoicr->outputPDF(2, "invoice.pdf");
// $invoicr->outputPDF(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice.pdf");

// (C4) OUTPUT IN DOCX
// DEFAULT : FORCE DOWNLOAD
// 1 : FORCE DOWNLOAD
// 2 : SAVE ON SERVER
// $invoicr->outputDOCX();
// $invoicr->outputDOCX(1, "invoice.docx");
// $invoicr->outputDOCX(2, __DIR__ . DIRECTORY_SEPARATOR . "invoice.docx");

// (D) USE RESET() IF YOU WANT TO CREATE ANOTHER ONE AFFTER THIS
// $invoicr->reset();