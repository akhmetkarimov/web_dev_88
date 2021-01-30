document.querySelector('.h2js').innerHTML = 'Hello JS change'
$('.h2jq').html('Hello JQ change')


const plist = document.querySelectorAll('.pjs')
for (const p of plist) {
    p.innerHTML = "Hello p JS Change"
}

$('.pjq').html('Hello p JQ change')