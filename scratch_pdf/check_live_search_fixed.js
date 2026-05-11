const auth = "Basic " + Buffer.from("admin:m8OI wwyz y6hl 1kp1 Jw6b 2a1v").toString("base64");

fetch("https://anti2.workingtoctoc.com/wp/wp-json/sots/v1/search?q=A%20%26%20M%20LTD", {
    headers: { "Authorization": auth }
}).then(res => res.json()).then(data => {
    console.log(JSON.stringify(data, null, 2));
}).catch(err => console.error(err));
