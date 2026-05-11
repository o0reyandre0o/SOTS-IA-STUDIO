const text = "NAME DESCRIPTION LICENCE TYPE FILE NUMBER START DATE END DATE LOCATION A & M LTD. T/A MK BEAUTY LAB";
const regex = /^(?:(?:NAME|DESCRIPTION|LICENCE|TYPE|FILE|NUMBER|START|DATE|END|LOCATION|TBL)\s*)+/i;
const clean = text.replace(regex, '');
console.log("Original: " + text);
console.log("Cleaned:  " + clean);
