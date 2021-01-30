const content = [
    {
        imgSrc: 'https://fineshoes.ru/upload/medialibrary/513/oksfordy_kehptoe_berwick.jpg',
        title: 'Туфли',
        category: 'обувь'
    },
    {
        imgSrc: 'https://www.shoes-report.ru/upload/iblock/5fd/istoriya_legendarnoy_obuvi_mephisto_v_chem_sekret_bolee_chem_poluvekovogo_uspekha.jpg',
        title: 'Кроссовки',
        category: 'обувь'
    },
    {
        imgSrc: 'https://cdn.modoza.com/media/shop/79/75/3540/0f97/shoes-797535400f97e33f63e04fd8bb5ac709.jpg',
        title: 'Кроссовки черные',
        category: 'обувь'
    },
    {
        imgSrc: 'https://www.glamurnenko.ru/blog/wp-content/uploads/2014/11/photo_2.jpg',
        title: 'Пальто',
        category: 'верхняя одежда'
    },
    {
        imgSrc: 'https://image01.bonprix.ru/assets/241x331/1578322725/19325857-E66R9rte.jpg',
        title: 'Куртка',
        category: 'верхняя одежда'
    },
    {
        imgSrc: 'https://etelier.by/upload/iblock/f71/k376-seryy-s-siney-poloskoy_min.jpg',
        title: 'Черные брюки',
        category: 'брюки'
    }
]

const tabNav = document.querySelector('.tab-navs')
const tabContent = document.querySelector('.tab-content')

let outputTabNav = ''
let outputTabContent = ''
let categories = []

for (const value of content) {
    categories.push(value.category)
    outputTabContent += `
        <div class="tab-item">
            <img src="${value.imgSrc}">
            <h4>${value.title}</h4>
        </div>
    `
}

categories = [...new Set(categories)]

outputTabNav += `<button class='tab-btn' onclick="changeContent('все')">все</button>`

for (const item of categories) {
    outputTabNav += `<button class='tab-btn' onclick="changeContent('${item}')">${item}</button>`
}

tabNav.innerHTML = outputTabNav
tabContent.innerHTML = outputTabContent


function changeContent(current) {
    let output = ''

    for (const product of content) {

        if (product.category === current) {
            output += `
                <div class="tab-item">
                    <img src="${product.imgSrc}">
                    <h4>${product.title}</h4>
                </div>`
        }

        if (current === 'все') {
            output += `
            <div class="tab-item">
                <img src="${product.imgSrc}">
                <h4>${product.title}</h4>
            </div>`
        }

    }
    tabContent.innerHTML = output
}