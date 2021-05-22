const text = document.querySelector('.circular-text')

text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>")

const letters = document.querySelectorAll('.circular-text span')

for (let i = 0; i < letters.length; i++) {
    letters[i].style.transform = "rotate(" + i  * 14.8 +"deg)";
}