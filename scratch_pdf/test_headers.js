const text = `Location of last business...
Name Description Licence Type File Number Start Date End Date Location
A & M LTD. T/A MK BEAUTY LAB Hairdresser including beautician,manicurist and
pedicurist
BEAUTY SALON TBR TB562BS 29-Jan-26 29-Jan-27 Block 13D, Parcel 437, Unit 7 Berthaze Court, Godfrey Nixon Way, George Town,
Grand Cayman, Cayman Islands`;

const regex = /(?:Name\s*Description\s*Licence\s*Type\s*(?:Tbl\s*Number\s*)?File\s*Number\s*Start\s*Date\s*End\s*Date\s*Location|Tbl Number|File Number|Start Date|End Date)/gi;

console.log("CLEANED:", text.replace(regex, ' '));
