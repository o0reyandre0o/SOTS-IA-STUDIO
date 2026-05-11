const auth = "Basic " + Buffer.from("admin:m8OI wwyz y6hl 1kp1 Jw6b 2a1v").toString("base64");

fetch("https://anti2.workingtoctoc.com/wp/wp-json/wp/v2/plugins", {
    headers: { "Authorization": auth }
}).then(res => res.json()).then(data => {
    console.log(data.map(p => p.plugin));
}).catch(err => console.error(err));
