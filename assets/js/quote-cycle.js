const quotes = {
    "I spent 36 dollars on money.": "Vitani",
    "The nucleus is the powerhouse of the cell...": "Vitani",
    "Cats are more rubber than babies.": "Odega",
    "Can I make coffee juice?": "KR0N05",
    "Cacao my life!": "BabyDucks",
    "Close your door. I'll s**t on your floor.": "R3VAK"
};

function getQuote() {
    let randomNumber = (Math.floor(Math.random() * Object.keys(quotes).length);
    let quote = Object.keys(quotes)[randomNumber];
    let author = quotes[quote];
    document.getElementById('quoteDisplay').innerText = "\"" + quote + "\"";
    document.getElementById('nameDisplay').innerHTML = "~ " + author;
}

getQuote();