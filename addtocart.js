const product = [
    {
        id: 0,
        image: 'image/c1.jpg',
        title: 'Dr.soil for coffee',
        price: 650,
    },
    {
        id: 1,
        image: 'image/c2.jpg',
        title: 'Gacil',
        price: 590,
    },
    {
        id: 2,
        image: 'image/c3.jpg',
        title: 'Parvi',
        price: 470,
    },
    {
        id: 3,
        image: 'image/c4.jpg',
        title: 'TrustBascket',
        price: 760,
    },
    {
        id: 4,
        image: 'image/c5.jpg',
        title: 'NPK',
        price: 678,
    },
    {
        id: 5,
        image: 'image/c6.jpg',
        title: 'Pepper Gold',
        price: 678,
    }
    ,
    {
        id: 6,
        image: 'image/c7.jpg',
        title: 'Cotton Grow',
        price: 760,
    }
    ,
    {
        id: 7,
        image: 'image/c8.jpg',
        title: 'Neem cake',
        price: 870,
    }
    ,
    {
        id: 8,
        image: 'image/c9.jpg',
        title: 'Paddy Spe.',
        price: 670,
    }
    ,
    {
        id: 9,
        image: 'image/c10.jpg',
        title: 'Gacil sugarcane special',
        price: 786,
    }
    ,
    {
        id: 10,
        image: 'image/c11.jpg',
        title: 'Growth Booster',
        price: 699,
    }
    ,
    {
        id: 11,
        image: 'image/c12.jpg',
        title: 'Global Agro',
        price: 780,
    }
    ,
    {
        id: 12,
        image: 'image/c13.jpg',
        title: 'Micro-Nutrient Mixture',
        price: 890,
    }
    ,
    {
        id: 13,
        image: 'image/c14.jpg',
        title: 'Micro-Nutrients Booster Liquid',
        price: 870,
    }
    ,
    {
        id: 14,
        image: 'image/c15.jpg',
        title: 'Humic acid',
        price: 980,
    }
    ,
    {
        id: 15,
        image: 'image/c16.jpg',
        title: 'flower Booster',
        price: 879,
    }
    ,
    {
        id: 16,
        image: 'image/c17.jpg',
        title: 'Bio-in',
        price: 760,
    }
    ,
    {
        id: 17,
        image: 'image/c18.jpg',
        title: 'Agroveer',
        price: 1009,
    }
    ,
    {
        id: 18,
        image: 'image/c19.jpg',
        title: 'Jeevamrut',
        price: 869,
    }
    ,
    {
        id: 19,
        image: 'image/c20.jpg',
        title: 'Bact-Compost Booster',
        price: 789,
    }
    
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>Rs ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "Rs"+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "Rs"+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>Rs ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }

    
}