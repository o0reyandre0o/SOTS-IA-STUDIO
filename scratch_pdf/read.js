const fs = require('fs');
const pdf = require('pdf-parse');

let dataBuffer = fs.readFileSync('../2026-04-23-15-19-32-March-TBL-2026.pdf');

pdf(dataBuffer).then(function(data) {
    // just print the first 500 characters of the text
    console.log(data.text.substring(0, 500));
}).catch(err => console.error(err));
