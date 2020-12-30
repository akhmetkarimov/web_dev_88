// if (condition) {
//     body
// }

// > < >= <= == != === !==


if (10 > 20) {
    console.log('IF')
} else {
    console.log('ELSE')
}

console.log(10 > 8)
console.log(10 < 8)
console.log(10 == 10)
console.log(10 != '10')
console.log(10 !== '10')
console.log(10 == '10')
console.log(10 === 10)




let rand = Math.floor(Math.random() * 100)
console.log(rand)

if (rand % 2 == 0) {
    console.log('Even')
} else {
    console.log('Odd')
}


// let num1 = +(prompt('Enter number 1'))
// let num2 = +(prompt('Enter number 2'))

// if (num1 > num2){
//     console.log('num1', num1)
// } else{
//     console.log('num2', num2)
// }


if (10 == 20) {
    console.log('10==10')
} else if (20 < 1) {
    console.log('20 > 1')
} else if (10 < 40) {
    console.log('10 < 40 1')
} else if (10 < 40) {
    console.log('10 < 40 2')
} else if (10 < 40) {
    console.log('10 < 40 3')
}  else {
    console.log('else')
}


// && - AND
// || - OR


if (10 > 10 && 20 <= 20) {
    console.log('and if')
} else {
    console.log('and else')
}


if (10 > 10 || 20 <= 20) {
    console.log('or if')
} else {
    console.log('or else')
}

// let num1 = +(prompt('Enter number 1'))
// let num2 = +(prompt('Enter number 2'))
// let num3 = +(prompt('Enter number 3'))

// if (num1 > num2 && num1 > num3){
//     console.log('num1', num1)
// } else if (num3 > num1 && num3 > num2) {
//     console.log('num3', num3)
// } else{
//     console.log('num2', num2)
// }



// if (10 < 2) {
//     if (20 >= 20) {
//         console.log('inner if')
//     }
//     console.log('if')
// } else {
//     console.log('else')
// }


let n1 = 20
let n2 = 21
let n3 = 9
let max = 0

if (n1 > max) {
    max = n1
}

if (n2 > max) {
    max = n2
}

if (n3 > max) {
    max = n3
}

console.log(max)

// if (n1 % 3 == 0) {
//     console.log('n1', n1)
// }  

// if (n2 % 3 == 0) {
//     console.log('n2', n2)
// } 

// if (n3 % 3 == 0) {
//     console.log('n3', n3)
// }


let result = 20 % 2 == 0 ? 'even' : 'odd'
console.log(result)

if (20 % 2 == 0) {
    console.log('even')
} else {
    console.log('odd')
}