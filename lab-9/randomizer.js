function randomize() {
    const min = parseInt(document.getElementById('min').value);
    const max = parseInt(document.getElementById('max').value);

    if (isNaN(min) || isNaN(max)) {
        alert('Пожалуйста, введите числовые значения для минимального и максимального диапазона.');
        return;
    }

    const result = Math.floor(Math.random() * (max - min + 1)) + min;
    document.getElementById('result').innerText = `Результат: ${result}`;
}
