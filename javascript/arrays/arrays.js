// // []

// let arr = [1, 22, 12, 23]

// console.log(arr)
// console.log(arr[2])

// arr[2] = 99

// console.log(arr[0])
// console.log(arr[1])
// console.log(arr[2])
// console.log(arr[3])

// arr[4] = 88
// arr[5] = 88

// // for (let i = 0; i < arr.length; i++){
// //     console.log(arr[i])
// // }

// console.log(arr)

// let sum = 0

// for (let item of arr) {
//     sum += item
// }
// console.log(sum)

// // for (let index in arr) {
// //     console.log('For in', index, arr[index])
// // }


// let imgs = [
//     'https://beanpictures.com.my/wp-content/uploads/2020/05/beanpictures_home1resized-scaled.jpg', 
//     'https://www.inditex.com/documents/10279/544057/Zara_Bilbao_HR.jpg/54385abb-83c8-16f3-b5d3-69d7a7efdf49?t=1528191974413', 
//     'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR18lLh8Ssqiv0SKwovy8zydwCuWdAGJGx_Pg&usqp=CAU'
// ]

// let output = ''
// let p = 123


// for (let item of imgs) {
//     // output += `<img src=${item} width='200'>`
//     output += "<img src=" + item + " width='300px' height='300px'>"
// }

// document.write(output)





// // console.log("Hello " + p + " asdasd") 
// // console.log('Hello p')
// // console.log(`Hello ${p} weq weq we`)



// let testArr = [22, 124, 22, 33, 12, 75, 27]

// console.log(testArr)

// testArr.push(65789)

// console.log(testArr)

// testArr.unshift(1111)

// console.log(testArr)

// testArr.pop()
// testArr.pop()

// console.log(testArr)

// testArr.shift()

// console.log(testArr)

// // push - добавление элемента в конец массива 
// // unshift - добавление элемента в начало массива 

// // pop - удаление элемента с конца массива 
// // shift - удаление элемента c начало массива 


// testArr.sort()
// console.log(testArr)

// testArr.reverse()
// console.log(testArr)

// console.log(testArr.join('-'))

// // console.log(testArr.keys())
// // console.log(testArr.values())



// // let size = Number(prompt('Enter size of array'))
// // let tempArr = []

// // for (let i = 0; i < size; i++) {
// //     let num = +(prompt('Enter Element of array'))
// //     tempArr.push(num)
// // }

// // console.log(tempArr)

// // console.log(tempArr.slice(0, 1))
// // console.log(tempArr.splice(0, 2))


// let arr = [2, 11, -2, -1, -55, 12, 88, 90]

// let neg = []
// let pos = []


// for (let item of arr) {
//     if (item > 0) {
//         pos.push(item)
//     } else {
//         neg.push(item)
//     }
// }


// console.log(arr)
// console.log(neg)
// console.log(pos)


// let obj = {
//     key: value,
//     key1: value1,
//     ...
// }


let tempObj = {
    name: "Yedil",
    skills: ['JS', 'HTML', 'CSS'],
    salary: 2000,
}

tempObj.address = 'Almaty'
tempObj.address1 = 'Almaty 2'

console.log(tempObj)
console.log(tempObj.name)
console.log(tempObj.skills)
console.log(tempObj.salary)

console.log(tempObj['name'])
console.log(tempObj['skills'])
console.log(tempObj['salary'])


for (let item of tempObj.skills) {
    console.log(item)
}


let arrObj = [
    {
        name: 'Test Name 1',
        salary: 1000
    },
    {
        name: 'Test Name 2',
        salary: 2000
    },
    {
        name: 'Test Name 3',
        salary: 1500
    },
    {
        name: 'Test Name 4',
        salary: 1200
    },
    {
        name: 'Test Name 5',
        salary: 2500
    }
]

console.log(arrObj)

// for (let index in arrObj) {
//     console.log(arrObj[index].name, arrObj[index].salary)
// }

// console.log('-------------')

let sum = 0

for (let item of arrObj) {
    sum += item.salary
}

let avg = sum / arrObj.length

for (let item of arrObj) {
    if (item.salary > avg){
        console.log(item)
    }
}
console.log(avg)


// console.log('-------------')

// for (let i = 0; i < arrObj.length; i++) {
//     console.log(arrObj[i].name, arrObj[i].salary)
// }

let content = [
    {
        imgSrc: 'https://images.pexels.com/photos/771742/pexels-photo-771742.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        imgTitle: 'Profile 1' 
    },
    {
        imgSrc: 'https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        imgTitle: 'Profile 2'
    },
    {
        imgSrc: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBwgu1A5zgPSvfE83nurkuzNEoXs9DMNr8Ww&usqp=CAU',
        imgTitle: 'Profile 3'
    },
    {
        imgSrc: 'https://pbs.twimg.com/profile_images/1036730403514736650/PCRxFiEt_400x400.jpg',
        imgTitle: 'Profile 4'
    },
]


let output = '<div class="wrap">'

for (let item of content) {
    output += `
    <div class="profile-item">
        <img src = "${item.imgSrc}">
        <h3>${item.imgTitle}</h3>
    </div>`
}

output += '</div>'

document.write(output)