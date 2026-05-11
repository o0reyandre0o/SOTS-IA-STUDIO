const text = `
A & M LTD. T/A MK BEAUTY LAB Hairdresser including beautician,manicurist and
pedicurist
BEAUTY SALON TBR TB562BS 29-Jan-26 29-Jan-27 Block 13D, Parcel 437, Unit 7 Berthaze Court, Godfrey Nixon Way, George Town,
Grand Cayman, Cayman Islands
ACE ENGINEERING LTD T/A ACE ENGINEERING &
DESIGNS
Architect/Engineer/Surveyor/Computer Specialistincluding any architect/civil/electrical or
mechanical engineer,land or quantity surveyor or
any other professionally qualified person in the
field of constr
ENGINEERING & ARCHITECTURAL DESIGNS TBR TB939BE 08-Jan-26 08-Jan-27 Block 13D, Parcel 43H5, Unit 5 Dolphin Centre, 190 Eastern avenue, George Town,
Grand Cayman, Cayman Islands
AJB HOLDINGS LTD. T/A BOTANICA Property Maintenance or Property Management PROPERTY MANAGEMENT TBR TB699RL 19-Feb-26 19-Feb-27 Block OPY, Parcel 101, 13 Cardinal Avenue, George Town, Grand Cayman, Cayman
Islands
WISEUP SOLUTION LTD. Retailer for a business RETAILER BY ORDER/ ONLINE TBG 33335 08-Jan-26 08-Jan-27 Block 5B, Parcel 148, 2477 West Bay Road, West Bay, Grand Cayman, Cayman Islands
`;

const pattern = /([A-Z]{2,5})\s+([A-Za-z0-9\-\/]+)\s+(\d{1,2}-[A-Za-z]{3}-\d{2,4})\s+(\d{1,2}-[A-Za-z]{3}-\d{2,4})/g;

let matches = [...text.matchAll(pattern)];
console.log("Matches found: " + matches.length);
for (let m of matches) {
    console.log(m[0]);
}
