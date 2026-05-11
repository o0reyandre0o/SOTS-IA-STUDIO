const fs = require('fs');
const pdf = require('pdf-parse');

let dataBuffer = fs.readFileSync('../2026-04-23-15-19-32-March-TBL-2026.pdf');

pdf(dataBuffer).then(function(data) {
    fs.writeFileSync('text.txt', data.text);
    console.log("Extracted text. Length: " + data.text.length);
}).catch(err => console.error(err));
