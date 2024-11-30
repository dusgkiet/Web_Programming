function countWords() {
    const inputText = document.getElementById("input-text").value;
    const words = inputText.trim().split(/\s+/).filter(word => word !== "");
    const wordCount = words.length;
    const resultElement = document.getElementById("word-count-result");
    resultElement.textContent = `Số từ: ${wordCount}`;
}
