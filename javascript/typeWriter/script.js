const words = [
    'First Word in array',
    'Second Word in array',
    'Third Word in array',
]

let charTurn = 0
let wordTurn = 0
const output = document.getElementById('outText')

// console.log('hello'.indexOf('o'))
printWord()

function printWord() {
    if (charTurn <= words[wordTurn].length) {
        let str = words[wordTurn].substr(0, charTurn)
        output.innerHTML = str
        charTurn += 1

        setTimeout(printWord, 150)
    } else {
        wordTurn += 1
        charTurn = 0

        if (wordTurn >= words.length) {
            wordTurn = 0
        }

        setTimeout(printWord, 150)
    }
}