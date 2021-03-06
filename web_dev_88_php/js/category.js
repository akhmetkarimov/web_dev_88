getAllCategories()
function getAllCategories() {
    $.ajax({
        url: `api/category/get.php`
    }).done(function(res) {
        res = JSON.parse(res)
        showAllCategories(res.categories)
    })
}


function showAllCategories(categories) {
    let output = '<a class="p-2 text-muted" href="#" onclick="setCategory(0)">All</a>'
    let outputOptions = ''
    for (const category of categories) {
        output += `<a class="p-2 text-muted" href="#" onclick="setCategory(${category.id})">${category.name}</a>`
        outputOptions += `<option value="${category.id}">${category.name}</option>`
    }

    $('#all-categories').html(output)

    $('#category').html(outputOptions)
}
