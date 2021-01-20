// function functionName (params1, params2, ...) {
//     body
// }

// let arrowFunctionName = (params1, params2, ...) => {
//     body
// }

// test('Gulnar')

// function test(name) {
//     console.log('Function call', name)
// }

// test('Yedil')


// let arrowTest = () => {
//     console.log('Arrow Function call')
// }

// arrowTest()


// function printArray(arr) {
//     for (let item of arr) {
//         console.log(item)
//     }    
// }


// let arr = [1, 2, 3, 88, 12]
// let arr1 = [1, 212, 3, 88, 12]
// let arr2 = [1, 2, 3, 88, 12123, 123]
// let arr3 = [1221, 2, 3, 88, 1232]
// let arr4 = [1, 231, 3, 8821312, 12]

// printArray(arr)
// console.log('-----')
// printArray(arr1)
// console.log('-----')
// printArray(arr2)
// console.log('-----')
// printArray(arr3)
// console.log('-----')
// printArray(arr4)






function imageOut(){
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
    
    document.getElementById('outContent').innerHTML += output
}



// function sum(n1, n2) {
//     return n1 + n2
// }

// let result = sum(20, 45)

// console.log(result)


// function printMsg(name) {
//     return `Welcome ${name} to our class!!!`
// }

// console.log(printMsg('Yedil'))



// let globVar = 20

// function testLocal(){
//     let localVar = 55
//     globVar = 222
//     console.log('In local function', globVar)
//     console.log('In local function', localVar)
// }

// function testLocal2(){
//     let localVar = '111111'
//     console.log('local2 ', localVar)
// }
// console.log('Before function', globVar)

// testLocal()

// console.log('After function', globVar)

// testLocal2()

async function printFirst(){
    setTimeout(function(){
        console.log('First print')
    }, 4000)
}

async function printSecond(){
    setTimeout(function(){
        console.log('Second print')
    }, 2000)
}

async function printThird(){
    setTimeout(function(){
        console.log('Third print')
    }, 3000)
}

async function printFourth(){
    await printFirst()
    await printSecond()
    await printThird()
}

printFourth()
