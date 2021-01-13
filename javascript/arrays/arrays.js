// []

let arr = [1, 22, 12, 23]

console.log(arr)
console.log(arr[2])

arr[2] = 99

console.log(arr[0])
console.log(arr[1])
console.log(arr[2])
console.log(arr[3])

arr[4] = 88
arr[5] = 88

// for (let i = 0; i < arr.length; i++){
//     console.log(arr[i])
// }

console.log(arr)

let sum = 0

for (let item of arr) {
    sum += item
}
console.log(sum)

// for (let index in arr) {
//     console.log('For in', index, arr[index])
// }


let imgs = [
    'https://beanpictures.com.my/wp-content/uploads/2020/05/beanpictures_home1resized-scaled.jpg', 
    'https://www.inditex.com/documents/10279/544057/Zara_Bilbao_HR.jpg/54385abb-83c8-16f3-b5d3-69d7a7efdf49?t=1528191974413', 
    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR18lLh8Ssqiv0SKwovy8zydwCuWdAGJGx_Pg&usqp=CAU'
]

let output = ''
let p = 123


for (let item of imgs) {
    // output += `<img src=${item} width='200'>`
    output += "<img src=" + item + " width='300px' height='300px'>"
}

document.write(output)





// console.log("Hello " + p + " asdasd") 
// console.log('Hello p')
// console.log(`Hello ${p} weq weq we`)
