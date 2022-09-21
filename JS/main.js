let carts = document.querySelectorAll('.button');

let products = [
    name:
]

for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers();
    })
}
function cartNumbers() {
    let pro_Num = localStorage.getItem('cartNumbers');
    pro_Num = parseInt(pro_Num);
    localStorage.setItem('cartNumbers' , 1);
}