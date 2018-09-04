const quotes = {
    "I spent 36 dollars on money.": "Vitani",
    "The nucleus is the powerhouse of the cell...": "Vitani",
    "Cats are more rubber than babies.": "Odega",
    "Can I make coffee juice?": "KR0N05",
    "Cacao my life!": "BabyDucks",
    "Close your door. I'll s**t on your floor.": "R3VAK"
};

let randomNumber = (Math.floor(Math.random() * quotes.getLength()));
let quote = quotes[randomNumber];
document.getElementById('quoteDisplay').innerHTML = "\"" + quote.key + "\"";
document.getElementById('nameDisplay').innerHTML = "~ " + quote.value;

