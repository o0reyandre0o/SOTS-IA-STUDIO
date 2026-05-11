async function uploadPlugin() {
    try {
        let loginRes = await fetch('https://anti2.workingtoctoc.com/wp-login.php');
        let cookies = loginRes.headers.get('set-cookie') || '';
        
        const loginData = new URLSearchParams();
        loginData.append('log', 'admin');
        loginData.append('pwd', 'm8OI wwyz y6hl 1kp1 Jw6b 2a1v');
        loginData.append('wp-submit', 'Log In');
        loginData.append('redirect_to', 'https://anti2.workingtoctoc.com/wp-admin/');
        loginData.append('testcookie', '1');

        let postRes = await fetch('https://anti2.workingtoctoc.com/wp-login.php', {
            method: 'POST',
            body: loginData.toString(),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'Cookie': cookies
            },
            redirect: 'manual'
        });

        if (postRes.status === 302 && postRes.headers.get('location').includes('wp-admin')) {
            console.log('Login Exitoso en WP-Admin!');
        } else {
            console.log('Fallo el login. Quizás es un Application Password y no la contraseña real.');
        }

    } catch(err) {
        console.error(err.message);
    }
}
uploadPlugin();
