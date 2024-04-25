function startTimer() {
    const seconds = parseInt(document.getElementById('seconds').value);

    if (isNaN(seconds) || seconds <= 0) {
        alert('Пожалуйста, введите положительное число секунд.');
        return;
    }

    setTimeout(() => alert('Время вышло!'), seconds * 1000);
}
