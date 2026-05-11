<?php
$text = "Location of last business...\nName Description Licence Type File Number Start Date End Date Location\nA & M LTD. T/A MK BEAUTY LAB Hairdresser including beautician,manicurist and\npedicurist\nBEAUTY SALON TBR TB562BS 29-Jan-26 29-Jan-27 Block 13D, Parcel 437, Unit 7 Berthaze Court, Godfrey Nixon Way, George Town,\nGrand Cayman, Cayman Islands";

$headers_regex = '/(?:Name\s*Description\s*Licence\s*Type\s*(?:Tbl\s*Number\s*)?File\s*Number\s*Start\s*Date\s*End\s*Date\s*Location|Tbl Number|File Number|Start Date|End Date)/i';
$text = preg_replace($headers_regex, ' ', $text);

echo "CLEANED TEXT:\n" . $text;
