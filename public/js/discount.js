(function() {
"use strict";


var customers = [];

function displayInfo()
{
    customers.forEach(function(customer) {
        var total = customer.calculateTotal();
        var discountTotal = customer.calculateTotalWithDiscount();

        console.log(customer.name + ' purchase ' + customer.products.length + ' items that cost ' + total + ' total. After discount it cost ' + discountTotal);
    });
}

function collectInfo()
{
    var customer = {
        name: null,
        products: [],
        calculateTotal: function() {
            var total = 0;
            this.products.forEach(function(product) {
                total += product.price;
            });
            return total;
        },
        calculateTotalWithDiscount: function() {
            var total = this.calculateTotal();

            if (total >= 200) {
                total = total - (total * .35);
            }

            return total;
        }
    }

    customer.name = prompt('What is the customer\'s name?');

    do {

        var product = {
            name: null,
            price: 0
        };
        product.name = prompt('What did the customer buy?');
        product.price = parseFloat(prompt('How much did ' + product.name + ' cost?'));
        customer.products.push(product);

        var moreProducts = confirm('Do you have more products to enter for ' + customer.name + '?');
    } while (moreProducts);

    customers.push(customer);
}

do {
    collectInfo();

    var moreCustomers = confirm('Do you have more customers to add?');
} while(moreCustomers);

displayInfo();

})();



// var cameronCost = 180;
// var ryanCost = 250;
// var georgeCost = 320;

// var discountCostRequirement = 200;
// var discount = 0.35;

// var cameronCostWithDiscount;
// if (cameronCost > discountCostRequirement) {
//     cameronCostWithDiscount = cameronCost - (cameronCost * discount);
// } else {
//     cameronCostWithDiscount = cameronCost;
// }
// console.log('Cameron: ' + cameronCost + ', ' + cameronCostWithDiscount);

// var ryanCostWithDiscount;
// if (ryanCost > discountCostRequirement) {
//     ryanCostWithDiscount = ryanCost - (ryanCost * discount);
// } else {
//     ryanCostWithDiscount = ryanCost;
// }
// console.log('Ryan: ' + ryanCost + ', ' + ryanCostWithDiscount);

// var georgeCostWithDiscount;
// if (georgeCost > discountCostRequirement) {
//     georgeCostWithDiscount = georgeCost - (georgeCost * discount);
// } else {
//     georgeCostWithDiscount = georgeCost;
// }
// console.log('Ryan: ' + georgeCost + ', ' + georgeCostWithDiscount);