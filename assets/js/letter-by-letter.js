const texts = document.querySelectorAll('.letter-by-letter')

texts.forEach(text => {
    text.innerHTML = text.textContent.replace(/\S/g,"<span>$&</span>")
})

console.log(texts)