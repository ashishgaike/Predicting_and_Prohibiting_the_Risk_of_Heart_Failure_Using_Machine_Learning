<?php
require "invlib/invoicr.php";

$invoicr->set("company", [
	"code-boxx-logo.png",
	"D:/http/code-boxx-logo.png",
	"BeSure.",
	"NBN Sinhgad School Of Engineering, Ambegaon(BK)",
	"Pune, Maharashtra, 411041",
	" Phone: 8888534360 | Whatsapp: 8888534360",
	"UPI: ashishgaike@ybl"
]); 

$invoicr->set("head", [
	["Invoice #", "CB-123-456"],
	["GSTIN", "2001T03G26"],
	["P.O. #", "CB-789-123"],
	["Date", "2023-05-12"]
]);

$invoicr->set("billto", [
	"Ashish Gaike",
	"Chh. Sambhajinagar",
	"Maharashtra, 431101"
]);

$invoicr->set("shipto", [
	"Ashish Gaike",
	"Chh. Sambhajinagar",
	"Maharashtra, 431101"
]);

$items = [
	["Doctor Fees", "Online Appontment Fees", 01, "₹329.50", "₹329.50"],
];

$invoicr->set("items", $items);

$invoicr->set("totals", [
	["SUB-TOTAL", "₹329.50"],
	["GST 18%", "₹59.22"],
	["GRAND TOTAL", "₹388.72"]
]);

$invoicr->set("notes", [
	"Cheques should be made payable to Ashish Subhash Gaike",
	"GST Included 18%",
	"All UPI are ACCEPTED",
	"Digital Invoice Accepted In customer Service"
]);

$invoicr->template("apple");
// DISPLAY IN BROWSER & SAVE AS PNG
$invoicr->outputHTML(1);
$invoicr->outputHTML(3, __DIR__ . DIRECTORY_SEPARATOR . "invoice.html");
// $invoicr->outputHTML(4, "invoice.png"); //main file code // 2 : FORCE DOWNLOAD