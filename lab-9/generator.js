function generatePassword() {
    const length = document.getElementById('passwordLength').value;
    const characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_,!';
    let password = '';

    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        password += characters.charAt(randomIndex);
    }

    document.getElementById('passwordOutput').innerText = 'Сгенерированный пароль: ' + password;
}
